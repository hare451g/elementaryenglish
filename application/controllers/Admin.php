<?php
  class Admin extends CI_Controller{
    //load model admin----------------------------------------------------------
    function __construct(){
      parent::__construct();
      $this->load->helper(array('form','url'));
      $this->load->library('session');
      $this->load->model('Model_Admin');
      $this->load->helper ('url');
    }
    //tampilkan menu utama admin -----------------------------------------------
    function index(){
      $this->load->view('layout/header');
      $this->load->view('admin/view_menu_admin');
      $this->load->view('layout/footer');
    }

    //ambil data dari form dan set kedalam array sesuai dengan skema tabe ------
    public function set_data($kat){
      //table jadwal_jaga-------------------------------------------------------
      if ($kat == 'siswa') {
        $data = array(
          'sis_nama_dpn'  => $this->input->post('in_nama_dpn'),
          'sis_nama_bkg'  => $this->input->post('in_nama_bkg'),
          'sis_tgl_lahir' => $this->input->post('in_tgl_lahir'),
          'sis_jk'        => $this->input->post('in_jk'),
          'sis_kelas'     => $this->input->post('in_kelas'),
          'sis_passwd'    => $this->input->post('in_passwd')
        );
        //set format tanggal lahir---------------------------------------------
        $data['sis_tgl_lahir']= date('Y-m-d',strtotime($data['sis_tgl_lahir']));
        //generate nomor induk siswa--------------------------------------------
        $data['sis_nis']= 'S'.$data['sis_kelas'].
                          $this->input->post('in_nis');
        //table asisten---------------------------------------------------------
      }elseif ($kat == 'nilai') {
        $data = array(
          'nil_nis'   =>  $this->input->post('in_nis'),
          'nil_kelas' =>  $this->input->post('in_kelas'),
          'nil_quiz'  =>  $this->input->post('in_quiz'),
          'nil_kd_mat'=>  $this->input->post('in_kd_mat')
        );
        //table mahasiswa-------------------------------------------------------
      }elseif ($kat == 'materi') {
        $data = array(
          'mat_kd_mat' =>  $this->input->post('in_kd_mat'),
          'mat_nama'   =>  $this->input->post('in_nama'),
          'mat_isi'    =>  $this->input->post('in_isi'),
          'mat_kelas'  =>  $this->input->post('in_kelas')
        );
        //table praktikum-----------------------------------------------------
      }elseif ($kat == 'soal') {
        $data = array(
          'sol_index'   => $nis,
          'sol_kd_mat'  => $this->input->post('in_sol_kd_mat'),
          'sol_isi'     => $this->input->post('in_sol_isi'),
          'sol_pilA'    => $this->input->post('in_pilA'),
          'sol_pilB'    => $this->input->post('in_pilB'),
          'sol_pilC'    => $this->input->post('in_pilC'),
          'sol_pilD'    => $this->input->post('in_pilD'),
          'sol_jawaban' => $this->input->post('in_jawaban')
        );
      }
      return $data;
    }

    //Cetak entry---------------------------------------------------------------
    public function tampil($kat){
      $data['hasil']  = $this->Model_Admin->tampil($kat);
      $data['kat'  ]  = $kat;

      $this->load->view('layout/header');
      if ($kat == 'siswa')
        $this->load->view('admin/view_tampil_sis',$data);
      elseif ($kat == 'materi')
        $this->load->view('admin/view_tampil_mat',$data);
      elseif ($kat == 'soal')
        $this->load->view('admin/view_tampil_sol',$data);
      $this->load->view('layout/footer');
    }

    //Tambah Entry baru=========================================================
    public function jadi_tambah($kat){
      $data = $this->set_data($kat);
      $this->Model_Admin->tambah($kat,$data);

      redirect(base_url().'Admin/');
    }

    //tampil form tambah -------------------------------------------------------
    public function tambah($kat){
      $this->load->view('layout/header');
      $data['kat'] = $kat;
      $data['tmb'] = 1;
      $data['hasil'] ="none";
      $data['actions'] = $this->cek_tambah(1,$kat,$data['hasil']);

      if ($kat == 'siswa')
        $this->load->view('admin/view_form_sis',$data);
      elseif ($kat == 'materi')
        $this->load->view('admin/view_form_mat',$data);
      elseif ($kat == 'soal')
        $this->load->view('admin/view_form_sol',$data);
      $this->load->view('layout/footer');
    }
    //==========================================================================

    //periksa tambah atau ubah soal =============================================
    public function cek_tambah($tmb,$kat,$hasil){
      //cek apakah ubah atau tambah
      if ($tmb == 1) {
        return base_url().'Admin/jadi_tambah/'.$kat;
      }elseif ($tmb == 0) {
        if ($kat == 'siswa') {
          foreach ($hasil as $row) {
            $actions = base_url().'Admin/jadi_ubah/'.$kat.'/'.$row->sis_nis;
          }
        }elseif ($kat == 'materi') {
          foreach ($hasil as $row) {
            $actions = base_url().'Admin/jadi_ubah/'.$kat.'/'.$row->mat_kd_mat;
          }
        }elseif ($kat == 'soal') {
          foreach ($hasil as $row) {
            $actions = base_url().'Admin/jadi_ubah/'.$kat.'/'.$row->sol_index;
          }
        }
        return $actions;
      }
    }

    //Update Entry==============================================================
    public function jadi_ubah($kat,$nis){
      $data = $this->set_data($kat);
      $this->Model_Admin->ubah($kat,$nis,$data);

      redirect(base_url().'Admin/');
    }

    //tampil form ubah----------------------------------------------------------
    public function ubah($kat,$nis){
      $data['hasil']= $this->Model_Admin->tampil_satu($kat,$nis);
      $data['kat']  = $kat;
      $data['nis']  = $nis;

      $data['actions'] = $this->cek_tambah(0,$kat,$data['hasil']);

      $this->load->view('layout/header');
      if ($kat == 'siswa')
        $this->load->view('admin/view_form_sis',$data);
      elseif ($kat == 'materi')
        $this->load->view('admin/view_form_mat',$data);
      elseif ($kat == 'soal')
        $this->load->view('admin/view_form_sol',$data);
      $this->load->view('layout/footer');
    }
    //==========================================================================

    //delete entry==============================================================
    public function jadi_hapus($kat,$nis){
      $this->Model_Admin->hapus($kat, $nis);
      redirect( base_url().'/Admin' );
    }

    //tampil form hapus --------------------------------------------------------
    public function hapus($kat, $nis){
      $data['hasil'] = $this->Model_Admin->tampil_satu($kat,$nis);
      $data['kat'] = $kat;
      $data['nis'] = $nis;

      $this->load->view('layout/header');
      $this->load->view('admin/view_hapus',$data);
      $this->load->view('layout/footer');
    }

    //hapus seluruh isi dari tabel ---------------------------------------------
    public function bersih($kat){
      $this->Model_Admin->bersih($kat);

      redirect(base_url().'/Admin');
    }
    //==========================================================================

  }

?>
