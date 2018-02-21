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
<div class="container detailinfo">
  <div class="row">
  <div class="col-md-12">
  <div class="col-md-4">
  <div class="dashiconwrp">
    <?php $this->load->view('voulnteer/common/voulnteer_menu');?>
  </div>
  </div>
  <?php $this->load->view('shg_voulnteer/common/category');?>
    <div class="col-md-8"><!--Job Detail-->
      <div class="formwraper">
        <div class="titlehead">
          <div class="row">
            <div class="col-md-12"><b>voulnteer Applications Received</b></div>
          </div>
        </div>
        <!--Job Description-->
        <div class="companydescription">
          <div class="row">
            <div class="col-md-12">
              <ul class="myjobList">
             
                  <div class="col-md-4"><strong>Candidate Name</strong></div>
                  <div class="col-md-4"><strong>voulnteer Title</strong></div>
                  <div class="col-md-4"><strong>Applied Date</strong></div>
                
                <?php if($result_applied_jobs): 
		  			foreach($result_applied_jobs as $row_applied_job):
		  ?>
               
                  <div class="col-md-4"><a href="<?php echo base_url('candidate/'.$this->custom_encryption->encrypt_data($row_applied_job->job_seeker_ID));?>"><?php echo $row_applied_job->first_name.' '.$row_applied_job->last_name;?></a></div>
                  <div class="col-md-4"><a href="<?php echo base_url('shg_voulnteers/'.$row_applied_job->job_slug);?>"><?php echo $row_applied_job->job_title;?></a></div>
                  <div class="col-md-4"><?php echo date_formats($row_applied_job->applied_date, 'M d, Y');?></div>
              
				
                <?php 	endforeach; 
		  		else:?>
                No record found!
                <?php endif;?>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
    <!--/Job Detail--> 
    
    <!--Pagination-->
    <div class="paginationWrap"> <?php echo ($result_applied_jobs)?$links:'';?> </div>
  </div>
</div>
<?php $this->load->view('common/bottom_ads');?>
<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>