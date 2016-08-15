<html>
<?php
  if ($this->session->userdata('adm_kode') != null) {
    redirect(base_url().'Admin');
  }
?>
  <body>
    <?php
      echo form_open('login/masuk_admin');
    ?>
    <div class="container">
      <div class="row">
        <div class = "column column-offset-50">
          <h2>Login Admin</h2>
        </div>
      </div>

      <div class="row">
        <div class="column column-25 column-offset-25">
          <img height="150" width="150"
          src="/elementaryenglish/assets/gambar/admin_icon.png";>
        </div>
        <div class="column column-25">
              <!-- Input NIS / Kode Admin -->
              <input type="text" name="in_username"
              placeholder="Kode Admin"/>
              <br>
              <!-- Input Password -->
              <input type="password" name="in_password"
              placeholder="Password"/>
              <br>
              <!-- Button Submit -->
              <button type="submit">Login</button>
        </div>
      </div>
    </div>
  </body>
<html>
