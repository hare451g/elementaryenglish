<?php
class Model_Login extends CI_Model{
  function __construct(){
    $this->load->database();
  }

  function m_Masuk($data){
    $d = $this->db->get_where('siswa',$data);
    return $d->num_rows();
  }

  function m_Masuk_admin($data){
    $d = $this->db->get_where('admin',$data);
    return $d->num_rows();
  }
}
?>
