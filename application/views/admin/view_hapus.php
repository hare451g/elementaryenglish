<?php
  if ($this->session->userdata('adm_kd') != null) {
    redirect(base_url().'Admin');
  }
?>
<body>
  <div class="container">
    <div class="row">
      <?foreach ($hasil as $row) {?>
      <div class="column">
        <h3>Konfirmasi penghapusan data </h3>
        <p>Apakah anda yakin akan menghapus data : </p>
        <p><?
          if($kat == 'siswa'){
            echo 'NIS : '.$row->sis_nis.'<br>';
            echo 'Nama Depan    : '.$row->sis_nama_dpn.'<br>';
            echo 'Nama Belakang : '.$row->sis_nama_bkg.'<br>';
          }
          elseif ($kat == 'materi'){
            echo 'Kode Materi :'.$row->mat_kd_mat.'<br>';
            echo 'Nama Materi :'.$row->mat_nama.'<br>';
          }
          elseif ($kat == 'soal'){
            echo 'Kode Materi'.$row->sol_kd_mat;
          }
          elseif ($kat == 'nilai'){
            echo 'NIS'.$row->nil_nis;
          }
        ?></p>

      </div>
      <?}?>
    </div>
    <a href="<?echo base_url();?>Admin/">
      <input class="button-outline" type="button" value="Tidak">
    </a>
    <a href="<?echo base_url().'Admin/jadi_hapus/'.$kat.'/'.$nis ?>">
      <input class="button" type="button" value="Ya">
    </a>
  </div>

</body>
