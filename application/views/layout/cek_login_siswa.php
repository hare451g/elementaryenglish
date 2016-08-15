<?php
  // Periksa apakah sudah ada yang login =======================================
  if ($this->session->userdata('sis_nis') != null)
      redirect(base_url().'profile/'.$this->session->userdata('sis_nis'));
  }
?>
