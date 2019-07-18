

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="../style.css" media="screen" title="no title" charset="utf-8">
      <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
      <link rel="stylesheet" href="../css/custom.min.css">
      <link rel="stylesheet" href="../css/material-icons.css">
      <link rel="stylesheet" href="../css/modification.css">
      <link href="../css/jumbotron.css" rel="stylesheet">
      <link rel="icon" href="../img/favicon.ico">

      <title>Balai Besar Bahan dan Barang Teknik - KMS</title>
    </head>

    <body>
    
      <div class="navbar   navbar-inverse  navbar-expand-lg fixed-top navbar-dark  ">
          <div class="container">
            <a href="main.php?s=<?php echo $s ?>" class="navbar-brand warna"><img src="img/logo.png" class="img-fluid" style="max-width: 20%; and height: auto" > Dinas Hutan Kota Munjul</a>

            
          </div>
      </div>

      <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="row">
          <div class="col-sm-2">
            
          </div>
          <div class="col-sm-8">
            <div class="card">
              <div class="card-header">
                <i class="material-icons" >person</i> Create User
              </div>                
              <div class="card-body"> 
                <form action="" method="POST">                
                  <table border="0">
                    <tr>
                      <td width="3%" rowspan="5"></td>
                      <td width="5%" rowspan="5">

                      <img src="" onerror=this.src="../img/default_profile.jpg" class="rounded-circle" height="100px" width="100px"/><input class="btn btn-sm" type="file" name="" style="width: 98%"></td>
                      
                      <!--  -->
                      <td width="5%" rowspan="5"></td>
                      <td width="15%">Username</td> 
                      <td><input class="form-control" type="text" name="username" placeholder="username" required></td>
                      <td></td>
                      <td width="3%" rowspan="5"></td>
                    </tr>
                    <tr>
                      <td >Usertype</td>
                      <td><input class="form-control" type="text" name="usertype" placeholder="Usertype" ></td>
                      
                    </tr>
                    <tr>
                      <td width="15%"> Password</td>
                      <td><input class="form-control" type="password" name="password" placeholder="password" required></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Division</td>
                      <td><input class="form-control" type="text" name="division" placeholder="division" ></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td><input class="form-control" type="text" name="nama" placeholder="nama" ></td>
                      <td></td>
                    </tr>
                    
                  </table>                
              </div>
            <div class="card-footer">               
              <input class="btn btn-success float-right" type="submit" name="simpan" value="Simpan">
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
            
          </div>
        </div>        
    </div>


      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/custom.js"></script> 

  </body>
</html>

       

<?php

      if(isset($_POST['simpan'])){
        //membuka koneksi
        include '../koneksi.php';
        
        //header('Location: index2.php?pesan=input');


        //set variable
      $username = $_POST['username'];
      $usertype = $_POST['usertype'];
      $nama = $_POST['nama'];
      $division = $_POST['division'];
      $password = $_POST['password'];
      
      

     // $result = mysqli_query($koneksi,"insert into user (username,nama,division,password) values('$username','$nama','$division','$password') ");


        

        //TODO insert ke db menggunakan msqli
        $sql = "INSERT INTO user
        VALUES('$username','$usertype','$password','$division','$nama')";



        if (mysqli_query($koneksi,$sql)) {
          $msg = "Data berhasil disimpan.";
          echo "<script type='text/javascript'>alert('$msg');</script>";

        }else {
          echo "Error: ".$sql. "<br/>".mysqli_error($koneksi);
        }
        mysqli_close($koneksi);
      }

     ?>