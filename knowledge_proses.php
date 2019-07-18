
<?php

    include "koneksi.php";

    $s = $_GET['s'];

  $username = base64_decode($s);
  $result = mysqli_query($koneksi,"select *from user where username='$username'");
  $row = mysqli_fetch_array($result);

  $nama = $row['nama'];
  
  $s = base64_encode($username);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simpan Biodata</title>
  </head>
  <body>
    <?php

      if(isset($_POST['simpan'])){
        //membuka koneksi
        require_once "koneksi.php";
        
        header('Location: index2.php?pesan=input');
       // header('Location: index2.php?s');?s=<?php echo "$s"
        //header("Location: main.php?s=$en");


        //set variable
        $id_pengetahuan= $_POST['id_pengetahuan'];
        $uploader= $_POST['uploader'];
        $tanggal= $_POST['tanggal'];
        $judul= $_POST['judul'];
        $isi= $_POST['isi'];
        

        //TODO cetak ke layar
        echo "id_pengetahuan : $id_pengetahuan ";
        echo "uploader : $uploader";
        echo "tanggal: $tanggal ";
        echo "judul : $judul ";
        echo "isi : $isi ";
        

        //TODO membuka koneksi
        //$kon= buka_koneksi();

        //TODO insert ke db menggunakan msqli
        $sql = "INSERT INTO pengetahuan
        VALUES('$id_pengetahuan','$uploader','$tanggal','$judul','$isi')";

        if (mysqli_query($koneksi,$sql)) {
          echo "alhamdulillah berhasil menyimpan";

        }else {
          echo "Error: ".$sql. "<br/>".mysqli_error($kon);
        }
        mysqli_close($koneksi);
      }

     ?>
  </body>
</html>
