<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->model("akun_model");
        }
        
	public function index()
	{
            $this->load->view("proto/head");
            $data['all_akun'] = $this->akun_model->get_all_akun();
            $this->load->view("kelola_akun",$data);
            $this->load->view("proto/foot");
        }
        
        
        public function insert_akun_baru()
        {
            $this->akun_model->insert_akun_baru();
        }
}
