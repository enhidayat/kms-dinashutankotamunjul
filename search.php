<?php

  	include "koneksi.php";

  	ob_start();

  	$s = $_GET['s'];

  	$temp = base64_decode($s);
	$hs = (explode("&",$temp));
	
 	$username = substr($hs['0'], 0);
	$search = substr($hs['1'], 0);

 	$result = mysqli_query($koneksi,"select *from user where username='$username'");
	$row = mysqli_fetch_array($result);

	$nama = $row['nama'];
	// $reward = $row['reward'];

	$s = base64_encode($username);
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
	    <link rel="stylesheet" href="css/imagepop.css">
	    <link rel="stylesheet" href="css/modification.css">
	    <link href="css/jumbotron.css" rel="stylesheet">
	    <link rel="icon" href="img/favicon.ico">
	    <link rel="stylesheet" type="text/css" href="style.css">

	    <title>Dinas Hutan Kota Munjul - KMS</title>
  	</head>

  	<body>
	    <div class="navbar navbar-inverse navbar-expand-lg fixed-top navbar-dark ">
	      	<div class="container">
	        	<a class="warna" href="main.php?s=<?php echo $s ?>" class="navbar-brand"><img src="img/Logo.png" class="img-fluid" style="max-width: 20%; and height: auto"> Dinas Hutan Kota Munjul | Search</a>

	        	<ul class="nav navbar-nav ml-auto">
		            <li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;&nbsp;<img src="user/profile/<?php echo $username ?>.jpg?dummy=8484744" onerror=this.src="img/default_profile.jpg" class="rounded-circle" height="25px" width="25px" /></a>
					    <div class="dropdown-menu">
					    	<a class="dropdown-item disabled">Hi, <?php echo "$nama"; ?></a>
					    	<div class="dropdown-divider"></div>
					      	<!-- <a class="dropdown-item" href="edit.php?s=<?php //echo "$s"?>">Edit Profile</a> -->
					      	<a class="dropdown-item" href="index.php">Logout</a>
					    </div>
					</li>
		        </ul>
	      	</div>
	    </div>

	   	<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
	   		<div class="row">
	   			<div class="col-sm-12">	   				
		   			<nav aria-label="breadcrumb" role="navigation">
					  	<ol class="breadcrumb">
					    	<li class="breadcrumb-item"><a href="main.php?s=<?php echo "$s"?>">Home</a></li>
					    	<li class="breadcrumb-item active" aria-current="page">Search</li>
					  	</ol>
					</nav>
	   			</div>				
		  	</div>
		  	<div class="row">
	   			<div class="col-sm-12">   				
		   			<form class="form-inline" action="" method="POST">
				    	<input class="form-control mr-sm-2" name="search" placeholder="<?php echo "$search"?>" >
				    	<input class="btn btn-success" type="submit" name="submit" value="Search">
				  	</form>
	   			</div>				
		  	</div>
		  	<div class="row">
	   			<div class="col-sm-12">	
	   				  				
			   			<?php
			   				if ($search != 'Find Here..') {
			   					echo "<br>";
			   					preg_match_all("/[a-zA-Z0-9]+/", $search, $matches);

			   					echo "<table class='table'>";
			   					foreach ($matches['0'] as $value) {
			   						
			   						// filelib
				   					$result = mysqli_query($koneksi,"select *from filelib where filename like'%$value%'");
									while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){

										$link = $row['filedir'].$row['filename'];
										echo "<tr>";
									    echo "<td width=70%'><a href='$link'><i class='material-icons' >book</i> ".$row['filename']."</a></td>";
										$ownerid = $row['ownerid'];
										$result2 = mysqli_query($koneksi,"select *from user where username='$ownerid'");
										$row2 = mysqli_fetch_array($result2);
										$namaowner = $row2['nama'];

									    echo "<td>by ".$namaowner."</td>";
									    echo "</tr>";

									}

			   						// learn
				   					$result = mysqli_query($koneksi,"select *from learn where learntitle like'%$value%'");								
									while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
										$tmpvalue = $username.'&'.$row['learndir'].$row['learntitle'].'.mp4';
										$envalue = base64_encode($tmpvalue);
										$link = 'watch.php?s='.$envalue;
										echo "<tr>";
									    echo "<td width=70%'><a href='$link'><i class='material-icons' >video_library</i> ".$row['learntitle']."</a></td>";
										$ownerid = $row['ownerid'];
										$result2 = mysqli_query($koneksi,"select *from user where username='$ownerid'");
										$row2 = mysqli_fetch_array($result2);
										$namaowner = $row2['nama'];

									    echo "<td>by ".$namaowner."</td>";
									    echo "</tr>";
									}

									// forum
									$result = mysqli_query($koneksi,"select *from forum where forumtitle like'%$value%'");								
									while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
										$tmpvalue = $username.'&'.$row['forumtitle'];
										$envalue = base64_encode($tmpvalue);
										$link = 'post.php?s='.$envalue;
										echo "<tr>";
									    echo "<td width=70%'><a href='$link'><i class='material-icons' >chat_bubble</i> ".$row['forumtitle']."</a></td>";
										$ownerid = $row['owner'];
										$result2 = mysqli_query($koneksi,"select *from user where username='$ownerid'");
										$row2 = mysqli_fetch_array($result2);
										$namaowner = $row2['nama'];

									    echo "<td>by ".$namaowner."</td>";
									    echo "</tr>";
									}
									
																		
								}
								echo "</table>";
								echo "<hr>";
								echo "<div class='row'>";

								foreach ($matches['0'] as $value) {									

									// gallery
									$result = mysqli_query($koneksi,"select *from photo where photoname like'%$value%'");								
									while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
										$filenx = preg_replace("/\.[^.]+$/", "", $row['photoname']);
									    echo "	<div class='col-sm-3'>
													<div class='card'>															
														<img class='card-img-top' id='myImg' src='".$row['photodir']."".$row['photoname']."' alt='".$filenx."' onclick='modal(this)'>
														<div class='card-body'>
														   	<p class='card-text'>".$filenx."</p>
														</div>
													</div>
												</div>
									    ";

									}									
				   				}
				   				echo "</div>";
			   				}	
			   			?>
	   			</div>				
		  	</div>
		</div>

		<!-- The Modal -->
		<div id="myModal" class="modal">
		  	<span class="closemodal">&times;</span>
		 	<img class="modal-content" id="img01" width="400" height="auto">
		  	<div id="caption"></div>
		</div>

		
	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/custom.js"></script> 
	    <script src="js/imagepop.js"></script> 

	</body>
</html>

<?php
	if(isset($_POST['submit'])){

		$search = ($_POST['search']);

		$searchtemp = $username.'&'.$search;
		$linksearch = base64_encode($searchtemp);

		header("Location: search.php?s=$linksearch");
		ob_end_flush();		
	}
?>								    	