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
        $this->db->query($q, array($tanggal, $ket, $jum, $akun, 1));
    }

    /**
     * Melihat transaksi dengan jumlah tertentu
     */
    public function lihat_transaksi() {
        $bulan = $this->input->post("bln");
        $jumlah_transaksi = (int)$this->input->post("jml_trx");
        $tahun = $this->input->post("thn");
        
        $query = "SELECT tanggal, keterangan, jumlah FROM transaksi "
                . "WHERE MONTH(tanggal)=? "
                . "AND YEAR(tanggal)=? "
                . "ORDER BY tanggal DESC LIMIT ?";

        $res = $this->db->query($query, array($bulan, $tahun, $jumlah_transaksi) );
        return $res->result();
    }

}
