<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = "home";
$route['404_override'] = '';
//Frontend
$route['company/(:any)'] = 'company/index/$1';
$route['company_certification/(:any)'] = 'company_certification/index/$1';
$route['company_voulnteer/(:any)'] = 'company_voulnteer/index/$1';
$route['company_training/(:any)'] = 'company_training/index/$1';
$route['jobs/(:any)'] = 'job_details/index/$1';
$route['certifications/(:any)'] = 'certification_details/index/$1';
$route['voulnteers/(:any)'] = 'voulnteer_details/index/$1';
$route['trainings/(:any)'] = 'training_details/index/$1';
$route['job_listing/(:any)'] = 'job_listing/index/$1';
$route['(:any).html'] = 'content/index/$1';
$route['login'] = 'user/login/$1';
$route['login_employer'] = 'user_employer/login_employer/$1';
$route['logout'] = 'user/logout/$1';
$route['forgot'] = 'user/forgot/$1';
$route['search-jobs'] = 'job_search/index/$1';
$route['search-jobs/(:any)'] = 'job_search/index/$1';
$route['search-jobs/(:num)'] = 'job_search/index/$1';
$route['search-certification'] = 'certification_search/index/$1';
$route['search-certification/(:any)'] = 'certification_search/index/$1';

$route['search-voulnteer'] = 'voulnteer_search/index/$1';
$route['search-voulnteer/(:any)'] = 'voulnteer_search/index/$1';
$route['search-training'] = 'training_search/index/$1';
$route['search-training/(:any)'] = 'training_search/index/$1';
$route['search-resume'] = 'resume_search/index/$1';
$route['search-resume/(:any)'] = 'resume_search/index/$1';
$route['search/(:any)'] = 'search/index/$1';
$route['candidate/(:any)'] = 'candidate/index/$1';
$route['industry/(:any)'] = 'industry/index/$1';
$route['employer-signup'] = 'employer_signup';
$route['jobseeker-signup'] = 'jobseeker_signup';
$route['jobseeker-signup_main'] = 'jobseeker_signup_main';
$route['contact-us'] = 'contact_us';
//Employer Section
$route['employer/job_applications/(:any)'] 	= 'employer/job_applications/index/$1';
$route['employer/job_applications/send_message_to_candidate'] 	= 'employer/job_applications/send_message_to_candidate/$1';
$route['employer/my_posted_jobs/(:any)'] 	= 'employer/my_posted_jobs/index/$1';
$route['employer/edit_posted_job/(:num)'] 	= 'employer/edit_posted_job/index/$1';
//sme_job Section
$route['sme/my_posted_jobs/(:any)'] 	= 'sme/my_posted_jobs/index/$1';
$route['sme/edit_posted_job/(:num)'] 	= 'sme/edit_posted_job/index/$1';

//aganawadi_job Section
$route['anganwadi/my_posted_jobs/(:any)'] 	= 'anganwadi/my_posted_jobs/index/$1';
$route['anganwadi/edit_posted_job/(:num)'] 	= 'anganwadi/edit_posted_job/index/$1';
//shg_job Section
$route['shg/my_posted_jobs/(:any)'] 	= 'shg/my_posted_jobs/index/$1';
$route['shg/edit_posted_job/(:num)'] 	= 'shg/edit_posted_job/index/$1';

//msme_job Section
$route['msme/my_posted_jobs/(:any)'] 	= 'msme/my_posted_jobs/index/$1';
$route['msme/edit_posted_job/(:num)'] 	= 'msme/edit_posted_job/index/$1';

//Job_Fair_Agencies_job Section
$route['jfa/my_posted_jobs/(:any)'] 	= 'jfa/my_posted_jobs/index/$1';
$route['jfa/edit_posted_job/(:num)'] 	= 'jfa/edit_posted_job/index/$1';


//Industry_job Section
$route['industry_yple/my_posted_jobs/(:any)'] 	= 'industry_yple/my_posted_jobs/index/$1';
$route['industry_yple/edit_posted_job/(:num)'] 	= 'industry_yple/edit_posted_job/index/$1';


//Village_Head_job Section
$route['villege_head/my_posted_jobs/(:any)'] 	= 'villege_head/my_posted_jobs/index/$1';
$route['villege_head/edit_posted_job/(:num)'] 	= 'villege_head/edit_posted_job/index/$1';


//RWF_job Section
$route['rwf/my_posted_jobs/(:any)'] 	= 'rwf/my_posted_jobs/index/$1';
$route['rwf/edit_posted_job/(:num)'] 	= 'rwf/edit_posted_job/index/$1';


//NSDC_VTP_job Section
$route['nsdp_vtp/my_posted_jobs/(:any)'] 	= 'nsdp_vtp/my_posted_jobs/index/$1';
$route['nsdp_vtp/edit_posted_job/(:num)'] 	= 'nsdp_vtp/edit_posted_job/index/$1';


//certification Section
$route['certification/my_posted_certification/(:any)'] 	= 'certification/my_posted_certification/index/$1';
$route['certification/edit_posted_certification/(:num)'] 	= 'certification/edit_posted_certification/index/$1';

