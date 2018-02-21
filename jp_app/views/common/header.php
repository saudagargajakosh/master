<header class="navbar-fixed-top" data-spy="affix" data-offset-top="60" style="background-color:#344154;" >
      <!-- MAIN NAVIGATION STARTS -->
	 
<div id="google_translate_element" style="padding-left:90%;" ></div><script type="text/javascript" >
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  

<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<script language="javascript" type="text/javascript">
 function lanfTrans(lan)
 {
   switch(lan)
   {
   case 'en': document.getElementById('dlang').value='en';document.langForm.submit(); break;
   case 'fr': document.getElementById('dlang').value='fr'; document.langForm.submit(); break;
   case 'es': document.getElementById('dlang').value='es'; document.langForm.submit(); break;
   } 
 }
</script>




<form name="langForm" id="langForm" action="<?php echo base_url().'home/languages';?>" method="post"> 

<?php // 'welcome' - [Home page controller] ?>

<input type="hidden" name="dlang" id="dlang"> 

<?php // 'dlang' - [Language choosen] ?>

<input type="hidden" name="current" id="current" value="<?php echo substr(uri_string(),0,strlen(uri_string()));?>">

<?php // 'current' - [Current page url] ?>

<?php // [Language images] ?>
 
<img src="<?=base_url()?>images/fr.png" onClick="lanfTrans('fr');" width="16" height="11" title="To French"> &nbsp; 

<img src="<?=base_url()?>images/en.png" onClick="lanfTrans('en');" width="16" height="11" title="To English"> &nbsp;
<img src="<?=base_url()?>images/es_flag.gif" onClick="lanfTrans('es');" width="16" height="11" title="To Spanish"> &nbsp;

<?php echo form_close(); ?>-->





   <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('home');?>"><img src="<?php echo base_url();?>public/images/Icons/logo.png" style="margin-top: -14px;"></a> 
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav text-center">
            <?php
            // echo $this->session->userdata('industry_com_id'); exit;
             if($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==7):?>
              <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('employer/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==2):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('sme/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
 
 <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==4):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('shg/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
 
 <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==5):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('msme/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
 
 <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==3):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('rwf/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
 
  <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==1):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('jfa/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
   <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==9):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('villege_head/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
 
 <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==8):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('nsdc_vtp/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
 <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==6):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('industry_yple/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
 
  <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==10):?>
 
 <li <?php echo active_link('');?>><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li <?php echo active_link('employer');?>><a href="<?php echo base_url('industry_yple/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
 
              <?php elseif($this->session->userdata('is_job_seeker')==TRUE):?>
              <li <?php echo active_link('jobseeker');?>><a href="<?php echo base_url('jobseeker/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Jobseeker <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?php echo active_link('search-jobs');?>><a href="<?php echo base_url('search-jobs');?>" title="Search Jobs">Search Jobs</a></li>
                  <li <?php echo active_link('search-certification');?>><a href="<?php echo base_url('search-certification');?>" title="Search Certification">Search Certification</a></li>
                 
                  <li <?php echo active_link('search-training');?>><a href="<?php echo base_url('search-training');?>" title="Search Certification">Search Training</a></li>
				   <li <?php echo active_link('search-voulnteer');?>><a href="<?php echo base_url('search-voulnteer');?>" title="Search Certification">Be the Voulnteer</a></li>
                </ul>
              </li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>

              <?php else:?>
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Jobseeker<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li <?php echo active_link('search-jobs');?>><a href="<?php echo base_url('search-jobs');?>" title="Search Government jobs in india">Search a Job</a> </li>
    			  <li <?php echo active_link('search-certification');?>><a href="<?php echo base_url('search-certification');?>" title="Search Jobs">Search Certification</a></li>
    			   <li <?php echo active_link('search-training');?>><a href="<?php echo base_url('search-training');?>" title="Search Certification">Search Training</a></li>

				 <li <?php echo active_link('search-voulnteer');?>><a href="<?php echo base_url('search-voulnteer');?>" title="Search Certification">Be the Voulnteer</a></li>
    			
                  <!--<li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Resume</a></li>-->
                  
                </ul>
              </li>
              <li <?php echo active_link('about-us.html');?>><a href="<?php echo base_url('about-us.html');?>" title="india jobs free website">About Us</a></li>
              <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
			  	
             
              <?php endif;?>
              <?php if($this->session->userdata('is_user_login')!=TRUE): ?>
              <!-- <li class="sign-in pull-right">
                <a href="<?php //echo base_url('login');?>">
                  <small class="hidden-sm">Job seeker</small>
                  <span class="hidden-sm">Sign In</span> 
                  <i class="fa fa-user"></i></a>
              </li> -->
              <li class="sign-in pull-right">
                <a href="#" data-toggle="modal" data-target="#login">
                  <small class="hidden-sm">Job seeker</small>
                  <span class="hidden-sm">Sign In</span> 
                  <i class="fa fa-user"></i>
                </a>
              </li>
			        <!-- <li class="sign-in pull-right">
				        <a href="<?php echo base_url('login_employer');?>" class="lookingbtn">
                  <small class="hidden-sm">Post a Job</small>
                  <span class="hidden-sm">Sign In</span> 
                  <i class="fa fa-user"></i>
                </a>
              </li> -->
              <li class="sign-in pull-right">
                <a href="#" data-toggle="modal" data-target="#loginEmployer">
                  <small class="hidden-sm">Post a Job</small>
                  <span class="hidden-sm">Sign In</span> 
                  <i class="fa fa-user"></i>
                </a>
              </li>
              <?php else:
    			 $c_folder = ($this->session->userdata('is_employer')==TRUE)?'employer':'jobseeker';
              
    		   ?>
    		   <li class="dropdown">
        		   <a href="<?php echo base_url('user/logout');?>"  class="regBtn">Logout</a>
        		   
            <!-- <div class="pull-right loginusertxt">Welcome, <a href="<?php echo base_url($c_folder.'/dashboard');?>" class="username"><?php echo $this->session->userdata('first_name');?></a></div> -->
                  
              </li>
              <?php endif;?>
            </ul>
          </div>
        </div>
		
      </nav>
      <!-- MAIN NAVIGATION ENDS -->
</header>
<!-- End Integration Header