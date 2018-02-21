 <?php if($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==7):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Training</span></a>
     
      <a href="<?php echo base_url('training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Training</span></a>
      
      <a href="<?php echo base_url('training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==6):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('industry_yple_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('industry_yple_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New training</span></a>
     
      <a href="<?php echo base_url('industry_yple_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My training</span></a>
      
      <a href="<?php echo base_url('industry_yple_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==1):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('jfa_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('jfa_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New training</span></a>
     
      <a href="<?php echo base_url('jfa_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My training</span></a>
      
      <a href="<?php echo base_url('jfa_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==5):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('msme_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('msme_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('msme_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('msme_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==8):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('nsdc_vtp_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('nsdc_vtp_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New training</span></a>
     
      <a href="<?php echo base_url('nsdc_vtp_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My training</span></a>
      
      <a href="<?php echo base_url('nsdc_vtp_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==3):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('rwf_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('rwf_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New training</span></a>
     
      <a href="<?php echo base_url('rwf_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My training</span></a>
      
      <a href="<?php echo base_url('rwf_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==4):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('shg_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('shg_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('shg_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('shg_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==2):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('sme_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('sme_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Training</span></a>
     
      <a href="<?php echo base_url('sme_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Training</span></a>
      
      <a href="<?php echo base_url('sme_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==9):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('villege_head_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('villege_head_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New training</span></a>
     
      <a href="<?php echo base_url('villege_head_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My training</span></a>
      
      <a href="<?php echo base_url('villege_head_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==10):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('anganwadi_training/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('anganwadi_training/post_new_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New training</span></a>
     
      <a href="<?php echo base_url('anganwadi_training/my_posted_training');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My training</span></a>
      
      <a href="<?php echo base_url('anganwadi_training/training_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php endif;?>
