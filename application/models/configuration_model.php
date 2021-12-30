<?php

class Configuration_model extends CI_Model {

	public function get_users(){
		$sql = 'select u.*,c.class_name,c.groups as groupname,c.level as levelname from sch_users u left join `sch_class` c ON  u.class_id = c.id  where u.status = 1';
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_classes(){
		$sql = 'select * from sch_class where status = 1';
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function get_students(){
		$sql = 'select * from sch_users where status = 1 and group_id= 2';
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_allocated_students($class_id){
		// $sql = "select *,'$class_id' as class_id from sch_users where status = 1 and group_id= 2 and user_id IN(select student_id  from sch_student_allocation where class_id = $class_id and status=1)";
		$sql = "select * from sch_users where status = 1 and group_id = 2 and class_id = $class_id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_unallocated_students(){
		// $sql = "select * from sch_users where status = 1 and group_id= 2 and user_id NOT IN(select student_id  from sch_student_allocation where class_id = $class_id and status=1)";
		$sql = "select * from sch_users where status = 1 and group_id = 2 and class_id IS NULL";
		$query = $this->db->query($sql);
		return $query->result();
	}
    
	public function get_assignment_files($id){
		$sql = "select * from sch_assignment_files where assignment_id= '$id' and status = 1";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function add_user($data){
		$this->db->insert('sch_users',$data);
		return $this->db->insert_id();
	}
	public function remove_user($id){
		return $this->db->query('delete from sch_users where user_id ='.$id);
	}
	public function add_class($data){
		$this->db->insert('sch_class',$data);
		return $this->db->insert_id();
	}
	public function update_class($class,$id){
		$sql="UPDATE sch_class set class_name='".$class['class_name']."',groups='".$class['groups']."',level='".$class['level']."' where id = $id";
		return $this->db->query($sql);
	}
	public function add_student_class($data){
		// $this->db->insert('sch_student_allocation',$data);
		// return $this->db->insert_id();
		$sql="UPDATE sch_users set class_id = '".$data['class_id']."' where user_id = ".$data['student_id']." ";
		return $this->db->query($sql);
	}
	public function dealloc_student_class($class_id,$student_id){
		//$sql="delete from sch_student_allocation where class_id = $class_id and student_id =$student_id";
		$sql="UPDATE sch_users set class_id = NULL where user_id = $student_id";
		return $this->db->query($sql);
	}
	
	public function get_events(){
		if($this->session->userdata('user_group_id')==1){
		$sql = "select event_name as title,start_date as start,end_date as end,'#428bca' as color from sch_events where status = 1";
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select event_name as title,start_date as start,end_date as end,'#428bca' as color from sch_events where status = 1 and class_id ='".$this->session->userdata('class_id')."'";
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	
	
	public function get_event_details(){
		if($this->session->userdata('user_group_id')==1){
			$sql = 'select * from sch_events where status = 1';
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select * from sch_events where status = 1 and class_id ='".$this->session->userdata('class_id')."'";
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function add_event($data){
		$this->db->insert('sch_events',$data);
		return $this->db->insert_id();
	}
}
