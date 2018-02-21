<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <h5>About Us</h5>
            <p>Kherwadi Social Welfare Association (KSWA) was founded in 1928 by 
			Late Shri. B.G. Kher, a freedom fighter, statesman and the first 
			Premier of Bombay State.He was moved by the plight and miserable living 
			conditions of the 100 odd tanner families who had settled in the marshes 
			of Bandra (E).</p>
            <ul class="social-links">
                <li><a href="http://www.twitter.com" target="_blank" class="fa fa-twitter"></a></li>
                <li><a href="http://www.plus.google.com" target="_blank" class="fa fa-google-plus"></a></li>
                <li><a href="http://www.facebook.com" target="_blank" class="fa fa-facebook"></a></li>
                <li><a href="https://www.youtube.com" target="_blank" class="fa fa-youtube"></a></li>
                <li><a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a></li>
           	</ul>
          </div>
          <div class="col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
            <h5>Get to Know Us</h5>
            <ul class="quick-links">
              <li><a href="<?php echo base_url('about-us.html');?>" title="About Us">About Us</a></li>
                <li><a href="<?php echo base_url('how-to-get-job.html');?>" title="How to get Job">How to get Job</a></li>
                <li><a href="<?php echo base_url('search-jobs');?>" title="New Job Openings">New Job Openings</a></li>
                <li><a href="<?php echo base_url('search-resume');?>" title="New Job Openings">Resume Search</a></li>
                <li><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3">
          	<h5>Quick Links</h5>
          	<ul class="quick-links">
          	<li><a href="<?php echo base_url('interview.html');?>" title="Preparing for Interview">Preparing for Interview</a></li> 
            <li><a href="<?php echo base_url('cv-writing.html');?>" title="CV Writing">CV Writing</a></li>
            <li><a href="<?php echo base_url('how-to-get-job.html');?>" title="How to get Job">How to get Job</a></li>
            <li><a href="<?php echo base_url('privacy-policy.html');?>" title="Policy">Policy</a></li>
            </ul>
        </div>
          
    
          <div class="col-lg-2 col-md-3 col-sm-6">
            <h5>Popular Jobs</h5>
            <ul class="quick-links">
             <li><a>Accountant Jobs</a></li>
             <li><a>Advertising Jobs</a></li>
             <li><a>Banking Jobs</a></li>
             <li><a>Customer Service Jobs</a></li>
             <li><a>Graphic / Web Design Jobs</a></li>
            </ul>
          </div>
        </div>
        <div class="copyright">
          <div class="row">
            <div class="col-sm-6">
             <a href="javascript:void(0);">YPLE</a>, 
             <script type="text/javascript">
              var d=new Date();
              document.write(d.getFullYear());
             </script> All rights reserved.
            </div>
            <div class="col-sm-6 author-info">
              Designed and Developed by <a href="javascript:void(0);">Skill-Mart</a>.
            </div>
          </div>
        </div>
      </div>
    </footer>

