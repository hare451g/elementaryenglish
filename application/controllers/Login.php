<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Login extends CI_Controller {
    //Load Helper, Model dan library yang akan dipakai ========================
    function __construct(){
      parent::__construct();
      $this->load->helper(array('form','url'));
      $this->load->model('Model_Login');
      $this->load->model('Model_Profile');
      $this->load->library('session');
    }
    //Mencetak halaman login siswa =============================================
    public function index(){
      $this->load->view('layout/header');
      $this->load->view('view_login');
      $this->load->view('layout/footer');
    }
    //Mencetak halaman login admin =============================================
    public function in_adm(){
        $this->load->view('layout/header');
        $this->load->view('admin/view_login_adm');
        $this->load->view('layout/footer');
    }
    //Validasi Login ============================================================
    public function masuk(){
      //Set Data dari formulir ke array data =================================
      $data=array(
        'sis_nis'     => $this->input->post('in_username'),
        'sis_passwd'  => $this->input->post('in_password')
      );
      //Validasi login melalui function m_masuk ==============================
      $cek  = $this->Model_Login->m_Masuk($data);
      if ($cek == 1) {
        $sdata = $this->ambil_session($data['sis_nis']);
        $x = $this->session->set_userdata($sdata);
        session_start();
        redirect('login/sukses/siswa');
      }else{
        echo 'Terjadi kesalahan saat login';
        redirect('login/gagal');
      }
    }

    public function masuk_admin(){
      $data=array(
        'adm_kode'    => $this->input->post('in_username'),
        'adm_passwd'  => $this->input->post('in_password')
      );
      $cek  = $this->Model_Login->m_Masuk_admin($data);
      if ($cek == 1) {
        $sdata = $this->ambil_session_admin($data['adm_kode']);
        $x = $this->session->set_userdata($sdata);
        session_start();
        redirect(base_url().'Admin');
      }else{
        echo 'Terjadi kesalahan saat login';
        redirect('login/gagal');
      }
    }

    public function ambil_session($nis){
      $this->load->model('Model_Profile');
      $rs_model = $this->Model_Profile->ambil_data($nis);
      $data['sis_nis']      = $rs_model['sis_nis'];
      $data['sis_kelas']    = $rs_model['sis_kelas'];
      $data['sis_jk']    = $rs_model['sis_jk'];
      return $data;
    }

    public function ambil_session_admin($kode){
      $this->load->model('Model_Profile');
      $rs_model = $this->Model_Profile->ambil_data_admin($kode);
      $data['adm_kode']      = $rs_model['adm_kode'];
      return $data;
    }

    function sukses($pil){
      if ($pil == 'siswa') {
        $data = array(
          'sis_nis' => $this->session->userdata('sis_nis')
        );
        redirect('home/tampil/');
      }else {
        $data = array(
          'adm_kode' => $this->session->userdata('adm_kode')
        );
        redirect('admin/index');
      }
    }

    function gagal(){
      $this->load->view('layout/header.php');
      $this->load->view('view_login_gagal');
      $this->load->view('layout/footer.php');
    }

    function logout(){
      $this->session->sess_destroy();
      redirect('login');
    }

  }
?>
