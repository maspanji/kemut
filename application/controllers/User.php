<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
    }
    
    public function index(){
        $this->load->view("proto/head");
        $data['all_user'] = $this->user_model->get_all_user();
        $this->load->view("kelola_user",$data);
        $this->load->view("proto/foot");
    }
    
    public function insert_user_baru(){
        $this->user_model->insert_user_baru();
    }
}