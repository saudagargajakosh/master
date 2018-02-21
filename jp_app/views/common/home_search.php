<?php if($this->session->userdata('is_user_login')!=TRUE): ?>
  <?php echo form_open_multipart('job_search/search',array('name' => 'jsearch', 'id' => 'jsearch','class'=>'form-inline'));?>
	
	<div class="form-group keyword" >
          <input type="text" required name="job_params" id="job_params" class="form-control" placeholder="Job title or Skill" />                          
    </div>
<div class="form-group keyword"  >
      <select class="form-control" name="jcity" id="jcity" >
        <option value="" selected>Select City</option>
        <?php if($cities_res): foreach($cities_res as $cities):?>
        	<option value="<?php echo $cities->city_name;?>"><?php echo $cities->city_name;?></option>
        <?php endforeach; endif;?>
      </select>
    </div>
	<div class="form-group keyword"  allign="right" style="padding-left: 34px;">
          <input type="submit" name="job_submit" class="btn" id="job_submit" value="Search"  style="height:50px;" />                       
    </div>
	
	<!-- <div class="form-group" class="col-md-2">
		
      	<input type="submit" name="job_submit" class="btn" id="job_submit" value="Search"  />
    </div> -->
<?php echo form_close();?> 

 <!-- <div class="employersection">   
      <h3>Get Started Now</h3>
      <a href="<?php echo base_url('employer/post_new_job');?>" class="postjobbtn" title="india jobs">Post a Job</a>
      <input type="submit" value="Upload Resume" title="job search engine india" class="btn" alt="job search engine india" onClick="document.location='<?php echo base_url('login');?>'" />
      <div class="clear"></div>
    </div>-->


<?php else: 

if($this->session->userdata('is_employer')==TRUE): ?>
      <h1>Search Resume</h1>
      <?php echo form_open_multipart('resume_search/search',array('name' => 'rsearch', 'id' => 'rsearch','class'=>'form-inline'));?>
		<div class="form-group keyword">
            <input type="text" name="resume_params" class="form-control" id="resume_params" placeholder="Search Resume with Skill or Job Title" style="width:145%;" />
<!--             <span class="form-group-btn"> -->
<!--             <input type="submit" name="resume_submit" class="btn" id="resume_submit" value="Search" /> -->
<!--             </span>  -->
        </div>
        <div class="form-group"  style="padding-left:100px;">
           
           <input type="submit" name="resume_submit" class="btn btn-primary" id="resume_submit" value="Search" style="height:50px;" />
      
		</div>
      <?php echo form_close();?> 
	  <?php else: ?>
	  <h1>Search a job</h1>
      <?php echo form_open_multipart('job_search/search',array('name' => 'jsearch', 'id' => 'jsearch'));?>
      <div class="form-group">
        <input type="text" name="job_params" id="job_params" class="form-control" placeholder="Job title or Skill" />
        <span class="form-group-btn">
        <input type="submit" name="job_submit" id="job_submit" class="btn btn-primary" value="Find"  style="height:50px;"/>
        </span> 
		</div>
      <?php echo form_close();?> 
<!--       </div>
<!--     <div class="col-md-12"> -->
<!--       <h1>New Company Get Started</h1> -->
      <!-- <a href="<?php echo base_url('employer/post_new_job');?>" class="postjobbtn" title="india jobs">Post a Job</a> -->
<!--       <div class="clear"></div> -->
<!--     </div> -->
<!--     <div class="clear"></div> -->
<!--   </div> -->
<!-- </div> -->

<!-- <div class="col-md-12"> -->
<!--   <div class="candidatesection"> -->
<!--     <div class="row"> -->
    

      
<!--      <div class="col-md-12"> -->
<!--        <div class="employersection"> -->
<!--       <h3>Upload your resume</h3> -->
      <!--  <input type="submit" value="Upload Resume" title="job search engine india" class="postjobbtn" alt="job search engine india" onClick="document.location='<?php echo base_url('login');?>'" /> -->
<!--       </div> -->
<!--       <div class="clear"></div> -->
<!--     </div>  -->
<!--     </div> -->
<!--     <div class="clear"></div> -->
<!--   </div> -->
<!-- </div> -->
<?php endif;?>
<?php endif;?>
