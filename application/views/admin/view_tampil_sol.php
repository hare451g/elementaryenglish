<?php
  if ($this->session->userdata('adm_kd') != null) {
    redirect(base_url().'Admin');
  }
?>
<body>
  <div class="container">
    <div class="row">
      <div class="column">
        <table>

          <tr>
            <th>Index</th>
            <th>Kode Materi</th>
            <th>Isi Soal</th>
            <th>Pilihan A</th>
            <th>Pilihan B</th>
            <th>Pilihan C</th>
            <th>Pilihan D</th>
            <th>Jawaban</th>
            <th></th>
          </tr>

          <?php foreach ($hasil as $row) {?>
            <tr>
              <td><? echo $row->sol_index?></td>
              <td><? echo $row->sol_kd_mat?></td>
              <td><? echo $row->sol_isi ?></td>
              <td><? echo $row->sol_pilA ?></td>
              <td><? echo $row->sol_pilB ?></td>
              <td><? echo $row->sol_pilC ?></td>
              <td><? echo $row->sol_pilD ?></td>
              <td><? echo $row->sol_jawaban ?></td>
              <td>
                <a href="<? echo base_url()."Admin/ubah/soal/".$row->sol_index  ?>">
                  <input type="button" class="button-outline" value="Ubah">
                </a>
                <a href="<? echo base_url()."Admin/hapus/soal/".$row->sol_index  ?>">
                  <input type="button" class="button-outline" value="Hapus">
                </a>
              </td>
            </tr>
            <?php }?>

        </table>
      </div>
    </div>
    <a href="<?echo base_url();?>Admin/"class="button-outline">
      <input class="button-outline" type="button" value="Kembali">
    </a>

    <a href="<?echo base_url().'Admin/bersih/'.$kat?>">
      <input type="button" class="button-outline" value="Bersihkan">
    </a>
  </div>



</body>
