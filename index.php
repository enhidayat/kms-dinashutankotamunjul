<?php

  	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
	    <link rel="stylesheet" href="css/custom.min.css">
	    <link rel="stylesheet" href="css/modification.css">
	    <link href="css/jumbotron.css" rel="stylesheet">
	    <link rel="icon" href="img/favicon.ico">	   
	    <link rel="stylesheet" type="text/css" href="style.css">

      <title>Dinas Hutan Kota Munjul - KMS</title>
  	</head>

  	<body>
  		<div class="fixed-bg"></div>  
	    <div class="navbar navbar-inverse navbar-expand-lg fixed-top navbar-dark ">
	      	<div class="container">
	        	<a href="index.php" class="warna "><img src="img/Logo.png" class="img-fluid" style="max-width: 20%; and height: auto"> Dinas Hutan Kota Munjul</a>
	      	</div>
	    </div>

	    <div class="jumbotron">
	    	<div class="container">	    	
			   	<div class="row">
          	<div class="col-md-8">
            	<h2 class="display-4">Knowledge Management System Dinas Hutan Kota Munjul </h2>
          	</div>
          	<div class="col-md-3" style="padding-top: 20px">            
            	<form action="" method="POST">
              	<table border=0>
                	<th><h3> Login</h3></th>
                	<tr height="50px">
                    	<td><input class="form-control" type="user" name="username" placeholder="Username" maxlength="40" size="40" required></td>
               		</tr>
               		<tr height="50px">
                    	<td><input class="form-control" type="password" name="password" placeholder="Password" maxlength="20" size="40" required></td>
                	</tr>
              	</table>
              	<hr>
              	<table border=0>
                <tr>
                  	<td><input class="btn btn-success" type="submit" name="submit" value="Login"></td>
                </tr>                            
              	</table>
            	</form>
          	</div>
		      </div>
	    	</div>
			</div>

			<div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <p>Selamat Datang di Website Sistem Management Pengetahuan Dinas Hutan Kota Munjul.</p>
	        </div>
	     	</div>
	      <hr>
	      <footer>
	        <p>&copy; 2018 Dinas Hutan Kota Munjul. All Rights Reserved</p>
	      </footer>
		  </div>


	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/custom.js"></script>
  

	</body>
</html>

<?php
  session_start();
  if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $c = mysqli_query($koneksi,"select count(username) from user where username='$username' and password='$password'");

    $cr = mysqli_fetch_array($c);
    $ci = $cr['count(username)'];

    if( $ci == 1 ){
         $co = $username;
         $en = base64_encode($co);
        $_SESSION['username']=$username;
      $_SESSION['password']=$password;

        header("Location: main.php?s=$en");
      //header("Location: main.php");
    }else{
    		$message = "Invalid Username or Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

  }

//==============================ggg==============
// include("koneksi.php");
//   // $kon =buka_koneksi();


//       session_start();

//     if( isset($_POST['submit'])){
//       $nama = $_POST['username'];
//       $pass =$_POST['password'];

// $query = "SELECT username,password FROM user WHERE username='$nama' and password='$pass'";
// $result=mysqli_query($koneksi,$query);//$kon->query($query) or die($kon->error.__LINE__);
// if($result->num_rows > 0) {
//   //header("Location : index.php");

//       $_SESSION['username']=$nama;
//       $_SESSION['password']=$pass;
//   header("location: main.php");
// }
// else {
// // echo '<h2 style="background-color:rgb(2, 183, 208); text-align:center;">username/password
// // yang anda masukkan salah. Silahkan ulang kembali</h2>';

// echo '<div class="alert alert-info">
//         <a href="#" class="close" data-dismiss="alert">×</a>
//         <strong>Note:</strong> username/password
//         yang anda masukkan salah. Silahkan ulang kembaliks.
//     </div>';
// }
// } 


?>