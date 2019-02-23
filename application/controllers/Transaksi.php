<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("transaksi_model");
    }

    public function index() {
        $this->load->model("akun_model");
        $this->load->view("proto/head");
        $data["all_akun"] = $this->akun_model->get_all_akun();
        $this->load->view("transaksi",$data);
        $this->load->view("proto/foot");
    }
    
    public function insert_transaksi_baru(){
        $this->transaksi_model->insert_transaksi_baru();
    }
    
    public function kelola_transaksi(){
        $this->load->view("proto/head");
        $this->load->view("kelola_transaksi");
        $this->load->view("proto/foot");
    }
    
    public function tampil_transaksi(){
        $this->load->view("tampil_transaksi");
    }

}
