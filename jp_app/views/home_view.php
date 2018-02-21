<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('common/meta_tags'); ?>
<meta name="keywords" content="">
<title><?php echo $title;?></title>
<?php $this->load->view('common/before_head_close'); ?>
</head>
<body>


<!--Header-->
<?php $this->load->view('common/header'); ?>
<!--/Header--> 
<!--Search Block-->
<div class="siteWraper" style="padding-top: 35px;">
  
<section class="banner"  >

</section>

<section style="background-color: #95989c;">
	
    <div class="container">
	
<!--	<h1 font-color="#000">YPLE: One-Stop Shop for Livelihood Improvement</h1>	-->
		<div class="row">	
<div class="col-md-12" >
          <div class="col-md-8" bgcolor="black">
          	<!-- JOB SEARCH FORM STARTS -->
          	<?php $this->load->view('common/home_search');?>
            <!-- JOB SEARCH FORM ENDS -->
          </div>
          <div class="col-md-4" style="padding-right:105px;">
            <div class="custom-input">
              <span><a  href="http://localhost/final_jobportal/livelihood/" target="_blank" ><font color="white">Click Here For LIVELIHOOD</a> </span>
          <!--    <input type="file" name="resume" id="resume" value="Upload Resume" title="job search engine india"  alt="job search engine india"  /> -->
            </div>
          </div>
       
        </div>
 </div>
 
 <br>
        <!-- <div class="search-category">
          <p><b>TOP CATEGORY</b> <a href="javascript:void(0);">Interior Designor</a> | <a href="javascript:void(0);">IT</a> | <a href="javascript:void(0);">KPO / BPO</a> | <a href="javascript:void(0);">Tele communication</a> | <a href="javascript:void(0);">Banking</a> | <a href="javascript:void(0);">Finance</a>
    	</div> -->
    
	<div class="client-slider">
        <div class="container">
          <div class="clients slider" >
            <div>
                <img src="<?php echo base_url();?>public/images/Icons/11.jpg">
                
            </div>
            <div>
             <img src="<?php echo base_url();?>public/images/Icons/15.jpg">
            	
           </div>

        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/18.jpg">
               </div>
        
              <!--step 2-->
              <div>
                <img src="<?php echo base_url();?>public/images/Icons/22.jpg">
              </div>
        	  
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/30.jpg">
              </div>
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/32.jpg">
              </div>
        	   <div>
                <img src="<?php echo base_url();?>public/images/Icons/22.jpg">
              </div>
        	  
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/30.jpg">
              </div>
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/32.jpg">
              </div> <div>
                <img src="<?php echo base_url();?>public/images/Icons/22.jpg">
              </div>
        	  
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/30.jpg">
              </div>
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/32.jpg">
              </div>
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/22.jpg">
              </div>
        	  
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/30.jpg">
              </div>
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/32.jpg">
              </div> <div>
                <img src="<?php echo base_url();?>public/images/Icons/22.jpg">
              </div>
        	  
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/30.jpg">
              </div>
        	  <div>
                <img src="<?php echo base_url();?>public/images/Icons/32.jpg">
              </div>
          </div>
        </div>
	</div>
     
	
    <!-- BANNER ENDS -->
      <!-- CLIENTS SLIDER STARTS -->
    
      <!-- CLIENTS SLIDER ENDS -->


</section>

