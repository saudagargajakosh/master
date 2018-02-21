
<html lang="en">
<head>
<?php $this->load->view('common/meta_tags'); ?>
<title><?php echo $title;?></title>
<?php $this->load->view('common/before_head_close'); ?>
<link href="<?php echo base_url('public/css/jquery-ui.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<div class="siteWraper">
<!--Header-->
<?php $this->load->view('common/header'); ?>
    <section class="inner-banner">
      <!-- BANNER STARTS -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="margin-0">Candidate Profile</h4>
          </div>

        </div>
      </div>
      <!-- BANNER ENDS -->
    </section>
    <section class="candidate-profile">
      <div class="container">
	 
        <div class="row">
          <div class="sidebar col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
            <div class="user-intro">
              <img src="http://www.pixshed.com/job-portal/theme/img/user-wall-pic.jpg" alt="User profile wall">
              <div class="candidate-info">
                <img src="<?php echo base_url('public/uploads/candidate/'.$photo);?>" alt="Candidate" class="img-circle">
                <h4><?php echo $row->first_name.' '.$row->last_name;?></h4>
                <p><?php echo $latest_job_title;?></p>
                <div class="rating-star">
                  <span class="fa fa-star"><form name="frm_js_up" id="frm_js_up" method="post" action="<?php echo base_url('jobseeker/edit_jobseeker/upload_photo');?>" enctype="multipart/form-data"><input type="file" name="upload_pic" id="upload_pic" accept="image/*" style="display:none;"></form></span>
                  <span class="fa fa-star"><a href="javascript:;" class="upload" title="Upload Photo"><i class="fa fa-upload"></i></a>
            <?php if($row->photo!=''):?>
            <a href="javascript:;" class="remove" id="remove_pic" title="Delete Photo"><i class="fa fa-trash-o"></i></a>
            <?php endif;?></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <ul class="social-links">
                  <li>
                    <a href="javascript:void(0);" class="fa fa-facebook"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="fa fa-twitter"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="fa fa-linkedin"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="social-connect">
            <?php $this->load->view('jobseeker/common/jobseeker_menu'); ?>
            </div>
          </div>
		    <?php $this->load->view('jobseeker/common/category'); ?>
          <div class="col-md-8 col-sm-12">
		 
            <h6>Primary Information</h6>
            <div class="primary-info">
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa fa-user"></i> <?php echo $row->first_name.' '.$row->last_name;?>
                </div>
                <div class="col-sm-5">
                  <i class="fa fa-envelope"></i> <?php echo $row->email;?>
                </div>
                <div class="col-sm-4">
                  <i class="fa fa-phone"></i> <?php echo $row->mobile;?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa fa-flag"></i> <?php echo $row->country;?>
                </div>
                <div class="col-sm-5">
                  <i class="fa fa-map-marker"></i> <?php echo $row->city;?>
                </div>
                <div class="col-sm-4">
                  <i class="fa fa-calendar-o"></i> 29th Dec 1986
                </div>
				<a href="<?php echo base_url('jobseeker/my_account');?>" id="edit_jobseeker_profileee" class="editLink"><i class="fa fa-pencil">&nbsp;</i> Edit Profile</a> </div>
              </div>
            </div>
            <div class="divider"></div>
            <h6>Biography</h6>
            <div class="primary-info">
              <p><?php echo ($row_additional->summary)?character_limiter($row_additional->summary,500):'';?></p>
               </div>
            <div class="divider"></div>
            <div class="row">
              <div class="col-md-6">
                <h6>Education</h6>
				<div class="col-md-3 text-right"><a href="javascript:;" id="add_education">Add Another</a> <a href="javascript:;" id="add_education" class="editlink" title="Edit"><i class="fa fa-plus-square">&nbsp;</i></a></div>
         
                <div class="experiance">
          <?php 
			if($result_qualification):
				foreach($result_qualification as $row_qualification):
			?>
          <div class="row expbox" id="edu_<?php echo $row_qualification->ID;?>">
            <div class="col-md-12">
              <h4><?php echo $row_qualification->institude;?>, <?php echo $row_qualification->city;?></h4>
              <ul class="useradon">
                <li><?php echo $row_qualification->degree_title;?>, <?php echo $row_qualification->completion_year;?></li>
                <li><?php echo $row_qualification->major;?></li>
              </ul>
              <div class="action"><a href="javascript:;" onClick="load_edit_js_edu(<?php echo $row_qualification->ID;?>);" title="Edit" class="edit-ico"><i class="fa fa-pencil">&nbsp;</i></a> <a href="javascript:;" onClick="del_edu(<?php echo $row_qualification->ID;?>);"title="Delete" class="delete-ico"><i class="fa fa-times">&nbsp;</i></a></div>
            </div>
          </div>
          <?php endforeach; endif;?>
          <div class="clear"></div>
        </div>
              </div>
              <div class="col-md-6">
                <h6>Experience</h6>
				<div class="col-md-3 text-right"><a href="javascript:;" id="add_exp">Add Another</a> <a href="javascript:;" id="add_exp" class="editlink" title="Edit"><i class="fa fa-plus-square">&nbsp;</i></a></div>
       
                <ul class="timeline">
                  <div class="experiance">
          <?php 
			if($result_experience):
				foreach($result_experience as $row_experience):
				$date_to = ($row_experience->end_date)?date_formats($row_experience->end_date, 'M Y'):'Present';
		?>
          <div class="row expbox" id="exp_<?php echo $row_experience->ID;?>">
            <div class="col-md-12">
              <h4><?php echo $row_experience->job_title;?></h4>
              <ul class="useradon">
                <li class="company"><?php echo $row_experience->company_name;?></li>
                <li><?php echo $row_experience->city;?>, <?php echo $row_experience->country;?></li>
                <li><?php echo date_formats($row_experience->start_date, 'M Y');?> to <?php echo $date_to;?></li>
              </ul>
              <div class="action"><a href="javascript:;" onClick="load_edit_js_exp(<?php echo $row_experience->ID;?>);" title="Edit" class="edit-ico"><i class="fa fa-pencil">&nbsp;</i></a> <a href="javascript:;" onClick="del_exp(<?php echo $row_experience->ID;?>);" title="Delete" class="delete-ico"><i class="fa fa-times">&nbsp;</i></a></div>
            </div>
          </div>
          <?php endforeach; endif;?>
          <div class="clear"></div>
        </div>
                </ul>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER STARTS -->
    <!-- <?php $this->load->view('common/bottom_ads');?>-->
<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<!-- Profile Popups -->
<?php $this->load->view('jobseeker/common/jobseekes_popup_forms'); ?>
<?php $this->load->view('common/before_body_close'); ?>
<script src="<?php echo base_url('public/js/jquery-ui.js'); ?>" type="text/javascript"></script> 
<script src="<?php echo base_url('public/js/validate_jobseeker.js');?>" type="text/javascript"></script>
</body>
</html>