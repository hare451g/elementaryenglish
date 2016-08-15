<?php
class Hasil extends CI_Controller{
  public function index($kelas) {
    //load model hasil=========================================================
    $this->load->model('Model_Hasil');
    $data['hasil'] = $this->Model_Hasil->ambil_nilai($kelas);
    // set hasil dari function Model_Materi
    // load tampilan view
    $this->load->view('layout/header.php');
    $this->load->view('siswa/view_hasil', $data);
    $this->load->view('layout/footer.php');
  }
}
?>
