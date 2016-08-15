<html>
  <body>
    <div class="container">
      <center>
        <h3>Quiz : <?php echo $nama_mat?></h3>
      </center>
      <?if ($soal_ada) {?>
      <div class="row">
        <!--Untuk Kolom navigasi -->
        <div class="column ">
            <!-- Jika soal sudah ada  -->
            <table>
            <?php
            //ambil function quiz/cek_jawab-------------------------------------
            echo form_open('quiz/cek_jawab/'.$kd_mat);
            // Perulangan ambil soal -------------------------------------------
            $i= 1;
            foreach ($hasil as $row) :
              ?>
              <tr>
                <td>
                  <p>
                    <?php echo $i.". ";
                    echo $row->sol_isi;
                    ?>
                  </p>
                  <br>
                  <input type="radio" name="<?php echo 'jawab'.$i?>" value="a">
                  <?php echo $row->sol_pilA ; ?><br>
                  <input type="radio" name="<?php echo 'jawab'.$i?>" value="b">
                  <?php echo $row->sol_pilB ; ?><br>
                  <input type="radio" name="<?php echo 'jawab'.$i?>" value="c">
                  <?php echo $row->sol_pilC ; ?><br>
                  <input type="radio" name="<?php echo 'jawab'.$i?>" value="d">
                  <?php echo $row->sol_pilD ; ?><br>
                </td>
              </tr>
              <?php
              $i++;
            endforeach;
            ?>
          <!--Tutup perulangan disini :) -->
        </table>
        </div>
      </div>
      <!-- Tombol Submit -->
      <div class="row">
        <div class="column column-offset-80">
            <input type="submit" value="Submit" >
        </div>
      </div>
      <!-- jika soal kosong -->
      <?}else{?>
        <div class="row">
          <div class="column">
            <h3>Soal Belum ada</h3>
            <a href="<?echo base_url().
              'quiz/index/'.
              $this->session->userdata('sis_kelas');
              ?>" class="button"> Kembali
            </a>
          </div>
        </div>
        <?}?>
        <!-- tutup else -->
    </div>
  </body>
<html>