<section>
    <div class="container">
	
    	<div class="row">
		
    		<div class="col-md-8">
    			<div class="jobs-tab-panel">
    				<!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#jobs" aria-controls="jobs" role="tab" data-toggle="tab">Top Job Providers <strong></strong></a></li>
                    <li role="presentation"><a href="#employers" aria-controls="employers" role="tab" data-toggle="tab">Top Livelihood Providers <strong></strong></a></li>
                  </ul>
                <!-- Tab panes -->
                	<div class="tab-content">
                		<div role="tabpanel" class="tab-pane active" id="jobs">
                          <div class="row company-list">
                            
                            <?php
                    		 	if($top_employer_result):
                    		 	//  echo "<pre>"; print_r($top_employer_result); exit;
                    				foreach($top_employer_result as $row_top_employer):
                    					$company_image_name = ($row_top_employer->company_logo)?$row_top_employer->company_logo:'thumb/no_logo.jpg';
                    					$company_name= $row_top_employer->company_name;
                    		 ?>
                    		<div class="col-sm-6">
                              <div class="company-grid">
                    		 <a href="<?php echo base_url('company/'.$row_top_employer->company_slug);?>" title="Jobs in <?php echo $row_top_employer->company_name;?>">
                		  		<img src="<?php echo base_url('public/uploads/employer/thumb/'.$company_image_name);?>" alt="<?php echo base_url('company/'.$row_top_employer->company_slug);?>"  />
                		  	</a>
                              <div class="company-info">
                                  <h4><?php echo $company_name;?></h4>
									
                                 
                              </div>
                                <div class="actionbar">
                                   <a href="<?php echo base_url('company/'.$row_top_employer->company_slug);?>" class="btn btn-primary">VIEW</a>
                                </div>
                            </div>
                            </div>
                            <?php
                    		  		endforeach;
                    			endif;
                    		  ?>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="employers">
                         
                        </div>
                	</div>
    			</div>
    		</div>
    		<!--Latest Jobs Block-->
    		
    		<div class="col-md-4">
    			<div class="row">
                  <div class="col-md-12 col-sm-6">
                    <!-- RECENT JOB ALERTS STARTS -->
                    <div class="recent-alerts">
                      <h4>Recent Alerts <a class="pull-right" href="javascript:void(0);">View All</a></h4>
                      <ul class="alert-list">
                        <?php	
            	  		if($latest_jobs_result):
            	  		foreach($latest_jobs_result as $row_latest_jobs):
            				$job_title = ellipsize(humanize($row_latest_jobs->job_title),34,1);
            				$image_name = ($row_latest_jobs->company_logo)?$row_latest_jobs->company_logo:'no_logo.jpg';
            	  ?>
                        <li>
                            <div class="intlist">
                                <div class="col-xs-2"><a href="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" title="Jobs in <?php echo $row_latest_jobs->company_name;?>" class="thumbnail">
                					<img src="<?php echo base_url('public/uploads/employer/thumb/'.$image_name);?>" alt="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" /></a>
                				</div>
                                <div class="col-xs-6"> <a href="<?php echo base_url('jobs/'.$row_latest_jobs->job_slug);?>" class="jobtitle" title="<?php echo $row_latest_jobs->job_title;?>"><?php echo $job_title;?></a> 
                                    <span>
                                        <a href="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" title="Jobs in <?php echo $row_latest_jobs->company_name;?>">
                                        	<?php echo $row_latest_jobs->company_name;?>
                                        </a> &nbsp;-&nbsp; <?php echo $row_latest_jobs->city;?>
                                    </span> 
                                </div>
                                <div class="col-xs-4"> 
                                	<a href="<?php echo base_url('jobs/'.$row_latest_jobs->job_slug.'?apply=yes');?>"   title="<?php echo $row_latest_jobs->industry_name.' Job in '.$row_latest_jobs->city;?>">
                                		<span class="btn-success" style="background-color:#dddddd"><font color="#000">Apply Now</font></span>
                                	</a> 
                               	</div>
                                <div class="clear"></div>
                        	</div>
                          </li>
                        <?php
            			endforeach;
            			endif;
            		?>
                      </ul>
                       
                    </div>
                    <!-- RECENT JOB ALERTS ENDS -->
                  </div>
                 
                </div>
    		</div>
    		<!--/Latest Jobs Block--> 
    		
    		
    	</div>
    </div>
</section>

