<html>
  <body>
    <div class="container">
      <div class="row">
        <!--Untuk Kolom navigasi -->
        <div class="column column-20">
          <?php $this->load->view('layout/nav_list.php');?>
        </div>
          <?php
            if ($sis_jk == 'L') {
              $gmb = "/elementaryenglish/assets/gambar/ava.png";
            }else{
              $gmb = "/elementaryenglish/assets/gambar/ava1.png";
            }
          ?>
        <div class="column column-60">
          <!--Cetak profile siswa-->
          <h2>Profile <?echo $sis_nama_dpn;?></h2>
          <h3>Identitas Siswa </h3>
          <table>
            <tr>
              <td rowspan ="5">
                <center>
                  <img src="<?php echo $gmb?>" \>
                </center>
              </td>
              <td><b>NIS</b></td>
              <td><?echo $sis_nis; ?></td>
            </tr>
            <tr>
              <td><b>Nama Depan</b></td>
              <td><? echo $sis_nama_dpn; ?></td>
            </tr>
            <tr>
              <td><b>Nama Belakang</b></td>
              <td><? echo $sis_nama_bkg; ?></td>
            </tr>
            <tr>
              <td><b>Kelas</b></td>
              <td><? echo $sis_kelas;?></td>
            </tr>
            <tr>
              <td><b>Tanggal Lahir</b></td>
              <td><? echo $sis_tgl_lahir; ?></td>
            </tr>
          </table>
          <!--TODO:
              Isi dari Prestasi siswa :
              Kelas yang diikuti, Jumlah nilai Q1,Q2,Q3, Nilai rata - rata
          -->
          <h3>Prestasi Siswa</h3>
          <table>
            <!--TODO :
                Berikan perulangan untuk mencetak semua kelas yang
                diikuti oleh siswa.
            -->
            <? foreach ($hasil as $row) { ?>
            <tr>
              <td>Nama Materi</td>
              <td><? echo $row->mat_nama ?></td>
            </tr>
            <tr>
              <td>Total Nilai</td>
              <td><? echo $row->nil_quiz?></td>
            </tr>
            <?}?>
          </table>
        </div>
      </div>
    </div>
  </body>
<html>
