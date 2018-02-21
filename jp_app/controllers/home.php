<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
		$this->ads = '';
		$this->ads = $this->ads_model->get_ads();
    }
	
	public function index()
	{
		
		$data['ads_row'] = $this->ads;
		
		$data['title'] = 'YPLE: One-Stop Shop for Livelihood Improvement';
		
		//Latest jobs section
		$latest_jobs_result = $this->posted_jobs_model->get_opened_jobs_home_page(20, 0);
		$total_posted_jobs 	= $this->posted_jobs_model->record_count('pp_post_jobs');
		$total_posted_certification 	= $this->posted_jobs_model->record_count('pp_post_certification');
		$total_posted_training 	= $this->posted_jobs_model->record_count('pp_post_training');
		$total_posted_voulnteer 	= $this->posted_jobs_model->record_count('pp_post_voulnteer');
		$latest_certifications_result = $this->posted_jobs_model->get_opened_certification_home_page(20, 0);
		$latest_voulnteer_result = $this->posted_jobs_model->get_opened_voulnteer_home_page(20, 0);
		$latest_training_result = $this->posted_jobs_model->get_opened_training_home_page(20, 0);
		// print_r($latest_certifications_result);
		//Top employer section
		$top_employer_result= $this->employers_model->get_all_active_top_employers(4, 0);
		$total_employers 	= $this->employers_model->record_count('pp_employers');
		
		//Feature jobs
		$featured_job_result= $this->posted_jobs_model->get_active_featured_posted_job(10, 0);
		
		//Cities
		$data['cities_res'] = $this->cities_model->get_all_cities();
		
		$data['total_posted_jobs'] = $total_posted_jobs;
		$data['total_posted_voulnteer'] = $total_posted_voulnteer;
		$data['total_posted_training'] = $total_posted_training;
		$data['total_posted_certification'] = $total_posted_certification;
		$data['latest_jobs_result'] = $latest_jobs_result;
		$data['latest_certifications_result'] = $latest_certifications_result;
		$data['latest_voulnteer_result'] = $latest_voulnteer_result;
		$data['latest_training_result'] = $latest_training_result;
		$data['top_employer_result'] = $top_employer_result;
		$data['total_employers'] = $total_employers;
		$data['featured_job_result'] = $featured_job_result;		
		$this->load->view('home_view',$data);
		
	}
	
	function languages()
	{
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	    extract($_POST);
	    $this->session->set_userdata('language', $dlang);
	    $redirect_url = base_url().$current;
	    redirect($redirect_url);	
		$data['lang'] = $this->session->userdata('language');
	}
}
