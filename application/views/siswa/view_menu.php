<?php
 if ($this->session->userdata('sis_nis') == null) {
   redirect('login');
 }

  if($this->session->userdata('sis_jk') == 'L'){
    $gmb = 'avalk.png';
  }else{
    $gmb = 'avacw.png';
  }

?>
<style>
  td{
    border-bottom: 0rem;
    padding: 1.2rem 1.5rem;
    text-align: center;
  }
</style>

<div class="container">
  <div class="row">
    <div class="column column-25 column-offset-33">
      <table border="0px">
        <tr>
          <td>
            <a href="<?php echo base_url() .'profile/index/'.
            $this->session->userdata('sis_nis');?>">
              <img height="75px" width="75px"
              src="/elementaryenglish/assets/gambar/<?echo $gmb?>">
              <br>
            </a>Profile
          </td>
          <td>
            <a href="<?php echo base_url() .'materi/index/'.
            $this->session->userdata('sis_kelas');?>">
              <img height="75px" width="75px"
              src="/elementaryenglish/assets/gambar/book.png">
              <br>
            </a>Materi
          </td>
        </tr>
        <tr>
          <td>
            <a href="<?php echo base_url(). 'quiz/index/'.
            $this->session->userdata('sis_kelas');?>">
              <img height="75px" width="75px"
              src="/elementaryenglish/assets/gambar/edit.png">
              <br>
            </a>Quiz
          </td>
          <td>
            <a href="<?php echo base_url() .'hasil/index/'.
            $this->session->userdata('sis_kelas');?>">
              <img height="75px" width="75px"
              src="/elementaryenglish/assets/gambar/printer.png">
              <br>
            </a>Hasil
          </td>
        </tr>

        <td colspan="2">
          <a href="<?php echo base_url() .'login/logout'?>">
            <img height="75px" width="75px"
            src="/elementaryenglish/assets/gambar/logout.png">
            <br>
          </a>Logout
        </td>
      </tr>
      </table>
    </div>
  </div>
</div>