<!--<?php translate("Welcome to codeigniter",$lang);?>-->
<section>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12" style="width:104%; margin-left:-16px;">
    			<div class="jobs-tab-panel">
    				<!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#certification" aria-controls="certification" role="tab" data-toggle="tab">Top Certifications Providers <strong>(<?php echo $total_posted_certification;?>)</strong></a></li>
                    <li role="presentation"><a href="#voulnteer" aria-controls="voulnteer" role="tab" data-toggle="tab">Top Voulnteers Providers <strong>(<?php echo $total_posted_voulnteer;?>)</strong></a></li>
                    <li role="presentation"><a href="#training" aria-controls="training" role="tab" data-toggle="tab">Top Training Providers <strong>(<?php echo $total_posted_training;?>)</strong></a></li>
                  </ul>
                <!-- Tab panes -->
                	<div class="tab-content">
                		<div role="tabpanel" class="tab-pane active" id="certification">
                          <div class="row company-list">
                            
                            <?php
                    		 	if($latest_certifications_result):
                    		 	
                    				foreach($latest_certifications_result as $row_top_employer):
                    					$company_image_name = ($row_top_employer->company_logo)?$row_top_employer->company_logo:'no_logo.jpg';
                    					$company_name= $row_top_employer->company_name;
                    		 ?>
                    		 <div class="col-sm-4">
                              <div class="company-grid">
                    		 <a href="<?php echo base_url('company_certification/'.$row_top_employer->company_slug);?>" title="Jobs in <?php echo $row_top_employer->company_name;?>">
                		  		<img src="<?php echo base_url('public/uploads/employer/thumb/'.$company_image_name);?>" alt="<?php echo base_url('company/'.$row_top_employer->company_slug);?>" />
                		  	</a>
                               
							      <div class="company-info">
                                  <h4><?php echo $company_name;?></h4>
                                  <h4><?php echo $row_top_employer->industry_name;?></h4>
                                  <h4><?php echo $row_top_employer->city;?></h4>
                                 
                                  
<!--                                   <h4>Marketing Job</h4> -->
<!--                                   <p>Location: Mumbai</p> -->
<!--                                   <h5>145 Active Jobs</h5> -->
                                </div>
                               <div class="actionbar">
                                  <a href="<?php echo base_url('company_certification/'.$row_top_employer->company_slug);?>" class="btn btn-primary">View</a>
                                </div>
                            </div>
                            </div>
                            <?php
                    		  		endforeach;
                    			endif;
                    		  ?>
                         
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="voulnteer">
                          <div class="row company-list">
                          	<?php
                    		 	if($latest_voulnteer_result):
                    		 	
                    				foreach($latest_voulnteer_result as $row_top_employer):
                    					$company_image_name = ($row_top_employer->company_logo)?$row_top_employer->company_logo:'no_logo.jpg';
                    					$company_name= $row_top_employer->company_name;
                    		 ?>
                            <div class="col-sm-4">
                              <div class="company-grid">
                        		 <a href="<?php echo base_url('company_voulnteer/'.$row_top_employer->company_slug);?>" title="Jobs in <?php echo $row_top_employer->company_name;?>">
                    		  		<img src="<?php echo base_url('public/uploads/employer/thumb/'.$company_image_name);?>" alt="<?php echo base_url('company/'.$row_top_employer->company_slug);?>" />
                    		  	</a>
                                <div class="company-info">
                                  <h4><?php echo $company_name;?></h4>
                                  <h4><?php echo $row_top_employer->industry_name;?></h4>
                                  <h4><?php echo $row_top_employer->city;?></h4>
                                  
