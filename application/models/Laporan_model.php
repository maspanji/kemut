<?php

class Laporan_model extends CI_Model {

    public function rekap_transaksi_bulanan() {
        $bulan_laporan = $this->input->post('bulan');
        $tahun_laporan = $this->input->post('tahun');
        $query = "SELECT akun.namaAkun AS nama_akun, sum(transaksi.jumlah) AS jumlah, akun.tipe "
                . "FROM transaksi, akun "
                . "WHERE akun.idAkun=transaksi.Akun_idAkun "
                . "AND MONTH(transaksi.tanggal)=? "
                . "AND YEAR(transaksi.tanggal)=? "
                . "GROUP BY akun.namaAkun ORDER BY akun.tipe";
        $res = $this->db->query($query,array($bulan_laporan,$tahun_laporan));
        return $res->result();
    }

}
