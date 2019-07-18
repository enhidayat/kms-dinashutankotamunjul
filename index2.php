
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
    <title>Dinas Hutan Kota Munjul - KMS</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  </head>
   <body>
    <div class="navbar navbar-inverse navbar-expand-lg fixed-top navbar-dark ">
      <div class="container">
        <a class="warna" href="" class="navbar-brand"><img src="img/Logo.png" class="img-fluid" style="max-width: 20%; and height: auto"> Dinas Hutan Kota Munjul | Knowledge Data </a>
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;&nbsp;</a>
          </li>
          <a href="logout.php">Logout</a>
        </ul>
      </div>
      </div>
    
    <?php
  
    ?>
    <br><br>
    <a href="knowledge_input.php?s=<?php //echo $s ?>" class="btn btn-primary" letter-spacing : 2px;>+ Add Knowledge</a>
    <a href="phpfpdf/Print.php" target="_blank" class="btn btn-primary">+ Print</a>
   
    <table border=0 class="table">
      <tr>
        <th>Knowledge ID</th>
        <th>Uploader</th>
        <th>Date</th>
        <th>Title</th>
        <th>Content</th>
        <th>Option</th>
        
      </tr>

      <?php
          // buka koneksi , mengambil data dan menampilkan data
          include "koneksi.php";
          include "format_tgl.php";
          //$con = buka_koneksi();
          $tampil = "SELECT * FROM pengetahuan";
          $result = $koneksi->query($tampil);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                // Ubah tanggal menjadi yyyy-mm-dd
                 $tanggal = date('Y-m-d', strtotime($row['tanggal']));

                  echo "<tr>";
                          echo "<td>". $row['id_pengetahuan']."</td>";
                          echo "<td>".$row['uploader']."</td>";
                          
                          //echo "<td>".date("d-m-Y",strtotime($row['tanggal']))."</td>";
                          echo "<td>" . tanggal_indo($tanggal, true) . "</td>";
                          echo "<td>".$row['judul']."</td>";
                          echo "<td>". $row['isi']."</td>";
                          
                          echo "<td>";
        ?>
                        <a href='kn_edit.php?id_pengetahuan=<?php echo $row['id_pengetahuan'];?>'>Edit</a> |
                        <a href='hapus.php?id_pengetahuan=<?php echo $row['id_pengetahuan'];?>'>Delete</a>

        <?php
                          echo "</td>";
                          echo  "</tr>";

              }
                
          }
          else{
                  echo "0 results";
          }
        ?>
    </table>
  </body>
</html>
