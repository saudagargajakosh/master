<?php
class Applied_Certification_Model extends CI_Model {
    public function __construct() {
	   $this->load->database();
    }
    
	public function add_applied_job($data){
  
            $return = $this->db->insert('pp_seeker_applied_for_certification', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
	}	
	
	public function update_applied_job($id, $data){
		$this->db->where('ID', $id);
		$return=$this->db->update('pp_seeker_applied_for_certification', $data);
		return $return;
	}
	
	public function delete_applied_job($id){
		$this->db->where('ID', $id);
		$this->db->delete('pp_seeker_applied_for_certification');
	}
	
	public function delete_applied_job_by_employer_id($emp_id){
		$this->db->where('employer_ID', $emp_id);
		$this->db->delete('pp_seeker_applied_for_certification');
	}
	public function delete_applied_job_by_seeker_id($seeker_id){
		$this->db->where('seeker_ID', $seeker_id);
		$this->db->delete('pp_seeker_applied_for_certification');
	}
	
	public function delete_applied_job_by_posted_job_id($posted_job_id){
		$this->db->where('job_ID', $posted_job_id);
		$this->db->delete('pp_seeker_applied_for_certification');
	}
	
	public function delete_applied_job_by_id_seeker_id($id, $seeker_id){
		$this->db->where('ID', $id);
		$this->db->where('seeker_ID', $seeker_id);
		$this->db->delete('pp_seeker_applied_for_certification');
	}
			
	public function get_applied_job_by_id($id) {
        $this->db->select('pp_seeker_applied_for_certification.*');
        $this->db->from('pp_seeker_applied_for_certification');
		$this->db->where('pp_seeker_applied_for_certification.ID', $id);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_applied_job_by_seeker_id($seeker_id) {
        $this->db->select('pp_seeker_applied_for_certification.*');
        $this->db->from('pp_seeker_applied_for_certification');
		$this->db->where('pp_seeker_applied_for_certification.ID', $seeker_id);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_applied_job_by_seeker_and_job_id($seeker_id, $job_id) {
        $this->db->from('pp_seeker_applied_for_certification');
		$this->db->where('pp_seeker_applied_for_certification.seeker_ID', $seeker_id);
		$this->db->where('pp_seeker_applied_for_certification.job_ID', $job_id);
		return $this->db->count_all_results();
    }
	
	public function get_applied_certification_by_employer_id($employer_id, $per_page, $page) {
        $Q = $this->db->query("CALL get_applied_certification_by_employer_id(".$employer_id.", ".$page.",".$per_page.")");	
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
		$Q->next_result();
        $Q->free_result();
        return $return;
    }
	
	public function count_applied_certification_by_employer_id($employer_id) {
        $Q = $this->db->query("CALL count_applied_certification_by_employer_id(".$employer_id.")");	
        if ($Q->num_rows > 0) {
            $return = $Q->row('total');
        } else {
            $return = 0;
        }
		$Q->next_result();
        $Q->free_result();
        return $return;
    }
	
	public function count_records($table_name, $db_field_name, $value) {
		$this->db->where($db_field_name, $value);
		$this->db->from($table_name);
		return $this->db->count_all_results();
    }
	
	public function get_applied_certifications_by_jobseeker_id($jobseeker_id, $per_page, $page) {
        $Q = $this->db->query("CALL get_applied_certifications_by_jobseeker_id(".$jobseeker_id.", ".$page.",".$per_page.")");	
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
		$Q->next_result();
        $Q->free_result();
        return $return;
    }
	
	public function count_applied_certifications_jobseeker_id($jobseeker_id) {
        $Q = $this->db->query("CALL count_applied_certifications_by_jobseeker_id(".$jobseeker_id.")");	
        if ($Q->num_rows > 0) {
            $return = $Q->row('total');
        } else {
            $return = 0;
        }
		$Q->next_result();
        $Q->free_result();
        return $return;
    }
	
}
?>