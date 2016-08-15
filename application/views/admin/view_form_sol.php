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
    <center><h2> Input Jadwal Jaga </h2></center>
    <div class="row">
      <div class="column column-50 column-offset-25">
        <form action="<?php echo $actions;?>" method="post">

          <table>

            <tr>
              <td>Kode Materi</td>
              <td> <input type="text" name="in_materi" maxlength="7"> </td>
            </tr>

            <tr>
              <td>Isi Soal</td>
              <td> <textarea name="in_isi" maxlength="255"></textarea></td>
            </tr>

            <tr>
              <td>Pilihan A : </td>
              <td> <textarea rows="8" cols="40" name="in_pilA" maxlength="255"></textarea></td>
            </tr>

            <tr>
              <td>Pilihan B : </td>
              <td> <textarea rows="8" cols="40" name="in_pilB" maxlength="255"></textarea></td>
            </tr>

            <tr>
              <td>Pilihan C : </td>
              <td> <textarea rows="8" cols="40" name="in_pilC" maxlength="255"></textarea></td>
            </tr>

            <tr>
              <td>Pilihan D : </td>
              <td> <textarea rows="8" cols="40" name="in_pilD" maxlength="255"></textarea></td>
            </tr>

            <tr>
              <td>Jawaban</td>
              <td>
                <select name="in_jawaban">
                  <option value="none">Pilih Jawaban</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                </select>
              </td>
            </tr>
          </table>

        </form>

      </div>
    </div>
  </div>
</body>
