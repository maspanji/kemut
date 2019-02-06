<?php

class Akun_model extends CI_Model {

        public $idAkun;
        public $namaAkun;
        public $tipe;

        public function get_all_akun()
        {
            $query = $this->db->get('akun');
            return $query->result();
        }
        
        public function insert_akun_baru()
        {
            $nama_akun = $this->input->post("nama_akun");
            $tipe = $this->input->post("tipe");
            $q = "INSERT INTO akun(namaAkun,tipe) VALUES(?,?)";
            $this->db->query($q, array($nama_akun,$tipe));
        }
}
