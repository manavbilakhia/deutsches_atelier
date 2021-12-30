<?php

class Assignment_model extends CI_Model {

    //Need to Change the below Query

	public function get_assignments(){
		if($this->session->userdata('user_group_id')==1){
			$sql = "select a.*,IFNULL(sa.submission_id,0) as submission from sch_assignments a left join sch_submited_assignments sa ON a.id = sa.assignment_id and sa.submitted_by = ".$this->session->userdata('user_id')." where a.status = 1 ";
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select a.*,IFNULL(sa.submission_id,0) as submission from sch_assignments a left join sch_submited_assignments sa ON a.id = sa.assignment_id and sa.submitted_by = ".$this->session->userdata('user_id')." where a.status = 1 and a.class_id='".$this->session->userdata('class_id')."'";
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_assignments_class($class){
		if($this->session->userdata('user_group_id')==1){
			$sql = "select a.*,IFNULL(sa.submission_id,0) as submission from sch_assignments a left join sch_submited_assignments sa ON a.id = sa.assignment_id and sa.submitted_by = ".$this->session->userdata('user_id')." where a.status = 1  and a.class_id = '$class'";
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select a.*,IFNULL(sa.submission_id,0) as submission from sch_assignments a left join sch_submited_assignments sa ON a.id = sa.assignment_id and sa.submitted_by = ".$this->session->userdata('user_id')." where a.status = 1 and a.class_id='".$this->session->userdata('class_id')."'";
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_assignments_deadlines(){
		if($this->session->userdata('user_group_id')==1){
			$sql = "select title as title,deadline as start,deadline as end,'orangered' as color  from sch_assignments where status = 1";
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select title as title,deadline as start,deadline as end,'orangered' as color  from sch_assignments where status = 1 and class_id = '".$this->session->userdata('class_id')."'";
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_assignment_details($id){
		$sql = "select * from sch_assignments where status = 1 and id=$id";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function get_submitted_assignments($class_id){
		$sql = 'select sa.*,u.fullname,u.level,u.group_id,s.title,s.message,s.deadline from sch_submited_assignments sa left join `sch_users` u ON sa.submitted_by = u.user_id and u.group_id = 2   join `sch_assignments` s ON sa.assignment_id = s.id and s.status=1 and s.class_id = "'.$class_id.'"';
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function get_submitted_assignment($id){
		$sql = "select sa.* from sch_submited_assignments sa where submission_id=$id ";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
    
	public function get_assignment_files($id){
		$sql = "select * from sch_assignment_files where assignment_id= '$id' and status = 1";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function add_assignment($data){
		$this->db->insert('sch_assignments',$data);
		return $this->db->insert_id();
	}
	
    public function add_assignment_files($data){
		$this->db->insert('sch_assignment_files',$data);	
		return $this->db->insert_id();
	}
	
	public function submit_assignment_file($data){
		$this->db->insert('sch_submited_assignments',$data);	
		return $this->db->insert_id();
	}	
}
