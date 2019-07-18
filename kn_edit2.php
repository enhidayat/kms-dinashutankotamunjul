<?php

    // session_start();
    //   if( !isset($_SESSION['username'])){

    //   die('<h1>anda belum login :) . . .<br> silahkan login dahulu <a href="index.php">login</a><h1>');
    //}

  //   include "koneksi.php";

  //   $s = $_GET['s'];

  // $username = base64_decode($s);
  // $result = mysqli_query($koneksi,"select *from user where username='$username'");
  // $row = mysqli_fetch_array($result);

  // $nama = $row['nama'];
  
  // $s = base64_encode($username);
?>



<!DOCTYPE html>
<html>
  <head>
     
      <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="css/bootstrap.css" media="screen">
      <link rel="stylesheet" href="css/custom.min.css">
      <link rel="stylesheet" href="css/material-icons.css">
      <link rel="stylesheet" href="css/modification.css">
      <link href="css/jumbotron.css" rel="stylesheet">
      <link rel="icon" href="img/favicon.ico">
    <script>

     $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd'}).val(); 
        // minDate: "-25Y", maxDate: 0 
       });
    </script>

    <script>
       $(document).ready(function(){
         $("#datepicker").datepicker({
           
         })
       })
  </script>

  <title>Update Knowledge</title>
  </head>
  <body>
    <?php

      include 'koneksi.php';
      $id_pengetahuan = $_GET['id_pengetahuan'];

      $pengetahuan  = mysqli_query($koneksi, "SELECT * FROM pengetahuan WHERE id_pengetahuan='$id_pengetahuan'");
       $row        = mysqli_fetch_array($pengetahuan);
      
    ?>

    <div class="container">
  <div class="well">
  <div class="row">
    

        <div class="col-md-9" >
         <form action="" method="POST" id="form" color="green">


              <div class="form-group">
                <label for="id_pengetahuan">ID Pengetahuan </label>       
                <input type="text" class="form-control" name="id_pengetahuan" id="id_pengetahuan"  value="<?php echo $row['id_pengetahuan']; ?>" required/>
              </div>
            <div class="form-group">
              <label for="uploader" >Uploader </label> 
              <input type="text" class="form-control" name="uploader" id="uploader" value="<?php echo $row['uploader']; ?>" required/>
            </div> 

            <div class="form-group">
               <label for="tanggal">Tanggal </label>
               <input type="text" class="form-control" id="datepicker" name="tanggal" value="<?php echo $row['tanggal']; ?>" required/>
            </div> 
            <div class="form-group">
               <label for="judul">Judul </label>
               <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required/>
            </div>
            <div class="form-group">
               <label for="isi">Isi </label>
               <textarea name="isi" rows="7" cols="75" id="isi" required> <?php echo $row['isi']; ?></textarea> </br>
               
            </div>

            <!-- <div class="form-group"> -->
            <input type="submit" class="btn btn-primary" name="simpan" value="Update" width="50" height="20" />
            <!-- </div> -->

              
    </form>
    </div>
  </div>
  </div>
  </div>

  </body>
</html>

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
            isi ='$isi' ;
            
          WHERE id_pengetahuan='$id_pengetahuan'";
  mysqli_query($koneksi, $query);
  header('Location: index2.php');
  
 } 
?>