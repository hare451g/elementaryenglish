<body>
  <div class="container">
    <div class="row">
      <div class="column">
        <table>

          <tr>
            <th>Kode Materi</th>
            <th>Judul</th>
            <th>Isi Soal</th>
          </tr>

          <?php foreach ($hasil as $row) {?>
            <tr>

              <td><? echo $row->mat_kd_mat?></td>
              <td><? echo $row->mat_nama?></td>
              <td><? echo $row->mat_isi?></td>
              <td>

                <a href="<? echo base_url()."Admin/ubah/materi/".$row->mat_kd_mat?>">
                  <input type="button" class="button-outline" value="Ubah">
                </a>
                <a href="<? echo base_url()."Admin/hapus/materi/".$row->mat_kd_mat?>">
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
