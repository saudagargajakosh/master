<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('common/meta_tags'); ?>
<title><?php echo $title;?></title>
<?php $this->load->view('common/before_head_close'); ?>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<div class="siteWraper" style="padding-top: 35px;">
<!--Header-->
<?php $this->load->view('common/header'); ?>
<!--/Header-->
<div class="container detailinfo" style="padding:50px;">
  <div class="row"> <?php echo form_open_multipart('jobseeker/change_password',array('name' => 'change_password_form', 'id' => 'change_password_form'));?>
    
    <div class="col-md-3">
    <div class="dashiconwrp">
    <?php $this->load->view('jobseeker/common/jobseeker_menu'); ?>
  </div>
    </div>
    
    <div class="col-md-9"> <?php echo $this->session->flashdata('msg');?> 
      
      <!--Account info-->
      <div class="formwraper">
        <div class="titlehead">Change Password</div>
        <div class="formint">
          <div class="form-group <?php echo (form_error('old_password'))?'has-error':'';?>">
            <label class="form-group-addon">Old Password <span>*</span></label>
            <input name="old_password" type="password" class="form-control" id="old_password" placeholder="Old Password" value="<?php echo set_value('password'); ?>" maxlength="100">
            <?php echo form_error('old_password'); ?> </div>
          <div class="form-group <?php echo (form_error('new_password'))?'has-error':'';?>">
            <label class="form-group-addon">New Password <span>*</span></label>
            <input name="new_password" type="password" class="form-control" id="new_password" placeholder="New Password" value="<?php echo set_value('password'); ?>" maxlength="100">
            <?php echo form_error('new_password'); ?> </div>
          <div class="form-group <?php echo (form_error('confirm_password'))?'has-error':'';?>">
            <label class="form-group-addon">Confirm Password <span>*</span></label>
            <input name="confirm_password" type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" value="<?php echo set_value('confirm_password'); ?>" maxlength="100">
            <?php echo form_error('confirm_password'); ?> </div>
          <div align="center">
            <input type="submit" name="submit_button" id="submit_button" value="Change Password" class="btn btn-success" />
          </div>
        </div>
      </div>
    </div>
    <!--/Job Detail--> 
    <?php echo form_close();?>
   
  </div>
</div>
<?php $this->load->view('common/bottom_ads');?>
<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
