<?php

class Course_model extends CI_Model {


	public function get_courses(){
		if($this->session->userdata('user_group_id')==1){
			$sql = 'select * from sch_courses where status = 1';
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select * from sch_courses where status = 1 and class_id= '".$this->session->userdata('class_id')."'";
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
    public function get_course_details($id){
		if($this->session->userdata('user_group_id')==1){
			$sql = "select * from sch_courses where status = 1 and course_id=$id";
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select * from sch_courses where status = 1 and course_id=$id and class_id=".$this->session->userdata('class_id');;
		}
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	
	
	public function add_course($data){
		$this->db->insert('sch_courses',$data);
		return $this->db->insert_id();
	}
	
	public function update_course($data,$course_id){
		$this->db->where('course_id',$course_id);
		return $this->db->update('sch_courses',$data);
		 
	}
       
}