<style type="text/css">
.modal-dialog {
    width: 33%;
}
button.close{
    margin-right: -10px;
    margin-top: -19px;
    padding: 4px;
    font-size: 21px;
    border-radius: 50%;
    border: 1px solid;
    background-color: #fff;
}
div.div-s label, div.div-s p, div.div-s h2, div.div-s div, .resend_otp span {
    color: #797979;
    display: table;
}
div.div-s {
    padding: 20px 0px 0px 0px;
}
#note{
  padding: 20px 0px !important;
  /*color: black;*/
  visibility: hidden;
}
.form-input {
    padding: 5px 3px;
    color: black;
    max-width: 100%;
    width: 100%;
}
#continue-btn button, #continue-btn-emp button, #continue-btn-empL button
{
    background: transparent;
    border: 1px solid #f53157;
    width: 100%;
    padding: 12px;
    border-radius: 4px;
    color: #f53157bf;
    font-size: 20px;
    letter-spacing: 1px;
}
span.email_error, .pass_error {
    color: red;
    display: none;
}
#continue-btn button:hover, #continue-btn-emp button:hover, #continue-btn-empL button:hover {
    background: #e65656;
    color: #fff;
}
.danger-text, .empErrors
{
  color:red;
  text-align: center;
  padding-top: 20px;
}
.otp_login, .secondContent, .secondContentEmp, .resend_otp{
  display: none;
}
button.otpLogin, .otpLogin1, .otpLoginEmp {
    background: #e65656;
    border: 1px solid #f53157bf;
    width: 100%;
    padding: 12px;
    border-radius: 4px;
    color: #fff;
    font-size: 20px;
    letter-spacing: 1px;
}
.create_ac {
  font-size: 25px;
  padding: 20px 0 20px;
  margin: 0 0;
  width: 100%;
  border-top: 1px solid #e6565673;
  border-bottom: 1px solid #e6565673;
}
.titlehead{
  font-size: 18px;
  border-bottom: 1px solid #e6565673;
  padding-bottom: 1px;
}
p.text-right.resend_otp {
    float: right;
    padding-top: 7px;
    padding-bottom: 20px;
}
.resend_otp span {
    border-bottom: 1px solid;
    line-height: 14px;
    font-size: 12px;
}
audio, canvas, progress, video {
  vertical-align: -webkit-baseline-middle; 
}
</style>  
<!-- Modal For Jobseeker -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Login</a>

                        </li>
                        <li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Register</a>

                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content firstContent">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                          <form name="login_form" id="login_form" action="<?php echo base_url('user/login'); ?>" method="post">
                            <?php 
                            $msg = $this->session->flashdata('msg');
                            $m_res = $this->session->flashdata('result');
                            $user1 = $this->session->flashdata('user1');
                            if($msg != ''){
                              ?>
                              <br>
                              <p class="alert alert-danger"><?php echo $msg; ?></p>
                              <?php
                            }
                            if($m_res != '')
                            {
                              ?>
                              <br>
                              <p class="alert alert-danger">Password field should no be empty.</p>
                              <?php
                            }
                            ?>
                            <div id="email_or_mobile" class="div-s">
                                <label>Mobile No. / Email Address: </label>
                                <input type="text" id="email_phone" name="email_phone" class="form-input" value="<?php if(!empty($user1)){ echo $user1; } ?>">
                                <span class="email_error">* This field should not be empty.</span>
                            </div>
                            <?php if(!empty($m_res)) { ?>
                            <div id="email_or_mobile" class="div-s">
                                <label>Password: </label>
                                <input type="password" id="pass" name="pass" class="form-input">
                                <span class="pass_error">* This filed should not be empty.</span>
                            </div>
                            <div id="continue-btn" class="div-s"> <!-- #f53157 -->
                                <button id="continue">Login</button>
                            </div>
                            <div class="div-s text-center loginWithOtp">
                              <button class="otpLogin">Login with OTP</button>
                            </div>
                            <?php } else {?>
                            <div id="continue-btn" class="div-s"> <!-- #f53157 -->
                                <button id="continue">Continue</button>
                            </div>
                            <?php }

                            //if(is_numeric($user1)){
                            ?>

                            <?php //} ?>
                            <div id="note" class="div-s">
                              <p class="text-center">
                                We will never post anything without your permission
                              </p>
                            </div>
                          </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="browseTab">
                          <?php echo form_open_multipart('jobseeker_signup_main',array('name' => 'seeker_form', 'id' => 'seeker_form', 'onSubmit' => 'return validate_form(this);'));?>
                            <div class="danger-text"></div>
                            <div class="div-s">
                                <label>Name*</label>
                                <input name="full_name" type="text" class="form-input" id="full_name" value="<?php echo set_value('full_name'); ?>" maxlength="150">
                                <?php echo form_error('full_name'); ?>
                            </div>
                            <div class="div-s">
                                <label>Email*</label>
                                <input name="email" type="text" class="form-input" id="email" value="<?php echo set_value('email'); ?>" maxlength="150">
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="div-s">
                                <label>Mobile Phone*</label>
                                <input name="mobile_number" type="text" class="form-input" id="mobile_number" value="<?php echo set_value('mobile_number'); ?>" maxlength="15" />
                                <?php echo form_error('mobile_number'); ?>
                            </div>
                            <div class="div-s">
                                <label>Password*</label>
                                <input name="pass" type="password" class="form-input" id="pass" autocomplete="off" value="<?php echo set_value('pass'); ?>" maxlength="100">
                                <?php echo form_error('pass'); ?>
                            </div>
                            <div class="div-s">
                                <label>Confirm Password*</label>
                                <input name="confirm_pass" type="password" class="form-input" id="confirm_pass" value="<?php echo set_value('confirm_pass'); ?>" maxlength="100">
                                <?php echo form_error('confirm_pass'); ?>
                            </div>
                            <div id="continue-btn" class="div-s"> <!-- #f53157 -->
                            <button id="register">Register</button>
                            </div>
                          <?php echo form_close();?>
                        </div>
                    </div>

                    <div class="tab-content secondContent">
                      <form name="OTPlogin_form" id="OTPlogin_form" action="<?php echo base_url('user/loginWithOTP'); ?>" method="post">
                        <?php  
                        $otp_er = $this->session->flashdata('otperror');
                        if(!empty($otp_er))
                        {
                          ?>
                          <p class="text-center alert-danger"><?php echo $otp_er; ?></p>
                          <?php
                        }
                        ?>
                        <div class="div-s">
                            <label>Enter OTP*:</label>
                            <input name="mobileOtp" type="text" class="form-input" id="mobileOtp">
                            <?php echo form_error('mobileOtp'); ?>
                            <progress value="0" max="60" id="progressBar"></progress>
                            <p class="text-right resend_otp"><span class="get_OTP">OTP not received, get after progress completed. </span></p>
                        </div>
                        <div id="continue-btn" class="div-s"> <!-- #f53157 -->
                            <button id="otpLogin1">Submit</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="livelihoodlogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="loginLivelihood">
                        <li role="presentation" class="active"><a id="uploadTab1LI" href="#uploadTab1" aria-controls="uploadTab1" role="tab" data-toggle="tab">Login</a>
                        </li>
                        <!-- <li role="presentation"><a id="browseTabLI" href="#browseTab1" aria-controls="browseTab1" role="tab" data-toggle="tab">Register</a>
                        </li> -->
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content firstContent1">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab1">
                          <form method="POST" action="http://localhost/final_jobportal/livelihood/login.php" >
                            <div class="div-s">
                                <label>Email:</label>
                                <input type="email" class="form-input" id="email" name="email" placeholder="" value="" required>
                            </div>
                            <div class="div-s">
                              <label>Password:</label>
                              <input type="password" class="form-input" id="password" name="password" placeholder="" value="" required>
                            </div>
                            <div id="continue-btn-empL" class="div-s">
                              <input type="hidden" name="loginhash" value="5a8a7aaf03fda" readonly="">
                              <input class="continueEmpL" type="submit" name="enterlogin" value="Login">
                            </div>
                            
                            <?php
                              //echo "<input type=\"hidden\" name=\"loginhash\" value=\"".$random_hash."\" readonly/>";
                            ?>
                          </form>
                        </div>
                        
                    </div>
                    <!-- <div class="tab-content secondContent1">
                      <div role="tabpanel" class="tab-pane" id="browseTab1">
                        <?php //echo form_open_multipart('jobseeker_signup_main',array('name' => 'seeker_form', 'id' => 'seeker_form', 'onSubmit' => 'return validate_form(this);'));?>
                        <form id="seeker_formL" name="seeker_formL">
                            <div class="danger-text"></div>
                            <div class="div-s">
                                <label>Name*</label>
                                <input name="full_nameL" type="text" class="form-input" id="full_nameL" value="<?php echo set_value('full_nameL'); ?>" maxlength="150">
                                <?php echo form_error('full_nameL'); ?>
                            </div>
                            <div class="div-s">
                                <label>Email*</label>
                                <input name="emailL" type="text" class="form-input" id="emailL" value="<?php echo set_value('emailL'); ?>" maxlength="150">
                                <?php echo form_error('emailL'); ?>
                            </div>
                            <div class="div-s">
                                <label>Mobile Phone*</label>
                                <input name="mobile_numberL" type="text" class="form-input" id="mobile_numberL" value="<?php echo set_value('mobile_numberL'); ?>" maxlength="15" />
                                <?php echo form_error('mobile_numberL'); ?>
                            </div>
                            <div class="div-s">
                                <label>Password*</label>
                                <input name="passL" type="passwordL" class="form-input" id="passL" autocomplete="off" value="<?php echo set_value('passL'); ?>" maxlength="100">
                                <?php echo form_error('pass'); ?>
                            </div>
                            <div class="div-s">
                                <label>Confirm Password*</label>
                                <input name="confirm_passL" type="password" class="form-input" id="confirm_passL" value="<?php echo set_value('confirm_passL'); ?>" maxlength="100">
                                <?php echo form_error('confirm_passL'); ?>
                            </div>
                            <div id="continue-btnL" class="div-s"> <!-- #f53157
                            <button id="registerL">Register</button>
                            </div>
                          <?php echo form_close();?>
                      </div>
                    </div>  -->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '#loginLivelihood li a', function (e) {
      e.preventDefault();
      alert('df');
      $('#loginLivelihood li.active').removeClass('active');
      $(this).parent('li').addClass('active');
    });
  });
