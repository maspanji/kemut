<?php

class User_model extends CI_Model {

    public function insert_user_baru() 
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $fullname = $this->input->post("fullname");
        $q = "INSERT INTO user(username,password,fullname) VALUES(?,?,?)";
        $this->db->query($q, array($username, $password, $fullname));
    }

    public function get_all_user() 
    {
        $query = $this->db->get('user');
        return $query->result();
    }

}
