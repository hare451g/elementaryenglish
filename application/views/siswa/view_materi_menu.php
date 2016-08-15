  <div class="container">
  <div class="row">
    <div class="column">
      <?
        foreach ($hasil as $row) {
      ?>
      <ul>
        <li>
          <a href="<?echo base_url(); ?>materi/tampil_materi/<?echo $row->mat_kd_mat?>">
            <? echo $row->mat_nama ?>
          </a>
        </li>
      </ul>
      <?
        }
      ?>
    </div>
  </div>
</div>
