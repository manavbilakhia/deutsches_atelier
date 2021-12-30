<?php

class Loginmodel extends CI_Model {

    //Need to Change the below Query
    public function login_valid($username, $password) {
        $q = $this->db->where(['username' => $username, 'password' => $password,'status' => 1])
                ->get('sch_users');
        if ($q->num_rows()) {
            return $q->row()->user_id;
        } else {
            return FALSE;
        }
    }

    public function user_details($user_id) {
        $query = $this->db->query("SELECT user_id, fullname,class_id,group_id,level, groups,username FROM sch_users where user_id = $user_id;");

        return $query->row();
    }
/***************************************************************************************************
#*  Function Name  	: validate_user()
#*  Description    	: to fetch the details of valid user
#*  Author Name    	: Shailesh
#*  Function ID         : 3
#*  Date		: 11 / 09 / 2017
#****************************************************************************************************/ 
    public function validate_user($field, $value) {
        $q = $this->db->where(["$field" => "$value","status" => 1])
                ->get('sch_users');
        if ($q->num_rows()) {
            return $q->row();
        } else {
            return FALSE;
        }
    }
/***************************************************************************************************
#*  Function Name  	: update_password()
#*  Description    	: to update new password with existing
#*  Author Name    	: Shailesh
#*  Function ID         : 4
#*  Date		: 12 / 09 / 2017
#****************************************************************************************************/ 
    public function update_password($userid, $password) {
        $this->db->where(['user_id' => $userid]);
        if ($this->db->update('sch_users',['password' => $password])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
        
        
}
