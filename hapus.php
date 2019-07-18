<?php
  include 'koneksi.php';
  //$koneksi = buka_koneksi();
   

   $s = $_GET['s'];

  $username = base64_decode($s);
  $result = mysqli_query($koneksi,"select * from user where username='$username'");
  $row = mysqli_fetch_array($result);

	$nama = $row['nama'];
	$s = base64_encode($username);
	



  $id_pengetahuan = $_GET['id_pengetahuan'];
  mysqli_query($koneksi,"DELETE FROM pengetahuan WHERE id_pengetahuan='$id_pengetahuan'") or die(mysqli_connect_error($koneksi));

   header("Location:index2.php?s=$s?pesan=hapus");
  //echo "<meta http-equiv='refresh' content='0'>";
  //header("Location:index2.php?s=echo $s;");
  //main.php?s=<?php echo $s 



 ?>
