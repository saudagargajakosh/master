<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
		$this->ads = '';
		$this->ads = $this->ads_model->get_ads();
    }
	
	public function index()
	{
		$data['ads_row'] = $this->ads;
		$data['title'] = SITE_NAME.': jfa certification Dashboard';
		
		$row = $this->employers_model->get_employer_by_id($this->session->userdata('user_id'));
		//Jobs by company
		$result_posted_jobs = $this->posted_certification_model->get_active_deactive_posted_certification_by_company_id($row->company_ID, 5, 0);
		$total_opened_jobs = count($result_posted_jobs);
		
		//Applied Jobs by Employer ID
		$result_applied_jobs = $this->applied_certification_model->get_applied_certification_by_employer_id($row->ID, 5, 0);
		
		$company_logo = ($row->company_logo)?$row->company_logo:'no_logo.jpg';
		
		$job_url = $row->company_slug.'-certification-in-';
		
		$data['row'] 				= $row;
		$data['total_opened_jobs'] 	= $total_opened_jobs;
		$data['job_url']		 	= $job_url;
		$data['result_posted_jobs'] = $result_posted_jobs;
		$data['result_applied_jobs']= $result_applied_jobs;
		$data['company_logo'] 		= $company_logo;
		$this->load->view('nsdc_vtp_certification/certification_dashboard_view',$data);
	}
	
}