<!--                                   <h4>Marketing Job</h4> -->
<!--                                   <p>Location: Mumbai</p> -->
<!--                                   <h5>145 Active Jobs</h5> -->
                                </div>
                                <div class="actionbar">
                                 <a href="<?php echo base_url('company_voulnteer/'.$row_top_employer->company_slug);?>" class="btn btn-primary">View</a>
                                </div>
                              </div>
                            </div>
                            <?php
                    		  		endforeach;
                    			endif;
                    		  ?>  
                            
                          </div>
                        </div>
						
						  <div role="tabpanel" class="tab-pane" id="training">
                        <div class="row company-list">
                            
                            <?php
                    		 	if($latest_training_result):
                    		 	
                    				foreach($latest_training_result as $row_top_employer):
                    					$company_image_name = ($row_top_employer->company_logo)?$row_top_employer->company_logo:'no_logo.jpg';
                    					$company_name= $row_top_employer->company_name;
                    		 ?>
                    		<div class="col-sm-4">
                              <div class="company-grid">
                    		 <a href="<?php echo base_url('company_training/'.$row_top_employer->company_slug);?>" title="Jobs in <?php echo $row_top_employer->company_name;?>">
                		  		<img src="<?php echo base_url('public/uploads/employer/thumb/'.$company_image_name);?>" alt="<?php echo base_url('company/'.$row_top_employer->company_slug);?>" />
                		  	</a>
                                <div class="company-info">
                                  <h4><?php echo $company_name;?></h4>
                                  <h4><?php echo $row_top_employer->industry_name;?></h4>
                                  <h4><?php echo $row_top_employer->city;?></h4>
                                  
<!--                                   <h4>Marketing Job</h4> -->
<!--                                   <p>Location: Mumbai</p> -->
<!--                                   <h5>145 Active Jobs</h5> -->
                                </div>
                               <div class="actionbar">
                                  <a href="<?php echo base_url('company_training/'.$row_top_employer->company_slug);?>" class="btn btn-primary">View</a>
                                </div>
                            </div>
                            </div>
                            <?php
                    		  		endforeach;
                    			endif;
                    		  ?>
                          </div>
                          
                        </div>
                	</div>
    			</div>
    		</div>
    		<!--Latest Jobs Block-->
    		
    		
    		<!--/Latest Jobs Block--> 
    		
    		
    	</div>
    </div>
</section>

  
<!--Featured Jobs-->      
<!-- <div class="featuredWrap"> -->
<!--     <div class="container"> -->
<!--         <div class="titlebar"> <h2>Featured Jobs</h2></div> -->
<!--         	<ul class="featureJobs row"> -->
              <?php
//     				if($featured_job_result):
//     					foreach($featured_job_result as $row_featured_job):
//     			?>
<!--               <li class="col-md-6"> -->
<!--               	<div class="intbox"> -->
<!--                 <div class="compnyinfo"> -->
                <!--  <a href="<?php echo base_url('jobs/'.$row_featured_job->job_slug);?>" title="<?php echo $row_featured_job->job_title;?>"><?php echo $row_featured_job->job_title;?></a> <span><a href="<?php echo base_url('company/'.$row_featured_job->company_slug);?>" title="Jobs in <?php echo $row_featured_job->company_name;?>"><?php echo $row_featured_job->company_name;?></a> &nbsp;-&nbsp; <?php echo $row_featured_job->city;?></span> </div>-->
<!--                 <div class="date">Apply by <br /> -->
                  <?php //echo date_formats($row_latest_jobs->last_date, 'M d, Y');?><!--  </div>-->
<!--                 <div class="clear"></div> -->
<!--                 </div> -->
<!--               </li> -->
              <?php // endforeach; endif; ?>
<!--             </ul> -->
<!--     </div> -->
<!-- </div> -->
<!--Featured Jobs End-->


<!--<div class="container"><div class="advertise"><?php echo $ads_row->bottom;?></div></div>-->


<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<?php $this->load->view('common/before_body_close'); ?>
<!-- Slick slider plugin JS -->
    <script src="<?php echo base_url('public/js/slick.min.js');?>" type="text/javascript"></script> 
    
<!-- FlexSlider --> 
<script src="<?php echo base_url('public/js/jquery.flexslider.js');?>" type="text/javascript"></script> 
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 250,
    minItems: 6,
    maxItems: 6
  });
});
</script>
<script src="<?php echo base_url('public/js/custom.js');?>" type="text/javascript"></script>
</body>
</html>