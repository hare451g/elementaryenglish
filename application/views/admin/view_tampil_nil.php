<body>

  <div class="container">

    <div class="row">
      <div class="column">

        <table>

          <tr>
            <th>NIS         </th>
            <th>kelas       </th>
            <th>Nilai Quiz  </th>
            <th>Kode Materi </th>
          </tr>

          <?php foreach ($hasil as $row) {?>
            <tr>

              <td><? echo $row->nil_nis?></td>
              <td><? echo $row->nil_kelas?></td>
              <td><? echo $row->nil_quiz?></td>
              <td><? echo $row->nil_kd_mat?></td>
            </tr>

            <tr>
                <a href="<? echo base_url()."Admin/ubah/jadwal_jaga/".$row->kode_matkul?>">
                  <input type="button" class="button-outline" value="Ubah">
                </a>

                <a href="<? echo base_url()."Admin/hapus/jadwal_jaga/".$row->kode_matkul?>">
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
