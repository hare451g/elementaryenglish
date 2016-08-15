<?php
  class Model_Materi extends CI_Model{
    //load config database======================================================
    function __construct(){
      $this->load->database();
    }
    //Ambil materi dari database================================================
    public function ambil_materi($kode) {
      if($kode != FALSE) {
        $query = $this->db->get_where('materi', array('mat_kd_mat' => $kode));
        return $query->result();
      }else{
        return FALSE;
      }
    }
    //ambil materi yang tersedia pada kelas ====================================
    public function ambil_mat_tersedia($kelas) {
      if($kelas != FALSE) {
        $this->db->like('mat_kelas', substr($kelas, 0,1),'after');
        $query = $this->db->get('materi');
        return $query->result();
      }else{
        return FALSE;
      }
    }
  }
?>
