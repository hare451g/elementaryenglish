<?php
  if ($this->session->userdata('adm_kode') == null) {
    redirect(base_url().'login/in_adm');
  }
?>
<body>
  <div class='container'>
  <center><h2>Menu Admin</h2></center>
    <div class='row'>
      <div class='column column-25 column-offset-25'>
        <h3>Tambah Data</h3>
        <ul>
          <li>
            <a href='<?echo base_url().'Admin/tambah/siswa'?>'>Tambah Data Siswa</a>
          </li>
          <li>
            <a href='<?echo base_url().'Admin/tambah/materi'?>'>Tambah Data Materi</a>
          </li>
          <li>
            <a href='<?echo base_url().'Admin/tambah/soal'?>'>Tambah Data Soal</a>
          </li>
        </ul>
      </div>
      <div class='column column-25'>
        <h3>Tampil Data</h3>
        <ul>
          <li>
            <a href='<?echo base_url().'Admin/tampil/siswa'?>'>Tampil Data Siswa</a>
          </li>
          <li>
            <a href='<?echo base_url().'Admin/tampil/materi'?>'>Tampil Data Materi</a>
          </li>
          <li>
            <a href='<?echo base_url().'Admin/tampil/soal'?>'>Tampil Data Soal</a>
          </li>
          <li>
            <a href='<?echo base_url().'Admin/tampil/nilai'?>'>Tampil Data Nilai</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="column column-offset-33 column-33">
        <a href='<?echo base_url().'login/logout'?>'>Logout</a>
      </div>
    </div>
  </div>
</body>
