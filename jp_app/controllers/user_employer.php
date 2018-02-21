<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Employer extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
		$this->ads = '';
		$this->ads = $this->ads_model->get_ads();
    }
	
	public function index(){
		
		redirect(base_url().'user_employer/login_employer');
		
	}

	public function login_employer()
	{
		if($this->session->userdata('is_user_login')==TRUE){
			if($this->session->userdata('is_employer')==TRUE)
				redirect(base_url('employer/dashboard'),'');
			else
				redirect(base_url('jobseeker/dashboard'),'');
			exit;
		}

		$data['result_industries'] = $this->industries_model->get_all_employer_industries_login();
		
		$username = $this->input->post('email_phoneEmp');
		if (empty($username)) 
		{
			$this->session->flashdata('msgemp', "This email address or mobile number doesn't exist, please register.");
			redirect(base_url().'?mobile-emp=emperror');
		}

		$userRow = $this->employers_model->check_employer_mobile_or_email($username);
		// echo "<pre>"; print_r($userRow); exit;
		if(count($userRow) > 0)
		{
			$encrypt_key = $this->input->post('passEmp');
			if(empty($encrypt_key))
			{
				$this->session->set_flashdata('resultemp', 'true');
				$this->session->set_userdata('indus_id', $userRow['industry_com_id']);
				$this->session->set_flashdata('useremp', $username);
				redirect(base_url().'?mobile-emp=empsuccess');	
			}
			else
			{
				$userRow_1 = $this->employers_model->authenticate_employer($username, md5($encrypt_key),$this->input->post('industry_idEmp'));
				// echo "<pre>"; print_r($userRow_1); exit;
				if(isset($userRow_1->ID))
				{
					$is_job_seeker = FALSE;
					$is_employer = TRUE;
					$folder = 'employer';
					$slug = @$userRow_1->company_slug;
					$user_data = array(
							 'user_id' => $userRow_1->ID,
							 'user_email' => $userRow_1->email,
							 'first_name' => $userRow_1->first_name,
							 'slug' => $slug,
							 'industry_com_id' => $userRow_1->industry_com_id,
							 'first_name' => $userRow_1->first_name,
							 'is_user_login' => TRUE,
							 'is_job_seeker' => $is_job_seeker,
							 'is_employer' => $is_employer
							);
					$this->session->set_userdata($user_data);
					
					$this_model_name = ($is_employer==TRUE)?'employers_model':'job_seekers_model';
		
					if($userRow_1->first_login_date==''){
						$this->$this_model_name->update($userRow_1->ID, array('first_login_date' => date("Y-m-d H:i:s"), 'last_login_date' => date("Y-m-d H:i:s"), 'sts' => 'active'));
					} else {
						$this->$this_model_name->update($userRow_1->ID, array('last_login_date' => date("Y-m-d H:i:s")));
					}
					// if($this->input->post('industry_id')==5){
					// $redirect = ($this->session->userdata('back_from_user_login')) ? $this->session->userdata('back_from_user_login') : $folder.'/dashboard';
					// }
						
					
					$this->session->set_userdata('back_from_user_login','');
					redirect(base_url($redirect), '');

				}
				else
				{
					$this->session->set_flashdata('resultemp', 'true');
					$this->session->set_flashdata('wrong_pass', 'Invalid Password');
					$this->session->set_userdata('indus_id', $userRow['industry_com_id']);
					$this->session->set_flashdata('useremp', $username);
					redirect(base_url().'?mobile-emp=empsuccess');
				}

			}
		}
		else
		{
			$this->session->set_flashdata('msg', "This mobile number or email address does't exists, please register.");
			redirect(base_url().'?mobile-emp=emperror');
		}
	}
	
	public function login_employer_backup(){
		
		if($this->session->userdata('is_user_login')==TRUE){
			if($this->session->userdata('is_employer')==TRUE)
				redirect(base_url('employer/dashboard'),'');
			
			exit;
		}
		$data['ads_row'] = $this->ads;
		$data['title'] = 'Apply for jobs';
		$data['msg'] = '';
		// $signup_link = base_url('jobseeker-signup');
		
		if(stristr($this->session->userdata('back_from_user_login'), 'employer/')){
			$signup_link = base_url('employer-signup');
		}
		
		
		$data['signup_link'] = $signup_link;
		$data['result_industries'] = $this->industries_model->get_all_employer_industries_login();
		$this->form_validation->set_rules('email', 'Email address', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if ($this->form_validation->run() === FALSE) {
			$data['msg'] = $this->session->flashdata('msg');
			$this->load->view('login_view_employer', $data);
			return;
		}
		
		$is_job_seeker = TRUE;
		$folder = 'jobseeker';
		$is_employer = FALSE;
		// $userRow = $this->job_seekers_model->authenticate_job_seeker($this->input->post('email'), $this->input->post('pass'));
		$slug = '';
		if(!$userRow){
			$is_job_seeker = FALSE;
			$is_employer = TRUE;
			$folder = 'employer';
			$encrypt_key=$this->input->post('pass');
			$userRow = $this->employers_model->authenticate_employer($this->input->post('email'), $this->encrypt->decode($encrypt_key),$this->input->post('industry_com_id'));
			if(!$userRow){
				$data['msg'] = 'Wrong email or password provided';
				$this->load->view('login_view_employer', $data);
				return;
			}
		}
		
		if($userRow->sts=='pending'){
			$data['msg'] = 'You have not yet verified your email address.';
			$this->load->view('login_view_employer', $data);
			return;
		}
		
		if($userRow->sts=='blocked'){
			$data['msg'] = 'Your account was suspended. Please contact site admin for further information.';
			$this->load->view('login_view_employer', $data);
			return;
		}
		
		$slug = @$userRow->company_slug;
		$user_data = array(
				'user_id' => $userRow->ID,
				 'user_email' => $userRow->email,
				 'first_name' => $userRow->first_name,
				 'industry_com_id' => $userRow->industry_com_id,
				 'slug' => $slug,
				 'first_name' => $userRow->first_name,
				 'is_user_login' => TRUE,
				 'is_job_seeker' => $is_job_seeker,
				 'is_employer' => $is_employer
				 );
			
		$this->session->set_userdata($user_data);


		$this_model_name = ($is_employer==TRUE)?'employers_model':'job_seekers_model';
		
		if($userRow->first_login_date==''){
			$this->$this_model_name->update($userRow->ID, array('first_login_date' => date("Y-m-d H:i:s"), 'last_login_date' => date("Y-m-d H:i:s"), 'sts' => 'active'));
		} else {
			$this->$this_model_name->update($userRow->ID, array('last_login_date' => date("Y-m-d H:i:s")));
		}
		// if($this->input->post('industry_id')==5){
		// $redirect = ($this->session->userdata('back_from_user_login')) ? $this->session->userdata('back_from_user_login') : $folder.'/dashboard';
		// }
			
		
		$this->session->set_userdata('back_from_user_login','');
		redirect(base_url($redirect), '');
	}	
		
	public function forgot(){
		
		$data['ads_row'] = $this->ads;
		$data['title'] = 'Recover Your Password';
		$data['msg'] = '';
		$signup_link = base_url('jobseeker-signup');
		
		$this->form_validation->set_rules('email', 'email address', 'trim|required|valid_email');
		$this->form_validation->set_rules('captcha', 'Verification code', 'trim|required|validate_ml_spam');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->form_validation->run() === FALSE) {
			$data['cpt_code'] = create_ml_captcha();
			$this->load->view('forgot_view', $data);
			return;
		}
		
		if(stristr($this->session->userdata('back_from_user_login'), 'employer/')){
			$signup_link = base_url('employer-signup');
		}
		else
		{
			$signup_link = base_url('jobseeker-signup');
		}
		
		$data['signup_link'] = $signup_link;
		
		
		$row = $this->job_seekers_model->authenticate_job_seeker_email_address($this->input->post('email'));
		$email = @$row->email;
		$password = @$row->password;
		if(!$row){
			$row = $this->employers_model->authenticate_employer_by_email($this->input->post('email'));	
			if(!$row){
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">Provided email address does not exist.</div>');
				redirect(base_url('forgot'));
				exit;
			}
			$email = $row->email;
			$password = $row->pass_code;
		}
		
		$row_email = $this->email_model->get_records_by_id(1);
		
		$config = array();
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
	
		$this->email->initialize($config);
		$this->email->clear(TRUE);
		$this->email->from($row_email->from_email, $row_email->from_name);
		$this->email->to($email);
		
		$this->email->subject(SITE_NAME.' | Password Recovery');
		$mail_message = $this->email_drafts_model->get_forgot_password_draft($email, $password, $row_email->content);
		$this->email->message($mail_message);					
		$this->email->send();		
		$this->session->set_flashdata('success_msg', '<div class="alert alert-success">Your account information has been sent to your email address.</div>');
		redirect(base_url('login'));		
	}
	
	public function logout() {
		  
		  $user_data = array(
				'user_id' => '',
				 'useremail' => '',
				 'is_user_login' => FALSE,
				 'slug' => '',
				 'is_job_seeker' => FALSE,
				 'is_employer' => FALSE
				 );
		$this->session->set_userdata($user_data);
		$this->session->unset_userdata($user_data);
		redirect(base_url(), 'refresh'); 
	}

	/*
	* Login with OTP (Saudagar) 
	*/
	public function generateOTPEmp()
	{
		$userRow = $this->employers_model->check_mobile_existance($this->input->post('mobile'));
		$m_otp = generateRandomString();
		$otp_id = $this->employers_model->upadte_user_otp($m_otp, $userRow['ID']);

		$from = '';
		$message = "Your One Time Password(OTP) is ".$otp_id['mobile_otp'];
		$response_sms   = send_sms($from,$otp_id['mobile_phone'],$message);
		echo $response_sms;
	}

	public function get_resend_OTPEmp()
	{
		$this->input->post('mobile');
		$otp_id = $this->employers_model->get_employer_request_otp($this->input->post('mobile'));

		$from = '';
		$message = "Your One Time Password(OTP) is ".$otp_id['mobile_otp'];
		$response_sms   = send_sms($from,$otp_id['mobile_phone'],$message);
		echo $response_sms;

	}

	public function loginWithOTPEmp()
	{
		if(!empty($this->input->post('mobileOtpEmp')))
		{
			$userRow_1 = $this->employers_model->authenticate_job_seekerWithOTPEmp($this->input->post('mobileOtpEmp'));
			if(count($userRow_1) > 0)
			{
				$is_job_seeker = FALSE;
				$is_employer = TRUE;
				$folder = 'employer';
				$slug = @$userRow_1->company_slug;
				$user_data = array(
					 'user_id' => $userRow_1['ID'],
					 'user_email' => $userRow_1['email'],
					 'first_name' => $userRow_1['first_name'],
					 'first_name' => $userRow_1['first_name'],
					 'industry_com_id' => $userRow_1['industry_com_id'],
					 'is_user_login' => TRUE,
					 'is_job_seeker' => $is_job_seeker,
					 'is_employer' => $is_employer
				);
				$this->session->set_userdata($user_data);
				$this_model_name = ($is_employer==TRUE)?'employers_model':'job_seekers_model';

				if($userRow_1->first_login_date==''){
					$this->$this_model_name->update($userRow_1->ID, array('first_login_date' => date("Y-m-d H:i:s"), 'last_login_date' => date("Y-m-d H:i:s"), 'sts' => 'active'));
				} else {
					$this->$this_model_name->update($userRow_1->ID, array('last_login_date' => date("Y-m-d H:i:s")));
				}
				$this->session->set_userdata('back_from_user_login','');
				redirect(base_url($redirect), '');
			}
		}
		else
		{
			$this->session->set_flashdata('otperror', "Something went wrong.");
			redirect(base_url().'?otp=otp-error');
		}
	}	
	
	/*
	* Ends Login with OTP
	*/

}
