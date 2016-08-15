<html>
  <body>
    <div class="container">
      <div class="row">
        <!--Untuk Kolom navigasi -->
        <div class="column column-20">
          <?php $this->load->view('layout/nav_list')?>
        </div>
        <div class="column column-70">
          <!--TODO :
              Masukan identitas disini melalui hasil query sql
          -->
          <h3>Nilai Kelas <?echo $this->session->userdata('sis_kelas');?></h3>
          <table>
            <tr>
              <th>NIS</th>
              <th>Nama Materi</th>
              <th>Nilai Quiz</th>
            </tr>
            <?

              foreach ($hasil as $row):
            ?>
            <tr>
              <td><?echo $row->nil_nis;?></td>
              <td><?echo $row->mat_nama?></td>
              <td><?echo $row->nil_quiz;?></td>
            </tr>
            <?
              endforeach;
            ?>
          </table>
        </div>
      </div>
    </div>
  </body>
<html>
