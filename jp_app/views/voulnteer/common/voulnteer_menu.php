 <?php if($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==7):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==1):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('jfa_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('jfa_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('jfa_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('jfa_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>


<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==6):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('industry_yple_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('industry_yple_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('industry_yple_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('industry_yple_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==5):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('msme_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('msme_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('msme_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('msme_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==8):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('nsdc_vtp_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('nsdc_vtp_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('nsdc_vtp_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('nsdc_vtp_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==3):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('rwf_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('rwf_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('rwf_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('rwf_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
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
     
	 <a href="<?php echo base_url('sme_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('sme_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('sme_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('sme_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==9):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('villege_head_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('villege_head_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('villege_head_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('villege_head_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==10):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('anganwadi_voulnteer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
      <a href="<?php echo base_url('anganwadi_voulnteer/post_new_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New voulnteer</span></a>
     
      <a href="<?php echo base_url('anganwadi_voulnteer/my_posted_voulnteer');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My voulnteer</span></a>
      
      <a href="<?php echo base_url('anganwadi_voulnteer/voulnteer_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php endif;?>