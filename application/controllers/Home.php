<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	//Cetak Menu Login Utama =====================================================
	public function index(){
		$this->load->view('layout/header.php');
		$this->load->view('view_home.php');
		$this->load->view('layout/footer.php');
   }
	 //Cetak Halaman Tentang =====================================================
	 public function tentang(){
 		$this->load->view('layout/header.php');
 		$this->load->view('view_tentang.php');
 		$this->load->view('layout/footer.php');
	 }
	 //Cetak Halaman Tampilan Menu ===============================================
	 public function tampil(){
 		$this->load->view('layout/header.php');
 		$this->load->view('siswa/view_menu.php');
 		$this->load->view('layout/footer.php');
	 }
}
?>
