<?php
  /**
   *
   */
  class Model_Quiz extends CI_Model{
    //load config database
    function __construct(){
      $this->load->database();
    }

    public function ambil_soal($kode){
      if($kode != FALSE) {
        $query = $this->db->get_where('soal', array('sol_kd_mat' => $kode));
        // jika soal belum ada =================================================
        if ($query->num_rows() == 0) {
          return FALSE;
        }
        return $query->result();
      }else{
        return FALSE;
      }
    }
    public function cek_user($nis){
      if($nis != FALSE){
        $query = $this->db->get_where('nilai', array('nil_nis' =>$nis));
        return $query->num_rows();
      }
    }
    public function masukan_nilai($data){
      $this->db->insert('nilai',$data);
    }
  }
?>
