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
<!--Detail Info-->
<div class="container innerpages" style="
    padding: 55px;
">
 <?php $this->load->view('common/bottom_ads');?>

  <div class="row"> 
    
    <!--Signup-->
    <div class="col-md-6 col-md-offset-3">
     <!--Login-->
    <form name="login_form" id="login_form" action="" method="post">
      <div class="loginbox">
        <h3>Existing Employer</h3>
		  <?php

// session_start();

// echo "<pre>";
// print_r($this->session->userdata); 
// echo "</pre>";

// ?>
        <?php if($msg):?>
        	<div class="alert alert-danger"><?php echo $msg;?></div>
        <?php endif;?>
        <?php echo validation_errors(); ?>
        <?php echo $this->session->flashdata('success_msg');?>
        <div class="row">
          <div class="col-md-3" >
            <label class="form-group-addon">Email <span>*</span></label>
          </div>
          <div class="col-md-9" class="form-group">
            <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Email" />
          </div>
        </div>
        <div class="row">
          <div class="col-md-3" >
            <label class="form-group-addon">Password <span>*</span></label>
          </div>
          <div class="col-md-9" class="form-group">
            <input type="password" name="pass" id="pass" autocomplete="off" value="<?php echo set_value('pass'); ?>" class="form-control" placeholder="Password" />
          </div>
        </div>
		
		 <div class="form-group <?php echo (form_error('industry_com_id'))?'has-error':'';?>">
            <label class="form-group-addon">Industry <span>*</span></label>
            <select name="industry_com_id" id="industry_com_id" class="form-control" >
              <option value="" selected>Select Industry</option>
              <?php foreach($result_industries as $row_industry):
				  			$selected = (set_value('industry_com_id')==$row_industry->ID)?'selected="selected"':'';
				  ?>
              <option value="<?php echo $row_industry->ID;?>" <?php echo $selected;?>><?php echo $row_industry->industry_name;?></option>
              <?php endforeach;?>
            </select>
            <?php echo form_error('industry_com_id'); ?> </div>
        <!--<div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-9">
            <input type="checkbox">
            Remember My Password</div>
        </div>-->
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-9">
            <input type="submit" value="Sign In" class="btn btn-success" />
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-9">Forgot Your Password? <a href="<?php echo base_url('forgot');?>">Click Here</a></div>
        </div>
      </div>
    </form>
    
      <div class="signupbox">
        <h4>Not a member yet? Click Below to Sign Up</h4>
        
        <!--<a href="<?php echo base_url('employer-signup/');?>" class="btn btn-success">Sign Up Now</a>-->
		<a href="<?php echo base_url('employer-signup/');?>" class="btn btn-success">Sign Up Employer</a>
        <div class="clear"></div>
      </div>
    </div>
    <!--/Login--> 

  </div>
</div>
<?php $this->load->view('common/bottom_ads');?>
<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>