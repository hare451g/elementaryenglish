<?php

class Profile extends CI_Controller{
  public function index($kode='none'){
    if ($kode == 'none' or $kode !== $this->session->userdata('sis_nis')) {
      redirect(base_url().'home/tampil');
    }else {
      $this->tampil_profile($kode);
    }
  }
  function tampil_profile($kode){
    //load model Model_Materi
    $this->load->model('Model_Profile');
    //tampung nilai hasil dari function ambil_profile
    $rs_model = $this->Model_Profile->ambil_data($kode);
    //Set variabel array data dengan result set
    $data['sis_nis']      = $rs_model['sis_nis'];
    $data['sis_nama_dpn'] = $rs_model['sis_nama_dpn'];
    $data['sis_nama_bkg'] = $rs_model['sis_nama_bkg'];
    $data['sis_tgl_lahir']= $rs_model['sis_tgl_lahir'];
    $data['sis_jk']       = $rs_model['sis_jk'];
    $data['sis_kelas']    = $rs_model['sis_kelas'];

    $data['hasil']        = $this->Model_Profile->ambil_prestasi($kode);

    //Tampilkan views
    $this->load->view('layout/header.php');
    $this->load->view('siswa/view_profile', $data);
    $this->load->view('layout/footer.php');
  }
}

?>
