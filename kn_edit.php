

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
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
       });
    </script>

    <script>
       $(document).ready(function(){
         $("#datepicker").datepicker({
           
         })
       })
  </script>

  <title>Edit Knowledge</title>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-expand-lg fixed-top navbar-dark ">
    <div class="container">
      <a class="warna" href="index2.php" class="navbar-brand"><img src="" class="img-fluid" style="max-width: 20%; and height: auto"> <<< Edit Knowledge </a>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    </div>     
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
         <form action="update_proses.php" method="POST" id="form" color="green">


              <div class="form-group">
                <label for="id_pengetahuan">Knowledge ID</label>       
                <input type="text" class="form-control" name="id_pengetahuan" id="id_pengetahuan"  value="<?php echo $row['id_pengetahuan']; ?>"/>
              </div>
            <div class="form-group">
              <label for="uploader" >Uploader </label> 
              <input type="text" class="form-control" name="uploader" id="uploader" value="<?php echo $row['uploader']; ?>"/>
            </div>

            <div class="form-group">
               <label for="tanggal">Date </label>
               <input type="text" class="form-control" id="datepicker" name="tanggal" value="<?php echo $row['tanggal']; ?>"/>
            </div>
            <div class="form-group">
               <label for="judul">Title </label>
               <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row['judul']; ?>"/>
            </div>
            <div class="form-group">
               <label for="isi">Content </label><br>
               <textarea name="isi" rows="7" cols="75" id="isi"> <?php echo $row['isi']; ?></textarea> </br>
               
            </div>

            <!-- <div class="form-group"> -->
            <input type="submit" class="btn btn-primary" name="simpan" value="Edit" width="50" height="20" />
            <!-- </div> -->

              
    </form>
    </div>
  </div>
  </div>
  </div>

  </body>
</html>