//sme_certification Section
$route['sme_certification/my_posted_certification/(:any)'] 	= 'sme_certification/my_posted_certification/index/$1';
$route['sme_certification/edit_posted_certification/(:num)'] 	= 'sme_certification/edit_posted_certification/index/$1';

//anganwadi_certification Section
$route['anganwadi_certification/my_posted_certification/(:any)'] 	= 'anganwadi_certification/my_posted_certification/index/$1';
$route['anganwadi_certification/edit_posted_certification/(:num)'] 	= 'anganwadi_certification/edit_posted_certification/index/$1';

//shg_certification Section
$route['shg_certification/my_posted_certification/(:any)'] 	= 'shg_certification/my_posted_certification/index/$1';
$route['shg_certification/edit_posted_certification/(:num)'] 	= 'shg_certification/edit_posted_certification/index/$1';

//msmc_certification Section
$route['msmc_certification/my_posted_certification/(:any)'] 	= 'msmc_certification/my_posted_certification/index/$1';
$route['msmc_certification/edit_posted_certification/(:num)'] 	= 'msmc_certification/edit_posted_certification/index/$1';

//rwf_certification Section
$route['rwf_certification/my_posted_certification/(:any)'] 	= 'rwf_certification/my_posted_certification/index/$1';
$route['rwf_certification/edit_posted_certification/(:num)'] 	= 'rwf_certification/edit_posted_certification/index/$1';


//jfa_certification Section
$route['jfa_certification/my_posted_certification/(:any)'] 	= 'jfa_certification/my_posted_certification/index/$1';
$route['jfa_certification/edit_posted_certification/(:num)'] 	= 'jfa_certification/edit_posted_certification/index/$1';


//industry_certification Section
$route['industry_yple_certification/my_posted_certification/(:any)'] 	= 'industry_yple_certification/my_posted_certification/index/$1';
$route['industry_yple_certification/edit_posted_certification/(:num)'] 	= 'industry_yple_certification/edit_posted_certification/index/$1';


//villege_head_certification Section
$route['villege_head_certification/my_posted_certification/(:any)'] 	= 'villege_head_certification/my_posted_certification/index/$1';
$route['villege_head_certification/edit_posted_certification/(:num)'] 	= 'villege_head_certification/edit_posted_certification/index/$1';


