<?php

class Transaksi_model extends CI_Model {

    public function insert_transaksi_baru() {
        $tanggal = $this->input->post("tanggal");
        $ket = $this->input->post("keterangan");
        $jum = $this->input->post("jumlah");
        $akun = $this->input->post("akun");
        $q = "INSERT INTO transaksi(tanggal,keterangan,jumlah,Akun_idAkun,User_idUser) "
                . "VALUES(?,?,?,?,?)";
        
        //id user dimasukkan dengan data 1 untuk development
        $this->db->query($q,array($tanggal,$ket,$jum,$akun,1));
    }

}
