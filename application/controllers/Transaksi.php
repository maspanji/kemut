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
        $this->load->view("transaksi", $data);
        $this->load->view("proto/foot");
    }

    public function insert_transaksi_baru() {
        $this->transaksi_model->insert_transaksi_baru();
    }

    public function kelola_transaksi() {
        $this->load->view("proto/head");
        $this->load->view("kelola_transaksi");
        $this->load->view("proto/foot");
    }

    public function tampilkan_transaksi() {
        $result = $this->transaksi_model->lihat_transaksi();
        $this->load->helper("numtorupiah");

        $tabel = "";
        foreach ($result as $res) {
            $tabel .= "<tr><td>" . $res->tanggal . "</td>";
            $tabel .= "<td>" . $res->keterangan . "</td>";
            $tabel .= "<td>" . numtorp($res->jumlah) . "</td></tr>";
        }
        $data['tabel'] = $tabel;
        $this->load->view("tampil_transaksi", $data);
    }

}
