<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('common/meta_tags'); ?>
<title><?php echo $title;?></title>
<?php $this->load->view('common/before_head_close'); ?>
<link href="<?php echo base_url('public/css/jquery-ui.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<div class="siteWraper" style="padding-top: 35px;">
<!--Header-->
<?php $this->load->view('common/header'); ?>
<!--/Header-->
<div class="container detailinfo">
  <div class="row">
  	<div class="col-md-12">
  	<div class="col-md-4">
  	<div class="dashiconwrp">
    <?php $this->load->view('jobseeker/common/jobseeker_menu'); ?>
  	</div>
  	</div>
  
    <div class="col-md-8">
    <?php $this->load->view('jobseeker/common/category'); ?>
    <div id="msg"></div>
   
    <div class="formwraper">
        <div class="titlehead">
          <div class="row">
		  <div><?php echo $this->session->flashdata('msg');?></div>
            <div class="col-md-9"><b>CV Manager</b></div>
            <div class="col-md-3 text-right"><a href="javascript:;" class="upload_cv" title="Upload Resume">Upload CV</a> <a href="javascript:;" class="upload_cv" class="editlink" title="Upload Resume"><i class="fa fa-plus-square">&nbsp;</i></a></div>
            
            <form name="frm_js_up_cv" id="frm_js_up_cv" method="post" action="<?php echo base_url('jobseeker/edit_jobseeker/upload_cv');?>" enctype="multipart/form-data"><input type="file" name="upload_resume" id="upload_resume" style="display:none;"></form>
            
          </div>
        </div>
        
        <!--Job Description-->
        <div class="companydescription">
          <div class="row">
            <div class="col-md-12">
              <ul class="myjobList">
            <?php if($result_resume): 
		  			foreach($result_resume as $row_resume):
					$file_name = ($row_resume->is_uploaded_resume)?$row_resume->file_name:'';
					$file_array = explode('.',$file_name);
					$file_array = array_reverse($file_array);
					$icon_name = get_extension_name($file_array[0]);
		  ?>
            <li class="row" id="cv_<?php echo $row_resume->ID;?>">
              <div class="col-md-4">
              <i class="fa fa-file-<?php echo $icon_name;?>-o">&nbsp;</i>
              <?php if($row_resume->is_uploaded_resume): ?>
              	<a href="<?php echo base_url('resume/download/'.$row_resume->file_name);?>">My CV</a>
              <?php else: ?>
			  	    <a href="#">My CV</a>
			  <?php endif;?>
              </div>
              <div class="col-md-4"><?php echo date_formats($row_resume->dated, "d M, Y");?></div>
              <div class="col-md-2"><?php //echo ($row_resume->is_default_resume=='yes')?'Default':'Mark as Default';?></div>
              <div class="col-md-2 text-right"> <a href="javascript:;" onClick="del_cv(<?php echo $row_resume->ID;?>, '<?php echo $row_resume->file_name;?>')" title="Delete" class="delete-ico"><i class="fa fa-times">&nbsp;</i></a></div>
            </li>
            <?php 	endforeach; 
		  		else:?>
            No resume uploaded yet!
            <?php endif;?>
          </ul>
            </div>
          </div>
        </div>
      </div>
      
     
      
      <!--My CV-->
      
    </div>
    </div>
    <!--/Job Detail-->   
  </div>
</div>
<?php $this->load->view('common/bottom_ads');?>
<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<!-- Profile Popups -->
<?php $this->load->view('jobseeker/common/jobseekes_popup_forms'); ?>
<?php $this->load->view('common/before_body_close'); ?>
<script src="<?php echo base_url('public/js/jquery-ui.js'); ?>" type="text/javascript"></script> 
<script src="<?php echo base_url('public/js/validate_jobseeker.js');?>" type="text/javascript"></script>
</body>
</html>