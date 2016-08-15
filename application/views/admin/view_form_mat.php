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
    <center><h2>Formulir Materi </h2></center>
    <div class="row">
      <div class="column column-50 column-offset-25">
        <form action="<?php echo $actions ?>"
          method="post">

          <table>

            <tr>
              <td>Kode Materi</td>
              <td> <input type="text"
                name="in_kd_mat"
                maxlength="7">
              </td>
            </tr>

            <tr>
              <td>Isi Materi </td>
              <td> <textarea name="in_isi"></textarea></td>
            </tr>

            <tr>
              <td>Judul Materi</td>
              <td> <input type="text" name="in_nama" maxlength="25"> </td>
            </tr>

            <tr>
              <td>Kelas</td>
              <td>
                <select name="in_kelas">
                  <option value="3A">3A</option>
                  <option value="3B">3B</option>
                  <option value="4A">4A</option>
                  <option value="4B">4B</option>
                  <option value="5A">5A</option>
                  <option value="5B">5B</option>
                </select>
              </td>
            </tr>

            <tr>
              <td></td>
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