//nsdc_vtp_certification Section
$route['nsdc_vtp_certification/my_posted_certification/(:any)'] 	= 'nsdc_vtp_certification/my_posted_certification/index/$1';
$route['nsdc_vtp_certification/edit_posted_certification/(:num)'] 	= 'nsdc_vtp_certification/edit_posted_certification/index/$1';
//voulnteer Section
$route['voulnteer/my_posted_voulnteer/(:any)'] 	= 'voulnteer/my_posted_voulnteer/index/$1';
$route['voulnteer/edit_posted_voulnteer/(:num)'] 	= 'voulnteer/edit_posted_voulnteer/index/$1';
//sme_voulnteer Section
$route['sme_voulnteer/my_posted_voulnteer/(:any)'] 	= 'sme_voulnteer/my_posted_voulnteer/index/$1';
$route['sme_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'sme_voulnteer/edit_posted_voulnteer/index/$1';

//anganwadi_voulnteer Section
$route['anganwadi_voulnteer/my_posted_voulnteer/(:any)'] 	= 'anganwadi_voulnteer/my_posted_voulnteer/index/$1';
$route['anganwadi_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'anganwadi_voulnteer/edit_posted_voulnteer/index/$1';

//shg_voulnteer Section
$route['shg_voulnteer/my_posted_voulnteer/(:any)'] 	= 'shg_voulnteer/my_posted_voulnteer/index/$1';
$route['shg_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'shg_voulnteer/edit_posted_voulnteer/index/$1';

//rwf_voulnteer Section
$route['rwf_voulnteer/my_posted_voulnteer/(:any)'] 	= 'rwf_voulnteer/my_posted_voulnteer/index/$1';
$route['rwf_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'rwf_voulnteer/edit_posted_voulnteer/index/$1';


//msme_voulnteer Section
$route['msme_voulnteer/my_posted_voulnteer/(:any)'] 	= 'msme_voulnteer/my_posted_voulnteer/index/$1';
$route['msme_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'msme_voulnteer/edit_posted_voulnteer/index/$1';


//jfa_voulnteer Section
$route['jfa_voulnteer/my_posted_voulnteer/(:any)'] 	= 'jfa_voulnteer/my_posted_voulnteer/index/$1';
$route['jfa_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'jfa_voulnteer/edit_posted_voulnteer/index/$1';

//anganwadi_voulnteer Section
$route['anganwadi_voulnteer/my_posted_voulnteer/(:any)'] 	= 'anganwadi_voulnteer/my_posted_voulnteer/index/$1';
$route['anganwadi_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'anganwadi_voulnteer/edit_posted_voulnteer/index/$1';

//villege_head_voulnteer Section
$route['villege_head_voulnteer/my_posted_voulnteer/(:any)'] 	= 'villege_head_voulnteer/my_posted_voulnteer/index/$1';
$route['villege_head_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'villege_head_voulnteer/edit_posted_voulnteer/index/$1';


//nsdc_vtp_voulnteer Section
$route['nsdc_vtp_voulnteer/my_posted_voulnteer/(:any)'] 	= 'nsdc_vtp_voulnteer/my_posted_voulnteer/index/$1';
$route['nsdc_vtp_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'nsdc_vtp_voulnteer/edit_posted_voulnteer/index/$1';

//industry_yple_voulnteer Section
$route['industry_yple_voulnteer/my_posted_voulnteer/(:any)'] 	= 'industry_yple_voulnteer/my_posted_voulnteer/index/$1';
$route['industry_yple_voulnteer/edit_posted_voulnteer/(:num)'] 	= 'industry_yple_voulnteer/edit_posted_voulnteer/index/$1';

//training Section
$route['training/my_posted_training/(:any)'] 	= 'training/my_posted_training/index/$1';
$route['training/edit_posted_training/(:num)'] 	= 'training/edit_posted_training/index/$1';

//training Section
$route['sme_training/my_posted_training/(:any)'] 	= 'sme_training/my_posted_training/index/$1';
$route['sme_training/edit_posted_training/(:num)'] 	= 'sme_training/edit_posted_training/index/$1';

//training Section
$route['shg_training/my_posted_training/(:any)'] 	= 'shg_training/my_posted_training/index/$1';
$route['shg_training/edit_posted_training/(:num)'] 	= 'shg_training/edit_posted_training/index/$1';

//training Section
$route['msme_training/my_posted_training/(:any)'] 	= 'msme_training/my_posted_training/index/$1';
$route['msme_training/edit_posted_training/(:num)'] 	= 'msme_training/edit_posted_training/index/$1';


//training Section
$route['sme_training/my_posted_training/(:any)'] 	= 'sme_training/my_posted_training/index/$1';
$route['sme_training/edit_posted_training/(:num)'] 	= 'sme_training/edit_posted_training/index/$1';


//training Section
$route['villege_head_training/my_posted_training/(:any)'] 	= 'villege_head_training/my_posted_training/index/$1';
$route['villege_head_training/edit_posted_training/(:num)'] 	= 'villege_head_training/edit_posted_training/index/$1';


//training Section
$route['jfa_training/my_posted_training/(:any)'] 	= 'jfa_training/my_posted_training/index/$1';
$route['jfa_training/edit_posted_training/(:num)'] 	= 'jfa_training/edit_posted_training/index/$1';

//training Section
$route['nsdc_vtp_training/my_posted_training/(:any)'] 	= 'nsdc_vtp_training/my_posted_training/index/$1';
$route['nsdc_vtp_training/edit_posted_training/(:num)'] 	= 'nsdc_vtp_training/edit_posted_training/index/$1';

//training Section
$route['industry_yple_training/my_posted_training/(:any)'] 	= 'industry_yple_training/my_posted_training/index/$1';
$route['industry_yple_training/edit_posted_training/(:num)'] 	= 'industry_yple_training/edit_posted_training/index/$1';
//Backend
$route['admin/employers/(:num)'] 	= 'admin/employers/index/$1';
$route['admin/employers_sme/(:num)'] 	= 'admin/employers_sme/index/$1';
$route['admin/employers_shg/(:num)'] 	= 'admin/employers_shg/index/$1';
$route['admin/employers_rwf/(:num)'] 	= 'admin/employers_rwf/index/$1';
$route['admin/employers_msme/(:num)'] 	= 'admin/employers_msme/index/$1';
$route['admin/employers_nsdc_vtp/(:num)'] 	= 'admin/employers_nsdc_vtp/index/$1';
$route['admin/employers_villege_head/(:num)'] 	= 'admin/employers_villege_head/index/$1';
$route['admin/employers_industry_yple/(:num)'] 	= 'admin/employers_industry_yple/index/$1';
$route['admin/employers_jfa/(:num)'] 	= 'admin/employers_jfa/index/$1';
$route['admin/employers_aganwadi/(:num)'] 	= 'admin/employers_aganwadi/index/$1';
$route['admin/job_seekers/(:num)'] = 'admin/job_seekers/index/$1';
$route['admin/posted_jobs/(:num)'] = 'admin/posted_jobs/index/$1';

//Backend
$route['admin/certifications/(:num)'] 	= 'admin/certifications/index/$1';
 $route['admin/certification_seekers/(:num)'] = 'admin/certification_seekers/index/$1';
 $route['admin/posted_certifications/(:num)'] = 'admin/posted_certifications/index/$1';
 
 //Backend
$route['admin/voulnteers/(:num)'] 	= 'admin/voulnteers/index/$1';
 $route['admin/voulnteer_seekers/(:num)'] = 'admin/voulnteer_seekers/index/$1';
 $route['admin/posted_voulnteers/(:num)'] = 'admin/posted_voulnteers/index/$1';
 
 
 //Backend
$route['admin/trainings/(:num)'] 	= 'admin/trainings/index/$1';
 $route['admin/training_seekers/(:num)'] = 'admin/training_seekers/index/$1';
 $route['admin/posted_trainings/(:num)'] = 'admin/posted_trainings/index/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */