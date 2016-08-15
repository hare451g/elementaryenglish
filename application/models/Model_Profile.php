<?
  class Model_Profile extends CI_Model{
    //load config database
    function __construct(){
      $this->load->database();
    }

    public function ambil_data($kode){
      if($kode != FALSE) {
        $query = $this->db->get_where('siswa', array('sis_nis' => $kode));
        return $query->row_array();
      }else{
        return FALSE;
      }
    }
    public function ambil_data_admin($kode){
      if($kode != FALSE) {
        $query = $this->db->get_where('admin', array('adm_kode' => $kode));
        return $query->row_array();
      }else{
        return FALSE;
      }
    }
    public function ambil_prestasi($kode){
      if($kode != FALSE) {
        $query = $this->db->query(
        "SELECT materi.mat_nama, nilai.nil_quiz
        FROM materi, nilai, siswa
        WHERE nilai.nil_kd_mat = materi.mat_kd_mat
        AND siswa.sis_nis = nilai.nil_nis
        ");

        return $query->result();
      }else{
        return FALSE;
      }
    }
  }
?>
