<?php
  include '../koneksi.php';
  //$koneksi = buka_koneksi();

  $username = $_GET['username'];
  mysqli_query($koneksi,"DELETE FROM user WHERE username='$username'") or die(mysqli_connect_error($koneksi));

  header("Location:daftar_user.php?pesan=hapus");


 ?>
