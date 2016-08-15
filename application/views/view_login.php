<!-- Formulir Login Siswa -->
<html>
  <body>
    <!-- Panggil form masuk agar dapat memeriksa inputan -->
    <?php echo form_open('login/masuk'); ?>
    <div class="container">
      <div class="row">
        <div class = "column column-offset-50">
          <h2>Login Pengguna</h2>
        </div>
      </div>
      <div class="row">
        <div class="column column-25 column-offset-25">
          <img height="150" width="150" src="/elementaryenglish/assets/gambar/user_icon.png";>
        </div>
        <div class="column column-25">
              <!-- Input NIS -->
              <input type="text" name="in_username"
              placeholder="Nomor Induk Siswa"/>
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
