<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function index() {
        $this->load->view("proto/head");
        $this->load->view("laporan");
        $this->load->view("proto/foot");
    }
    
    function tampil_laporan_bulanan(){
        $this->load->model("laporan_model");
        $data['rekap']=$this->laporan_model->rekap_transaksi_bulanan();
        $this->load->view("tampil_laporan_bulanan",$data);
    }

}
