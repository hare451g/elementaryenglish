<?php
  // Periksa apakah sudah ada yang login =======================================
  if ($this->session->userdata('adm_kd') != null or $this->session->userdata('sis_nis') != null) {
    //Jika admin sudah login ===================================================
    if($this->session->userdata('adm_kd') != null)
      redirect(base_url().'Admin');
      //Jika user sudah login ===================================================
    elseif ($this->session->userdata('sis_nis') != null)
      redirect(base_url().'profile/'.$this->session->userdata('sis_nis'));
  }
?>
