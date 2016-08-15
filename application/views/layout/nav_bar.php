<html>
  <style>
    .nav{
      align-content: center;
    }
    .nav ul li {
      display: inline;
    }
    .nav a{
      padding: 3%;
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="column">
        <div class="nav">
          <center>
            <ul>
              <li>
                <a href="<?php echo base_url().'home/tampil'; ?>"
                  >Home</a>
              </li>
              <li>
                <a href="<?php echo base_url() .'materi/index/'.
                $this->session->userdata('sis_kelas');?>">Materi</a>
              </li>

              <li>
                <a href="<?php echo base_url(). 'quiz/index/'.
                $this->session->userdata('sis_kelas');?>">Quiz</a>
              </li>

              <li>
                <a href="<?php echo base_url() .'profile/index/'.
                $this->session->userdata('sis_nis');?>">Profile</a>
              </li>

              <li>
                <a href="<?php echo base_url() .'hasil/index/'.
                $this->session->userdata('sis_kelas');?>">Hasil Ujian</a>
              </li>

              <li>
                <a href="<?php echo base_url() ; ?>login/logout">Keluar</a>
              </li>
            </ul>
          </center>
        </div>
      </div>
    </div>
  </div>
</html>
