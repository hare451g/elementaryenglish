<body>

  <div class="container">

    <div class="row">
      <div class="column">

        <table>

          <tr>
            <th>NIS          </th>
            <th>Nama Depan   </th>
            <th>Nama Belakang</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Password     </th>
          </tr>

          <?php foreach ($hasil as $row) {?>
            <tr>
              <td><? echo $row->sis_nis?></td>
              <td><? echo $row->sis_nama_dpn?></td>
              <td><? echo $row->sis_nama_bkg?></td>
              <td><? echo $row->sis_tgl_lahir?></td>
              <td><? echo $row->sis_kelas?></td>
              <td><? echo $row->sis_passwd?></td>

              <td>
                <a href="<? echo base_url()."Admin/ubah/siswa/".$row->sis_nis?>">
                  <input type="button" class="button-outline" value="Ubah">
                </a>
                <a href="<? echo base_url()."Admin/hapus/siswa/".$row->sis_nis?>">
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