</script>

<script type="text/javascript">
  var livelihood = '<?php if(isset($_GET['loginto'])) { echo $_REQUEST['loginto']; } else { ''; } ?>';
  // Time Left for jobseeker OTP
  var timeleft = 60;
  var downloadTimer = setInterval(function(){
    document.getElementById("progressBar").value = 60 - --timeleft;
    if(timeleft <= 0)
    {
      $(".get_OTP").text("Resend OTP").css({"font-size":"14px"});
      $(".get_OTP").addClass("resend_OTP");
      // $(".resend").css({"display":"table"});
      clearInterval(downloadTimer);
    }
    // else
    // {
    //   $(".resend").css({"display":"none"});
    // }
  },1000);
</script>

<!-- Modal For Employer -->
<div class="modal fade" id="loginEmployer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <?php  
      $result_industries = $this->industries_model->get_all_employer_industries_login();
      ?>
        <div class="modal-content">
          <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#loginEmpTab" aria-controls="loginEmpTab" role="tab" data-toggle="tab">Login</a>

                        </li>
                        <li role="presentation"><a href="#registerEmpTab" aria-controls="registerEmpTab" role="tab" data-toggle="tab">Register</a>

                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content firstContentEmp">
                        <div role="tabpanel" class="tab-pane active" id="loginEmpTab">
                          <form name="login_formEmp" id="login_formEmp" action="<?php echo base_url('user_employer/login_employer'); ?>" method="post">
                            <?php 
                            $msgemp = $this->session->flashdata('msgemp');
                            $wrong_pass = $this->session->flashdata('wrong_pass');
                            $m_resemp = $this->session->flashdata('resultemp');
                            $indus_id = $this->session->userdata('indus_id');
                            $useremp = $this->session->flashdata('useremp');
                            // echo $indus_id; exit;
                            if($msgemp != '')
                            {
                              ?>
                              <br>
                              <p class="alert alert-danger"><?php echo $msg; ?></p>
                               <?php
                            }
                            if($wrong_pass != '')
                            {
                              ?>
                              <br>
                              <p class="alert alert-danger"><?php echo $wrong_pass; ?></p>
                              <?php
                            }
                            ?>
                            <div id="email_or_mobileEmp" class="div-s">
                                <label>Mobile No. / Email Address: </label>
                                <input type="text" id="email_phoneEmp" name="email_phoneEmp" class="form-input" value="<?php if(!empty($useremp)){ echo $useremp; } ?>">
                                <span class="email_error">* This field should not be empty.</span>
                            </div>
                            <?php if(!empty($m_resemp)) { ?>
                            <div id="email_or_mobile" class="div-s">
                                <label>Password: </label>
                                <input type="password" id="passEmp" name="passEmp" class="form-input">
                                <span class="pass_error">* This filed should not be empty.</span>
                            </div>
                            <div id="continue-btn-emp" class="div-s"> <!-- #f53157 -->
                                <input type="hidden" name="industry_idEmp" value="<?php if(!empty($indus_id)){ echo $indus_id; } ?>">
                                <button id="continueEmp">Login</button>
                            </div>
                            <div class="div-s text-center loginWithOtp">
                              <button class="otpLoginEmp">Login with OTP</button>
                            </div>
                            <?php } else {?>
                            <div id="continue-btn-emp" class="div-s"> <!-- #f53157 -->
                                <button id="continueEmp">Continue</button>
                            </div>
                            <?php }

                            //if(is_numeric($user1)){
                            ?>

                            <?php //} ?>
                            <div id="note" class="div-s">
                              <p class="text-center">
                                We will never post anything without your permission
                              </p>
                            </div>
                          </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="registerEmpTab">
                          <form id="register_empr" name="register_empr" action="<?php echo  base_url('employer_signup'); ?>" method="post">
                            <div class="danger-text empErrors"></div>
                            <div class="div-s">
                              <p>With Job Portal, the employer signup process only takes a couple of minutes and once your registration is complete, you have access to search the Job Seekers and post the Job openings in your company. The candidates who have opted to receive Job Alerts will receive your Job Opening in their Email. If you have an opening in your company, don't spend thousands of rupees advertising in newspaper or websites that charge you. Give us a chance to provide you top quality service for free!</p>
                            </div>
                            <div class="div-s text-center">
                              <h2 class="create_ac"> Create New Account</h2>
                            </div>
                            <div class="div-s">
                              <div class="titlehead">Account Information</div>
                            </div>
                            <div class="div-s">
                                <label>Your Name*</label>
                                <input name="full_nameEmp" type="text" class="form-input" id="full_nameEmp" value="<?php echo set_value('full_nameEmp'); ?>">
                                <?php echo form_error('full_nameEmp'); ?>
                            </div>
                            <div class="div-s">
                                <label>Contact Number*</label>
                                <input name="mobile_phoneEmp" type="text" class="form-input" id="mobile_phoneEmp" value="<?php echo set_value('mobile_phoneEmp'); ?>" maxlength="10" />
                                <?php echo form_error('mobile_phoneEmp'); ?>
                            </div>
                            <div class="div-s">
                                <label>Email*</label>
                                <input name="emailEmp" type="text" class="form-input" id="emailEmp" value="<?php echo set_value('emailEmp'); ?>" maxlength="150">
                                <?php echo form_error('emailEmp'); ?>
                            </div>
                            <div class="div-s">
                                <label>Password*</label>
                                <input name="passEmp" type="password" class="form-input" id="passEmp" autocomplete="off" value="<?php echo set_value('passEmp'); ?>" maxlength="100">
                                <?php echo form_error('passEmp'); ?>
                            </div>
                            <div class="div-s">
                                <label>Confirm Password*</label>
                                <input name="confirm_passEmp" type="password" class="form-input" id="confirm_passEmp" value="<?php echo set_value('confirm_passEmp'); ?>" maxlength="100">
                                <?php echo form_error('confirm_passEmp'); ?>
                            </div>
                            <div class="div-s">
                                <label>Industry*</label>
                                <select name="industry_id" id="industry_id" class="form-input">
                                  <option value="" selected>Select Industry</option>
                                  <?php foreach($result_industries as $row_industry):
                                    $selected = (set_value('industry_id')==$row_industry->ID)?'selected="selected"':'';
                              ?>
                                  <option value="<?php echo $row_industry->ID;?>" <?php echo $selected;?>><?php echo $row_industry->industry_name;?></option>
                                  <?php endforeach;?>
                                </select>
                                <?php echo form_error('industry_id'); ?>
                            </div>
                            <div id="continue-btn" class="div-s"> <!-- #f53157 -->
                                <button id="registerEmp">Register</button>
                            </div>
                          <?php echo form_close();?>
                        </div>
                    </div>

                    <div class="tab-content secondContentEmp">
                      <form name="OTPlogin_form_emp" id="OTPlogin_form_emp" action="<?php echo base_url('user_employer/loginWithOTPEmp'); ?>" method="post">
                        <div class="div-s">
                            <label>Enter OTP*:</label>
                            <input name="mobileOtpEmp" type="text" class="form-input" id="mobileOtpEmp">
                            <?php echo form_error('mobileOtpEmp'); ?>
                            <progress value="0" max="60" id="progressBarEmp"></progress>
                            <p class="text-right resend_otp"><span class="get_OTPEmp">OTP not received, get after progress completed. </span></p>
                        </div>
                        <div id="continue-btn" class="div-s"> <!-- #f53157 -->
                            <button id="otpLoginEmp1">Submit</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  // Time Left for jobseeker OTP
  var timeleft = 60;
  var downloadTimer = setInterval(function(){
    document.getElementById("progressBarEmp").value = 60 - --timeleft;
    if(timeleft <= 0)
    {
      $(".get_OTPEmp").text("Resend OTP").css({"font-size":"14px"});
      $(".get_OTPEmp").addClass("resend_OTPEmp");
      // $(".resend").css({"display":"table"});
      clearInterval(downloadTimer);
    }
    // else
    // {
    //   $(".resend").css({"display":"none"});
    // }
  },1000);
</script>

<?php echo $ads_row->google_analytics;?> 