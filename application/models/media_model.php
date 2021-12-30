<?php

class Media_model extends CI_Model {

	public function get_media($type){
		if($this->session->userdata('user_group_id')==1){
			$sql = "select * from sch_media where status = 1 and type like '$type'";
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select * from sch_media where status = 1 and type like '$type' and class_id=".$this->session->userdata('class_id');
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function get_media_class($type,$class_id){
		if($this->session->userdata('user_group_id')==1){
			$sql = "select * from sch_media where status = 1 and type like '$type' and class_id=".$class_id;
		}elseif($this->session->userdata('user_group_id')==2){
			$sql = "select * from sch_media where status = 1 and type like '$type' and class_id=".$this->session->userdata('class_id');
		}
		$query = $this->db->query($sql);
		return $query->result();
	}
    
	public function add_media($data){
		$this->db->insert('sch_media',$data);
		return $this->db->insert_id();
	}
	
    
}
