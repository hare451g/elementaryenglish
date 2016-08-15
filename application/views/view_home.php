<html>
<?php
  if(isset($sis_nis)){
    redirect('home/tampilmenu/'.$this->session->userdata('sis_jk'));
  }elseif(isset($adm_kd)){
    redirect(base_url().'Admin');
  }
?>
  <head><link href="assets/miligram/dist/milligram.css"
    type="text/css" rel="stylesheet"></head>
  <body>
    <div class="container">
      <center>
        <div class="row">
          <p>E-Learning Bahasa Inggris untuk Sekolah Dasar</p>
        </div>

        <div class="row">
          <div class="column">
            <a href="<?php echo base_url() .'login/';?>">
              <img src="/elementaryenglish/assets/gambar/user_icon.png"></a>
              <h4>Login Sebagai Siswa</h4>
          </div>

          <div class="column">
            <a href="<?php echo base_url().'login/in_adm'?>">
              <img src="/elementaryenglish/assets/gambar/admin_icon.png"></a>
              <h4>Login Sebagai Admin</h4>
          </div>
        </div>

      </center>
    </div>
  </body>
</html>
