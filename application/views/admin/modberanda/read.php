<div class="alert alert-info">
  <button class="close" data-dismiss="alert">
    <i class="ace-icon fa fa-times"></i>
  </button>
  <?php
  echo'Selamat Datang.. ';
  echo'<b>';echo  $this->session->userdata('nama_admin');echo'</b>';
  echo' pada halaman Administrator, salam semangat dan sukses selalu';
  ?>
</div>
