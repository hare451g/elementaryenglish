<?php
  class Model_Admin extends CI_Model{
    function __construct(){
      $this->load->database();
    }
    //Ambil Kolom ============================================================
    function get_kol($kat){
      if($kat == 'siswa')
        return 'sis_nis';
      elseif ($kat == 'materi')
        return 'mat_kd_mat';
      elseif ($kat == 'soal')
        return 'sol_index';
      elseif ($kat == 'nilai')
        return 'nil_index';
    }
    //Tampilkan tabel =========================================================
    function tampil($tabel){
      $sql = $this->db->get($tabel);
      return $sql->result();
    }

    //Tampilkan satu entry ===================================================
    function tampil_satu($kat,$nis){
      $kol = $this->get_kol($kat);
      $this->db->where($kol, $nis);
      $sql = $this->db->get($kat,1);
      return $sql->result();
    }
    //Tambahkan data =========================================================
    function tambah($kat,$data){
      $kol = $this->get_kol($kat);
      $this->db->insert($kat,$data);
    }
    //Ubah data ===============================================================
    function ubah($kat,$nis,$data){
      $kol = $this->get_kol($kat);
      $this->db->where($kol,$nis);
      $this->db->update($kat,$data);
    }
    //Hapus data ===============================================================
    function hapus($kat,$nis){
      $kol = $this->get_kol($kat);
      $this->db->where($kol, $nis);
      $sql = $this->db->delete($kat);
    }
    //Truncate tabel ============================================================
    function bersih($kat){
      $this->db->truncate($kat);
    }
  }
?>
