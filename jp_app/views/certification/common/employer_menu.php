
<?php if($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==7):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==9):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('villege_head_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('villege_head_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('villege_head_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('villege_head_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==2):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('sme_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('sme_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('sme_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('sme_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==4):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('shg_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('shg_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('shg_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('shg_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==3):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('rwf_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('rwf_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('rwf_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('rwf_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==8):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('nsdc_vtp_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('nsdc_vtp_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('nsdc_vtp_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('nsdc_vtp_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      
      
           
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

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==1):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('jfa_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('jfa_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('jfa_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('jfa_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
           
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==6):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('industry_yple_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('industry_yple_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('industry_yple_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('industry_yple_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>

           
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==10):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('anganwadi_certification/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	
      
     <a href="<?php echo base_url('anganwadi_certification/post_new_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Certification</span></a>
     
      <a href="<?php echo base_url('anganwadi_certification/my_posted_certification');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Certification</span></a>
      
      <a href="<?php echo base_url('anganwadi_certification/certification_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>

           
      <div class="clear"></div>
</ul>
   <?php endif;?>
