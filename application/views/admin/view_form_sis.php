<body>
  <style>
    th,
    td {
      border-bottom: 0rem;
      padding: 1.2rem 1.5rem;
      text-align: left;
    }
  </style>
  <div class="container">
    <center><h2>Formulir Siswa</h2></center>
    <div class="row">
      <div class="column column-50 column-offset-25">
        <form action="<?php echo $actions?>" method="post">
          <table>
            <tr>
              <td>NIS</td>
              <td><input type="text"
                name="in_nis"
                maxlength="2"
                placeholder="No Absen">
              </td>
            </tr>

            <tr>
              <td>Nama Depan</td>
              <td><input type="text"
                name="in_nama_dpn"
                maxlength="25"
                placeholder="Nama Depan">
              </td>
            </tr>

            <tr>
              <td>Nama Belakang</td>
              <td><input
                type="text"
                name="in_nama_bkg"
                maxlength="25"
                placeholder="Nama Belakang">
              </td>
            </tr>

            <tr>
              <td>Tanggal Lahir</td>
              <td><input type="date"
                name="in_tgl_lahir"
                placeholder="dd/mm/yyyy">
              </td>
            </tr>

            <tr>
              <td>Jenis Kelamin</td>
              <td>
                <input name="in_jk" type="radio" value="Laki-Laki">Laki-laki</input>
                <input name="in_jk" type="radio" value="Perempuan">Perempuan</input>
              </td>
            </tr>

            <tr>
              <td>Kelas</td>
              <td>
                <select name="in_kelas">
                  <option value="none">Pilih Kelas</option>
                  <option value="3A">3A</option>
                  <option value="3B">3B</option>
                  <option value="4A">4A</option>
                  <option value="4B">4B</option>
                  <option value="5A">5A</option>
                  <option value="5B">5B</option>
                  <option value="6A">6A</option>
                  <option value="5B">6B</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>Password</td>
              <td><input type="password"
                name="in_passwd"
                maxlength="32"
                placeholder="Password minimal 4 karakter">
              </td>
            </tr>

            <tr><td></td>
              <td><a href="<?echo base_url();?>Admin/"class="button-outline">
                <input class="button-outline" type="button" value="Batal"></a>
                <input type="submit" value="Kirim">
            </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</body>
