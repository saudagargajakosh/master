<ul class="featurlist">
     
	 <a href="<?php echo base_url('sme_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('sme_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Training</span></a>
     
      <a href="<?php echo base_url('sme_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Training</span></a>
      
      <a href="<?php echo base_url('sme_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

