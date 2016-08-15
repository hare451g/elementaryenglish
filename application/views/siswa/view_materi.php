<html>
<style>
p {
  align-items: center;
  text-align: justify;
}
</style>

  <body>
    <div class="container">
      <div class="row">
        <div class="column">
          <!-- Cetak nama materi -->
          <h3><?echo $mat_nama;?></h3>
          <?if ($loc !== 'notfound') {?>
            <video src="<?echo $loc?>" controls></video>
          <?}?>

          <p><?echo $mat_isi;?></p>

        </div>
      </div>
    </div>
  </body>
<html>
