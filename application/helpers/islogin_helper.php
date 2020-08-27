<?php
date_default_timezone_set('Asia/Jakarta');
  function IsAdmin(){
      $ci =& get_instance();
      if($ci->session->userdata('IsAdmin')<>1){
          //$ci->session->set_flashdata($ci->config->item('flash_name'), $ci->config->item('flash_login'));
      redirect('auth','refresh');
    }
  }

  function IsAdminLogin(){
      $ci =& get_instance();
      if($ci->session->userdata('IsAdmin') != 1){
          //$ci->session->set_flashdata($ci->config->item('flash_name'), $ci->config->item('flash_login'));
      redirect('beranda_admin','refresh');
    }
  }
  function IsDonatur(){
      $ci =& get_instance();
      if($ci->session->userdata('IsDonatur')<>1){
          //$ci->session->set_flashdata($ci->config->item('flash_name'), $ci->config->item('flash_login'));
      redirect('logindonatur','refresh');
      }
  }

  function UploadImg($file,$dst,$style,$size){
      $date= $style.'_'.date('YmdHis');
      $date= date('YmdHis').'_'.$style;
      //Penjabaran File
      $filename 	= $file['name'];
      $filetype 	= $file['type'];
      $filetmp 	= $file['tmp_name'];
      $fileupload = $dst.$filename;
      //upload ukuran sebenarnya
      move_uploaded_file($filetmp, $fileupload);
      //Identifikasi Gambar
      if ($filetype == 'image/jpeg' || $filetype == 'image/jpg') {
        $src 	= imagecreatefromjpeg($fileupload);
      }elseif ($filetype == 'image/png') {
        $src 	= imagecreatefrompng($fileupload);
      }
        $wsrc = imageSX($src);
        $hsrc = imageSY($src);
        //Set Ukuran Gambar
        $wdst = $size;
        $hdst = ($wdst / $wsrc) * $hsrc;
        //Proses Perubahan Ukuran
        $filecreate = imagecreatetruecolor($wdst, $hdst);
        imagecopyresampled($filecreate, $src, 0, 0, 0, 0, $wdst, $hdst, $wsrc, $hsrc);
        //Nama Acak
        $x 			= explode(".", $filename);
          $name 		= $x[0];
        $extension 	= $x[1];
        $filename 	= $date.'.'.$extension;
      //Reupload
      if ($filetype == 'image/jpeg' || $filetype == 'image/jpg') {
        imagejpeg($filecreate,$dst.$filename);
      }elseif ($filetype == 'image/png') {
        imagepng($filecreate,$dst.$filename);
      }
        //Hapus Foto Lama
        unlink($fileupload);
      return $filename;
    }

  function rupiah($angka)
  {
    $hasil_rupiah = "Rp " . number_format($angka,0,'.','.');
	  return $hasil_rupiah;
  }

?>
