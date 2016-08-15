<?
  class Quiz extends CI_Controller {
    //cetak menu
    public function index($kelas){
      // Load model materi------------------------------------------------------
      $this->load->model('Model_Materi');
      //eksekusi function ambil_materi------------------------------------------
      $data['hasil'] =$this->Model_Materi->ambil_mat_tersedia($kelas);
      $this->load->view('layout/header');
      $this->load->view('layout/nav_bar.php');
      $this->load->view('siswa/view_quiz_menu',$data);
      $this->load->view('layout/footer');
    }

    //mulai quiz===============================================================
    public function mulai($kode) {
      if ($this->cek_absen($kode)){
        $this->load->view('layout/header');
        $this->load->view('siswa/view_quiz_sudah');
        $this->load->view('layout/footer');
      }else{
        //load model materi-----------------------------------------------------
        $this->load->model('Model_Materi');
        //ambil data kelas------------------------------------------------------
        $kelas = $this->session->userdata('sis_kelas');
        //ambil data kode mata pelajaran---------------------------------------
        $rs = $this->Model_Materi->ambil_mat_tersedia($kelas);
        foreach ($rs as $row) {
          $data['kd_mat']   = $row->mat_kd_mat;
          $data['nama_mat'] = $row->mat_nama;
        }
        // Load model soal------------------------------------------------------
        $this->load->model('Model_Quiz');
        //eksekusi function ambil_soal=-----------------------------------------
        $data['hasil'] =$this->Model_Quiz->ambil_soal($kode);
        // Periksa apakah soal sudah ada----------------------------------------
        if ($data['hasil'] == FALSE) {
          $data['soal_ada'] = FALSE;
        }
        // load tampilan view---------------------------------------------------
        $this->load->view('layout/header.php');
        $this->load->view('siswa/view_quiz', $data);
        $this->load->view('layout/footer.php');
      }
    }

    //cek sudah mengerjakan sebelum mulai=======================================
    public function cek_absen($kode){

      $this->load->model('Model_Quiz');
      $nis = $this->session->userdata('sis_nis');
      $cek = $this->Model_Quiz->cek_user($nis);

      if ($cek == 1) {
        return TRUE;
      }else{
        return FALSE;
      }
    }
//
    //cek jawaban===============================================================
    public function cek_jawab($kode){
      $this->load->model('Model_Quiz');
      //exec query
      $hasil = $this->Model_Quiz->ambil_soal($kode);

      // definisi variabel iterasi dan nilai sementara--------------------------
      $i      = 1;
      $tNilai = 0;

      //perulangan untuk periksa jawaban----------------------------------------
      foreach ($hasil as $row ) {
        if (!isset($_POST['jawab'.$i])) {
          $usr_jwb = 'e';
        }else{
          $usr_jwb = $_POST['jawab'.$i];
        }

        //cocokan jawaban dari user ke database---------------------------------
        if ($usr_jwb == strtolower($row->sol_jawaban)) {
          $tNilai++;
        }
        $i++;
      }

      //set array untuk di insert-----------------------------------------------
      $data = array(
        'nil_nis'   => $this->session->userdata('sis_nis') ,
        'nil_quiz'  => $tNilai,
        'nil_kd_mat'=> $kode
      );

      //insert data ke database-------------------------------------------------
      $this->Model_Quiz->masukan_nilai($data);
      redirect('hasil/index/'.$this->session->userdata('sis_kelas'));
    }
}
?>
