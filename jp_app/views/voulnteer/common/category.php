
<?php if($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==7):?>
<div class="col-md-2">
                <a  href="<?php echo base_url('employer/dashboard');?>"    class="btn btn-success" >Jobs</a>
              </div> <div class="col-md-2" style="margin-right: 63px;">
                 <a  href="<?php echo base_url('certification/dashboard');?>"    class="btn btn-success" >certification</a>
              </div> <div class="col-md-2" style="margin-right: 40px;">
                <a  href="<?php echo base_url('voulnteer/dashboard');?>"    class="btn btn-success" >voulnteer</a>
              </div>
			   <div class="col-md-2" style="margin-right: 40px;">
                 <a  href="<?php echo base_url('training/dashboard');?>"    class="btn btn-success" >Training</a>
              </div>
              
			<?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==6):?>  
			  <div class="col-md-2">
                <a  href="<?php echo base_url('industry_yple/dashboard');?>"    class="btn btn-success" >industry-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('industry_yple_certification/dashboard');?>"    class="btn btn-success" >industry-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('industry_yple_voulnteer/dashboard');?>"    class="btn btn-success" >industry-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('industry_yple_training/dashboard');?>"    class="btn btn-success" >industry-Training</a>
              </div>
              
              
			 <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==1):?> 
			  <div class="col-md-2">
                <a  href="<?php echo base_url('jfa/dashboard');?>"    class="btn btn-success" >jfa-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('jfa_certification/dashboard');?>"    class="btn btn-success" >jfa-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('jfa_voulnteer/dashboard');?>"    class="btn btn-success" >jfa-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('jfa_training/dashboard');?>"    class="btn btn-success" >jfa-Training</a>
              </div>
              
              
			  <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==5):?>
			  <div class="col-md-2">
                <a  href="<?php echo base_url('msme/dashboard');?>"    class="btn btn-success" >msme-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('msme_certification/dashboard');?>"    class="btn btn-success" >msme-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('msme_voulnteer/dashboard');?>"    class="btn btn-success" >msme-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('msme_training/dashboard');?>"    class="btn btn-success" >msme-Training</a>
              </div>
              
              <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==8):?>
			  <div class="col-md-2">
                <a  href="<?php echo base_url('nsdc_vtp/dashboard');?>"    class="btn btn-success" >nsdc_vtp-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('nsdc_vtp_certification/dashboard');?>"    class="btn btn-success" >nsdc_vtp-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('nsdc_vtp_voulnteer/dashboard');?>"    class="btn btn-success" >nsdc_vtp-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('nsdc_vtp_training/dashboard');?>"    class="btn btn-success" >nsdc_vtp-Training</a>
              </div>
              <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==3):?>
              
			  <div class="col-md-2">
                <a  href="<?php echo base_url('rwf/dashboard');?>"    class="btn btn-success" >rwf-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('rwf_certification/dashboard');?>"    class="btn btn-success" >rwf-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('rwf_voulnteer/dashboard');?>"    class="btn btn-success" >rwf-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('rwf_training/dashboard');?>"    class="btn btn-success" >rwf-Training</a>
              </div>
              
              
			  <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==4):?>

<div class="col-md-2">
                <a  href="<?php echo base_url('shg/dashboard');?>"    class="btn btn-success" >shg-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('shg_certification/dashboard');?>"    class="btn btn-success" >shg-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('shg_voulnteer/dashboard');?>"    class="btn btn-success" >shg-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('shg_training/dashboard');?>"    class="btn btn-success" >shg-Training</a>
              </div>
              
			  <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==2):?>
			  <div class="col-md-2">
                <a  href="<?php echo base_url('sme/dashboard');?>"    class="btn btn-success" >sme-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('sme_certification/dashboard');?>"    class="btn btn-success" >sme-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('sme_voulnteer/dashboard');?>"    class="btn btn-success" >sme-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('sme_training/dashboard');?>"    class="btn btn-success" >sme-Training</a>
              </div>
              
             <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==9):?> 
			  <div class="col-md-2">
                <a  href="<?php echo base_url('villege_head/dashboard');?>"    class="btn btn-success" >v_h-Jobs</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('villege_head_certification/dashboard');?>"    class="btn btn-success" >v_h-certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('villege_head_voulnteer/dashboard');?>"    class="btn btn-success" >v_h-voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('villege_head_training/dashboard');?>"    class="btn btn-success" >v_h-Training</a>
              </div>
               <?php elseif($this->session->userdata('is_employer')==TRUE && $this->session->userdata('industry_com_id')==10):?>  
			  
			  
<div class="col-md-2">
                <a  href="<?php echo base_url('anganwadi/dashboard');?>"    class="btn btn-success" >anganwadi</a>
              </div> <div class="col-md-2">
                 <a  href="<?php echo base_url('anganwadi_certification/dashboard');?>"    class="btn btn-success" >certification</a>
              </div> <div class="col-md-2">
                <a  href="<?php echo base_url('anganwadi_voulnteer/dashboard');?>"    class="btn btn-success" >voulnteer</a>
              </div>
			   <div class="col-md-2">
                 <a  href="<?php echo base_url('anganwadi_training/dashboard');?>"    class="btn btn-success" >Training</a>
              </div>
              <?php elseif;?>