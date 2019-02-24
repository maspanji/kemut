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

    function tampil_laporan_bulanan() {
        $this->load->model("laporan_model");
        $this->load->helper("numtorupiah");
        $this->load->view("proto/head");
        $rekap = $this->laporan_model->rekap_transaksi_bulanan();

        $total_debet = 0;
        $total_kredit = 0;
        $tabel_debet = "";
        $tabel_kredit = "";

        foreach ($rekap as $row) {
            $jumlah = $row->jumlah;
            $tipe = $row->tipe;
            if ($row->tipe == "debet") {
                $tabel_debet .= "<tr><td>" . $row->nama_akun . "</td><td>" . numtorp($row->jumlah) . "</td></tr>";
                $total_debet += $jumlah;
            } elseif ($row->tipe == "kredit") {
                $tabel_kredit .= "<tr><td>" . $row->nama_akun . "</td><td>" . numtorp($row->jumlah) . "</td></tr>";
                $total_kredit += $jumlah;
            }
        }
        $data['total_debet'] = numtorp($total_debet);
        $data['total_kredit'] = numtorp($total_kredit);
        $data['tabel_debet'] = $tabel_debet;
        $data['tabel_kredit'] = $tabel_kredit;
        
        $this->load->view("tampil_laporan_bulanan", $data);
        $this->load->view("proto/foot");
    }
    

}
