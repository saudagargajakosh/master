<ul class="featurlist">
     
	 <a href="<?php echo base_url('shg/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('shg/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('shg/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New SME</span></a>
     
     <a href="<?php echo base_url('shg/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My SME</span></a>
      
      <a href="<?php echo base_url('shg/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('shg/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>

