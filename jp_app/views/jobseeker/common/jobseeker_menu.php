<ul class="">
<a  href="<?php echo base_url('jobseeker/dashboard');?>"    class="btn btn-special btn-block" >Dashboard</a>
      
	  <a href="<?php echo base_url('jobseeker/my_account');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_account');?>"><i class="fa fa-user"></i> <span>Manage Account</span></a>
      
	  <a href="<?php echo base_url('jobseeker/cv_manager');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'cv_manager');?> <?php echo is_active_like($this->uri->segment(2),'cv_builder');?>"><i class="fa fa-users"></i> <span>My Resume</span></a>
     
	 <a href="<?php echo base_url('jobseeker/add_skills');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'add_skills');?>"><i class="fa fa-users"></i> <span>Manage Skills</span></a>
     
	 <a href="<?php echo base_url('jobseeker/change_password');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'change_password');?>"><i class="fa fa-lock"></i> <span>Change Password</span></a>
      
	  <div class="clear"></div>
    </ul>