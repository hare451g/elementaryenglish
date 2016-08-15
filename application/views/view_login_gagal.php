<html>
<?php
  if(isset($sis_nis)){
    redirect('profile/tampil/'.$data['sis_nis']);
  }
?>
  <body>
    <div class="container">
      <div class="row">
        <div class="column">
          <h3> Login Gagal !  </h3>
          <p>Periksa kembali Username dan password ! </p><br>
          <a href="<?php echo base_url();?>home">Kembali ke Home</a>

        </div>
    </div>
  </body>
</html>
