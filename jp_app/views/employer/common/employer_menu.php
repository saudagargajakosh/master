
 <?php if($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==7):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('employer/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('employer/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
      <a href="<?php echo base_url('employer/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New Job</span></a>
     
      <a href="<?php echo base_url('employer/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My Jobs</span></a>
      
      <a href="<?php echo base_url('employer/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
      <a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>
      
      <a href="<?php echo base_url('employer/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==6):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('industry_yple/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('industry_yple/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('industry_yple/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New v_h</span></a>
     
     <a href="<?php echo base_url('industry_yple/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My v_h</span></a>
      
      <a href="<?php echo base_url('industry_yple/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('industry_yple/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==1):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('jfa/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('jfa/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('jfa/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New J_F_A</span></a>
     
     <a href="<?php echo base_url('jfa/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My J_F_A</span></a>
      
      <a href="<?php echo base_url('jfa/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('jfa/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==5):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('msme/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('msme/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('msme/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New MSME</span></a>
     
     <a href="<?php echo base_url('msme/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My MSME</span></a>
      
      <a href="<?php echo base_url('msme/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('msme/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>


<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==8):?>
<ul class="featurlist">
     
	 <a href="<?php echo base_url('nsdc_vtp/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('nsdc_vtp/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('nsdc_vtp/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New v_h</span></a>
     
     <a href="<?php echo base_url('nsdc_vtp/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My v_h</span></a>
      
      <a href="<?php echo base_url('nsdc_vtp/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('nsdc_vtp/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==3):?>


<ul class="featurlist">
     
	 <a href="<?php echo base_url('rwf/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('rwf/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('rwf/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New RWF</span></a>
     
     <a href="<?php echo base_url('rwf/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My RWF</span></a>
      
      <a href="<?php echo base_url('rwf/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('rwf/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>


<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==4):?>

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

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==2):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('sme/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('sme/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('sme/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New SME</span></a>
     
     <a href="<?php echo base_url('sme/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My SME</span></a>
      
      <a href="<?php echo base_url('sme/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('sme/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>

<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==9):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('villege_head/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('villege_head/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('villege_head/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New v_h</span></a>
     
     <a href="<?php echo base_url('villege_head/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My v_h</span></a>
      
      <a href="<?php echo base_url('villege_head/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('villege_head/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>


<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==10):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('anganwadi/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('anganwadi/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('anganwadi/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New v_h</span></a>
     
     <a href="<?php echo base_url('anganwadi/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My v_h</span></a>
      
      <a href="<?php echo base_url('anganwadi/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('anganwadi/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>
<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==11):?>

<ul class="featurlist">
     
	 <a href="<?php echo base_url('placement_agency/dashboard');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'dashboard');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>

	<a href="<?php echo base_url('placement_agency/edit_company');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'edit_company');?>"><i class="fa fa-users"></i> <span>Company Profile</span></a>
      
     <a href="<?php echo base_url('placement_agency/post_new_job');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'post_new_job');?>"><i class="fa fa-file-text-o"></i> <span>Post New v_h</span></a>
     
     <a href="<?php echo base_url('placement_agency/my_posted_jobs');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'my_posted_jobs');?>"><i class="fa fa-cogs"></i> <span>Manage My v_h</span></a>
      
      <a href="<?php echo base_url('placement_agency/job_applications');?>" class="btn btn-special btn-block <?php echo is_active_like($this->uri->segment(2),'job_applications');?>"><i class="fa fa-users"></i> <span>View Candidates</span></a>
      
       <!--<a href="<?php echo base_url('search-resume');?>" class="btn btn-special btn-block"><i class="fa fa-search"></i> <span>Resume Search</span></a>-->
      
      <a href="<?php echo base_url('placement_agency/change_password');?>" class="btn btn-special btn-block" <?php echo is_active_like($this->uri->segment(2),'change_password');?>><i class="fa fa-lock"></i> <span>Password Change</span></a>     
      <div class="clear"></div>
</ul>

<?php endif;?>

