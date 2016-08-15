<?php
  class Materi extends CI_Controller {
    public function index($kelas) {
      if ($kelas == null) {
        redirect('home/tampil');
      }
      $this->load->model('Model_Materi');
      $data['hasil'] = $this->Model_Materi->ambil_mat_tersedia($kelas);
      if ($data['hasil'] == FALSE) {
        redirect('home/tampil');
      }else{
        //Tampilkan view materi===================================================
        $this->load->view('layout/header.php');
        $this->load->view('layout/nav_bar.php');
        $this->load->view('siswa/view_materi_menu', $data);
        $this->load->view('layout/footer.php');
      }
    }

    public function tampil_materi($kode){
      //load model Model_Materi
      $this->load->model('Model_Materi');
      //tampung nilai hasil dari function ambil_materi
      $data['hasil'] = $this->Model_Materi->ambil_materi($kode);
      if ($data['hasil'] == FALSE) {
        redirect('home/tampil');
      }else{
        foreach ($data['hasil'] as $row) {
          $data['mat_kd_mat'] =$row->mat_kd_mat;
          $data['mat_isi'] =$row->mat_isi;
          $data['mat_nama'] =$row->mat_nama;
        }
        //Set variabel array data dengan result set
        //deklarasi lokasi video==================================================
        $src = "/elementaryenglish/assets/videos/".$data['mat_kd_mat'].".mp4";
        //periksa apakah terdapat video atau tidak=================================
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$src) ) {
          echo "file :".$src." ditemukan !";
          $data['loc'] = $src;
        }else {
          echo "file :".$src."tidak ditemukan !";
          $data['loc'] = 'notfound';
        }
        //Tampilkan view materi===================================================
        $this->load->view('layout/header.php');
        $this->load->view('layout/nav_bar.php');
        $this->load->view('siswa/view_materi', $data);
        $this->load->view('layout/footer.php');
      }
    }

  }
?>
