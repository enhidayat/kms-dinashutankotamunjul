<?php

// session_start();
//     if( !isset($_SESSION['username'])){


//   die('anda belum login <br> silahkan login dahulu <a href="index.php">login</a>');
// }

// include "koneksi.php";

//    // $s = $_GET['s'];

//   $username = base64_decode($s);
//   $result = mysqli_query($koneksi,"select * from user where username='$username'");
//   $row = mysqli_fetch_array($result);

//   $nama = $row['nama'];
  

//   $search = $username.'&'.'Find Here..';
//   $linksearch = base64_encode($search);
//
  
///////////
  // include "koneksi.php";

  //   $s = $_GET['s'];

  // $username = base64_decode($s);
  // $result = mysqli_query($koneksi,"select *from user where username='$username'");
  // $row = mysqli_fetch_array($result);

  // $nama = $row['nama'];
  
  // $s = base64_encode($username);

?>

<html>
  <title>Input knowledge</title>
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
  <title>Input Knowledge</title>
  </head>
  <body>
  <div class="navbar navbar-inverse navbar-expand-lg fixed-top navbar-dark ">
          <div class="container">
            <a class="warna" href="index2.php" class="navbar-brand"><img src="" class="img-fluid" style="max-width: 20%; and height: auto">  >>Add Knowledge </a>

            <ul class="nav navbar-nav ml-auto">

              <li class="nav-item dropdown">
              <a href="logout.php">Logout</a>
              <!-- <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;&nbsp;<img src="user/profile/<?php //echo $username ?>.jpg?dummy=8484744" onerror=this.src="img/default_profile.jpg" class="rounded-circle" height="25px" width="25px" /></a>
              <div class="dropdown-menu">
                  <a class="dropdown-item disabled"></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="edit.php?s=<?php //echo "$s"?>">Edit Profile</a>
                  <a class="dropdown-item" href="index.php">Logout</a>
              </div> -->
              </li>
            </ul>
          </div>
      </div>
  <div class="container">
  <div class="well">
  <div class="row">
    

        <div class="col-md-9" >
         <form action="knowledge_proses.php" method="POST" id="form" color="green">


              <div class="form-group">
                <label for="id_pengetahuan">Knowledge ID </label>       
                <input type="text" class="form-control" name="id_pengetahuan" id="id_pengetahuan" placeholder="id_pengetahuan" required>
              </div>
            <div class="form-group">
              <label for="uploader" >Uploader </label> 
              <input type="text" class="form-control" name="uploader" id="uploader" placeholder="nama pengirim" required>
            </div>

            <div class="form-group">
               <label for="tanggal">Date </label>
               <input type="text" class="form-control" id="datepicker" name="tanggal" placeholder="tanggal post" required/>
            </div>
            <div class="form-group">
               <label for="judul">Title </label>
               <input type="text" class="form-control" id="judul" name="judul" placeholder="judul knowledge" required/>
            </div>
            <div class="form-group">
               <label for="isi">Content </label><br>
               <textarea name="isi" rows="7" cols="75" id="isi" placeholder="isi knowledge" required></textarea> </br>
               
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-primary" name="simpan" value="Save" width="50" height="20" />
               
               <!-- <label for="judul">Judul </label>
               <input type="text" class="form-control" id="judul" name="judul" /> -->
            </div>

              
      
    </form>
    </div>
  </div>
  </div>
  </div>
  </body>
</html>
