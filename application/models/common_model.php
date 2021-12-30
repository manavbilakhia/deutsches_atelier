<?php

class Common_model extends CI_Model {

    public function get_store_name($store_id) {
        $query = $this->db->query("SELECT store_name FROM stores WHERE id = $store_id;");
        return $query->row()->store_name;
    }

}
