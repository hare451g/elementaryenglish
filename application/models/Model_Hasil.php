<?
/**
 *
 */
class Model_Hasil extends CI_Model{

  function __construct(){
    # code...
    $this->load->database();

  }
  public function ambil_nilai($kelas){
    if($kelas != FALSE) {
      $query = $this->db->query(
          "SELECT nilai.nil_nis, materi.mat_nama,nilai.nil_quiz
          FROM materi, nilai
          WHERE materi.mat_kd_mat = nilai.nil_kd_mat;
        ");


      return $query->result();
    }else{
      return FALSE;
    }
  }
}

?>
