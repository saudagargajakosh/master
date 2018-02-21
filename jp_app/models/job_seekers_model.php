<?php
class Job_Seekers_Model extends CI_Model {
    public function __construct() {
	   $this->db = $this->load->database('local', TRUE);
       $this->db2 = $this->load->database('database2', TRUE);
    }
    
	public function add_job_seekers($data){
  
            $return = $this->db->insert('pp_job_seekers', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}	

    public function create_livelihood_user($data)
    {
        $return = $this->db2->insert($this->db2->dbprefix .'users', $data);
        return $this->db2->insert_id();
    }

	public function add_job_student($insertdata)
    {
        $return = $this->db->insert('pp_job_seekers', $insertdata);
        if ((bool) $return === TRUE) {
            return $this->db->insert_id();
        } else {
            return $return;
        }	
    }	

	
	public function update_job_seeker($id, $data){
		$this->db->where('ID', $id);
		$return=$this->db->update('pp_job_seekers', $data);
		return $return;
	}
	
	public function update($id, $data){
		$this->db->where('ID', $id);
		$return=$this->db->update('pp_job_seekers', $data);
		return $return;
	}
	
	public function delete_job_seeker($id){
		$this->db->where('ID', $id);
		$this->db->delete('pp_job_seekers');
	}

    public function check_jobseekers_mobile_or_email($username)
    {
        $query = "SELECT * FROM pp_job_seekers WHERE email = '".$username."' OR mobile = '". $username."'";
        // echo $query; exit;
        return $this->db->query($query)->row_array();
    }
	
	public function authenticate_job_seeker($user_name, $password) {
        // echo $password."<br>".$user_name; exit;
  //       $this->db->select('*');
  //       $this->db->from('pp_job_seekers');
  //       $this->db->where('email', $user_name);
  //       $this->db->or_where("mobile", $user_name);
		// $this->db->where('password', $password);
		// $this->db->limit(1);
        $query = "SELECT * FROM pp_job_seekers WHERE (email = '".$user_name."' OR mobile = '".$user_name."') AND password = '".$password."'";
        
        $Q = $this->db->query($query);
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function authenticate_job_seeker_email_address($user_name) {
        $this->db->select('*');
        $this->db->from('pp_job_seekers');
        $this->db->where('email', $user_name);
		$this->db->limit(1);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function authenticate_job_seeker_by_id_password($ID, $password) {
        $this->db->select('*');
        $this->db->from('pp_job_seekers');
        $this->db->where('ID', $ID);
		$this->db->where('password', $password);
		$this->db->limit(1);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_all_job_seekers($per_page, $page) {
        $this->db->select('pp_job_seekers.*');
        $this->db->from('pp_job_seekers');
		$this->db->order_by("pp_job_seekers.ID", "DESC"); 
		$this->db->limit($per_page, $page);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function record_count($table_name) {
		return $this->db->count_all($table_name);
    }
	
	public function get_job_seeker_by_id($id) {
        $this->db->select('pp_job_seekers.*');
        $this->db->from('pp_job_seekers');
		$this->db->where('pp_job_seekers.ID', $id);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_job_seeker_by_old_id($id) {
        $this->db->select('pp_job_seekers.*');
        $this->db->from('pp_job_seekers');
		$this->db->where('pp_job_seekers.old_id', $id);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function search_all_job_seekers($per_page, $page, $search_parameters) {
        $this->db->select('pp_job_seekers.*');
        $this->db->from('pp_job_seekers');
		$this->db->like($search_parameters);
		$this->db->order_by("pp_job_seekers.ID", "DESC"); 
		$this->db->limit($per_page, $page);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
		//echo $this->db->last_query(); exit;
        return $return;
    }
	
	public function search_record_count($table_name, $search_parameters) {
		//return $this->db->count_all($table_name);
		$this->db->like($search_parameters);
		$this->db->from($table_name);
		return $this->db->count_all_results();
    }
	
	public function count_records($table_name, $db_field_name, $value) {
		$this->db->where($db_field_name, $value);
		$this->db->from($table_name);
		return $this->db->count_all_results();
    }
	
	public function get_all_applied_jobs_by_seekers_ID($employer_id, $per_page, $page) {
        $Q = $this->db->query("CALL get_applied_jobs_by_seeker_id($employer_id, $page, $per_page)");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	
	public function get_all_applied_voulnteer_by_seekers_ID($employer_id, $per_page, $page) {
        $Q = $this->db->query("CALL get_applied_voulnteer_by_seeker_id($employer_id, $page, $per_page)");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_all_applied_training_by_seekers_ID($employer_id, $per_page, $page) {
        $Q = $this->db->query("CALL get_applied_training_by_seeker_id($employer_id, $page, $per_page)");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_all_applied_certification_by_seekers_ID($employer_id, $per_page, $page) {
        $Q = $this->db->query("CALL get_applied_certification_by_seeker_id($employer_id, $page, $per_page)");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	public function get_experience_by_jobseeker_id($jobseeker_id) {
        $Q = $this->db->query("CALL get_experience_by_jobseeker_id($jobseeker_id)");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
		$Q->next_result();
        $Q->free_result();
        return $return;
    }
	
	public function get_qualification_by_jobseeker_id($jobseeker_id) {
        $Q = $this->db->query("CALL get_qualification_by_jobseeker_id($jobseeker_id)");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
		$Q->next_result();
        $Q->free_result();
        return $return;
    }
	
	public function get_grouped_skills_by_seeker_id($seeker_id){
		$Q = $this->db->query("SELECT GROUP_CONCAT(skill_name SEPARATOR ', ') as skills FROM `pp_seeker_skills` where seeker_ID='".$seeker_id."'");	
		if ($Q->num_rows > 0) {
            $return = $Q->row('skills');
        } else {
            $return = 0;
        }
        return $return;
	}

// Saudagar 
    public function check_mobile_existance($mobile)
    {
        $query = "SELECT ID FROM pp_job_seekers WHERE mobile = '".$mobile."'";
        return $this->db->query($query)->row_array();
    }

    public function upadte_user_otp($otp, $userId)
    {
        $query = "UPDATE `pp_job_seekers` SET `mobile_otp`= '".$otp."' WHERE ID = ".$userId;
        $res = $this->db->query($query);
        if($res)
        {
            $query1 = "SELECT * FROM pp_job_seekers WHERE ID = '".$userId."'";
            $res1 = $this->db->query($query1)->row_array();

            return $res1;
        }
    }

    public function get_user_request_otp($mobile)
    {
        $query = "SELECT * FROM pp_job_seekers WHERE mobile = '".$mobile."'";
        return $this->db->query($query)->row_array();
    }

    public function authenticate_job_seekerWithOTP($mobileTOP)
    {
        $query = "SELECT * FROM pp_job_seekers WHERE mobile_otp = '".$mobileTOP."'";
        return $this->db->query($query)->row_array();
    }


}
?>
