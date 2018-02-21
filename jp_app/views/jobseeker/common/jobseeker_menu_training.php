<ul class="featurlist">
       <a  href="<?php echo base_url('jobseeker/dashboard');?>"    class="btn btn-special btn-block" >Dashboard</a>
	   <a href="<?php echo base_url('jobseeker/my_trainings');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_jobs');?>"><i class="fa fa-file-text-o"></i> <span>My Applications</span></a>
      
	  <a href="<?php echo base_url('jobseeker/matching_trainings');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'matching_jobs');?>"><i class="fa fa-users"></i> <span>Training Matching</span></a>
      <div class="clear"></div>
    </ul>