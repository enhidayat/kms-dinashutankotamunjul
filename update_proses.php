<?php

 if(isset($_POST['simpan'])){
  include 'koneksi.php';
 
  //set variable
        $id_pengetahuan= $_POST['id_pengetahuan'];
        $uploader= $_POST['uploader'];
        $tanggal= $_POST['tanggal'];
        $judul= $_POST['judul'];
        $isi= $_POST['isi'];
        

  // query SQL untuk insert data
  $query= "UPDATE pengetahuan SET

            id_pengetahuan='$id_pengetahuan',
            uploader='$uploader',
            tanggal='$tanggal',
            judul = '$judul',
            isi ='$isi'
            
          WHERE id_pengetahuan='$id_pengetahuan'";
  mysqli_query($koneksi, $query);
  // mengalihkan ke halaman index.php
  header('location:index2.php');
  //header("location:index2.php?pesan=update&&?s= echo $s ");
   //header('Location: index2.php?pesan=input');
 } 
?>