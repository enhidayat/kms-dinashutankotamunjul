<?php


  	
  	
  	session_start();
  		if( !isset($_SESSION['username'])){

  		die('<h1>anda belum login :) . . .<br> silahkan login dahulu <a href="index.php">login</a><h1>');
		}
  	
	
	include "koneksi.php";

    $s = $_GET['s'];

  $username = base64_decode($s);
  $result = mysqli_query($koneksi,"select * from user where username='$username'");
  $row = mysqli_fetch_array($result);

	$nama = $row['nama'];
	

	$search = $username.'&'.'Find Here..';
	$linksearch = base64_encode($search);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
	    <link rel="stylesheet" href="css/custom.min.css">
	    <link rel="stylesheet" href="css/material-icons.css">
	    <link rel="stylesheet" href="css/modification.css">
	    <!-- <link href="css/jumbotron.css" rel="stylesheet"> -->
	    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
	    <link rel="icon" href="img/favicon.ico">

	    <title>Dinas Hutan Kota Munjul - KMS</title>
  	</head>

  	<body>
	   <div class="navbar navbar-inverse navbar-expand-lg fixed-top navbar-dark ">
	      	<div class="container">
	        	<a class="warna" href="main.php?s=<?php echo $s ?>" class="navbar-brand"><img src="img/Logo.png" class="img-fluid" style="max-width: 20%; and height: 10%"> Dinas Hutan Kota Munjul | Home</a>

	        	<ul class="nav navbar-nav ml-auto">
		            <li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;&nbsp;<img src="user/profile/<?php echo $username ?>.jpg?dummy=8484744" onerror=this.src="img/default_profile.jpg" class="rounded-circle" height="25px" width="25px" /></a>
					    <div class="dropdown-menu">
					    	<a class="dropdown-item disabled">Hi, <?php echo "$nama"; ?></a>
					    	<div class="dropdown-divider"></div>
					      	<!-- <a class="dropdown-item" href="edit.php?s=<?php //echo "$s"?>">Edit Profile</a> -->
					      	<a class="dropdown-item" href="logout.php">Logout</a>
					    </div>
					</li>
		        </ul>
	      	</div>
	    </div>

	   	<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
	   		<div class="row">
	   		<div class="col-sm-9">
		   		<div class="row" >
		   			<div class="col-sm-12">
		   				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						  	<div class="carousel-inner">
						    	<div class="carousel-item active">
						      		<img class="d-block w-100" src="img/slider/1.jpg" alt="First slide">
						      		<div class="carousel-caption d-none d-md-block">
									    <h3>Discovery New Knowledge</h3>
									    <p>Temukan Pengetahuan dan Pengalaman Baru</p>
									</div>
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="img/slider/2.jpg" alt="Second slide">
						      		<div class="carousel-caption d-none d-md-block">
									    <h3>Sharing The Knowledge</h3>
									    <p>Bagikan Pengetahuan dan Pengalaman Anda</p>
									</div>
						    	</div>
						    	<div class="carousel-item">
						      		<img class="d-block w-100" src="img/slider/3.jpg" alt="Third slide">
						      		<div class="carousel-caption d-none d-md-block">
									    <h3>Save Knowledge</h3>
									    <p>integrasikan pengetahuan kedalam database </p>
									</div>
						    	</div>
						  	</div>
						  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
		   			</div>		   				   			
		   		</div>
		   		<br>
		   		<div class="row">
				    <div class="col-sm-4">
					    <div class="card">
					      	<div class="card-body">
					        	<i class="material-icons" style="font-size: 100px; color: limegreen;">local_library</i>
					        	<hr>
					        	<p class="card-text">Share Knowledge and Help Other Succeed</p>
					        	<a href="filelib.php?s=<?php echo "$s"?>" class="btn btn-primary">File Library</a>
					      	</div>
					    </div>
					</div>
					<div class="col-sm-4">
					    <div class="card">
					      	<div class="card-body">
					        	<i class="material-icons" style="font-size: 100px; color: mediumvioletred;">ondemand_video</i>
					        	<hr>
					        	<p class="card-text">Connecting and Learn From Expert</p>
					        	<a href="learn.php?s=<?php echo "$s"?>" class="btn btn-primary">Learning</a>
					      	</div>
					    </div>
					</div>
					<div class="col-sm-4">
					    <div class="card">
					      	<div class="card-body">
					        	<i class="material-icons" style="font-size: 100px; color: cornflowerblue;">group</i>
					        	<hr>
					        	<p class="card-text">Search and Follow Communities of Practice</p>
					        	<a href="forum.php?s=<?php echo "$s"?>" class="btn btn-primary">Forum</a>
					      	</div>
					    </div>
					</div>
		   		</div>
		   		<br>
		   		<div class="row">
					<div class="col-sm-4">
					    <div class="card">
					      	<div class="card-body">
					        	<i class="material-icons" style="font-size: 100px; color: tomato;">photo_size_select_actual</i>
					        	<hr>
					        	<p class="card-text">View Official Photo Documentation</p>
					        	<a href="gallery.php?s=<?php echo "$s"?>" class="btn btn-primary">Gallery</a>
					      	</div>
					    </div>
					</div>
					<div class="col-sm-4">
					    <div class="card">
					      	<div class="card-body">
					        	<i class="material-icons" style="font-size: 100px; color: slateblue;">find_in_page</i>
					        	<hr>
					        	<p class="card-text">Find Useful Content in the Knowledge</p>
					        	<a href="search.php?s=<?php echo "$linksearch"?>" class="btn btn-primary">Search</a>
					      	</div>
					    </div>
					</div>
					<div class="col-sm-4">
					    <div class="card">
					      	<div class="card-body">
					        	<i class="material-icons" style="font-size: 100px; color: orange;">stars</i>
					        	<hr>
					        	<p class="card-text">Share your Knowledge and Make a miracle</p>
					        	<a href="index2.php?s=<?php echo "$s"?>" target="_blank" class="btn btn-primary">Knowlede Base</a>
					      	</div>
					    </div>
					</div>
		   		</div>				
		  	</div>
		  	<!-- <div class="col-sm-3">
		  		<div class="col-sm-12">
		  			<div class="card-header">
				    	<i class="material-icons" style="font-size: 22px;">update</i> Updates
				  	</div>
	   				<div class="card">						
						<a class="twitter-timeline" href="https://twitter.com/B4T_Bandung?ref_src=twsrc%5Etfw" data-height="1056" data-chrome="noheader,nofooter">Tweets by B4T_Bandung</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
	   			</div>
		  	</div> -->
		  	</div>		   	
		</div>


	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/custom.js"></script> 

	</body>
</html>