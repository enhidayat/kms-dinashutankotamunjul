<!DOCTYPE html>
<html>
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
      <link  href="../css/bootstrap.min.css" rel="stylesheet">
      <!-- <script src="../js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Admin</title>
</head>
<body class=" login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.php">
            <img src="../img/default_profile.jpg" style="width: 200px; margin-bottom: -40px;" /> 
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="" method="post">
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Login for Administrator. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <input class=" form-control form-control-solid placeholder-no-fix glyphicon glyphicon-user " type="text" autocomplete="off" placeholder="Username" name="username" /> 
            </div>
            <div class="form-group">
                <label class="control-label ">Password </label>
                <input class="form-control form-control-solid placeholder-no-fix glyphicon glyphicon-lock" type="password" autocomplete="off" placeholder="Password" name="password" /> 
            </div>
            <div class="form-actions">
                <button type="submit" class="btn bg-primary btn-block uppercase" name="submit">Login</button>
            </div>
                
        </form>
        <!-- END LOGIN FORM -->
    </div>
    <div class="copyright"> 2018 © Admin. Knowledge Management System. </div>
</body>

</html>


<?php
    include "../koneksi.php";
  if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $c = mysqli_query($koneksi,"select count(username) from admin where username='$username' and password='$password'");

    $cr = mysqli_fetch_array($c);
    $ci = $cr['count(username)'];

    if( $ci == 1 ){
        $co = $username;
        $en = base64_encode($co);

        header("Location: daftar_user.php?s=$en");
    }else{
            $message = "Invalid Username or Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

  }
?>