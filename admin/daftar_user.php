

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

      <title>Dinas Hutan Kota Munjul - KMS</title>
    </head>

    <body>
    <!-- navbar -->
      <div class="navbar   navbar-inverse  navbar-expand-lg fixed-top navbar-dark  ">
          <div class="container">
            <a href="main.php?s=<?php echo $s ?>" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 20%; and height: auto"> Dinas Hutan Kota Munjul | Data User</a>

            
          </div>
      </div>

      
    <?php
      if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
          if($pesan == "input"){
            //echo "Data berhasil diinput";
            //alert("Data berhasil diinput");
            $msg = "Data berhasil diinput.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
          }elseif ($pesan == "update") {
            //echo "Data berhasil diupdate";
            //alert("Data berhasil diupdate");
            $msg = "Data berhasil diupdate.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
          }elseif ($pesan == "hapus") {
            //echo "Data berhasil dihapus";
            //alert("Data berhasil dihapus");
            $msg = "Data berhasil dihapus.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
          }
      }
    ?>
    <br><br>
    <a href="input_user.php" class="tombol">+ Tambah User</a>

    <!-- <form class="cari" action="search.php" method="post" >
      <label for="">Cari</label> <input type="text" name="id_pengetahuan" placeholder="id_pengetahuan">
    </form> -->

   
    <table border=1 class="table">
      <tr>
        <th>Username</th>
        <th>ID User</th>
        
        <th>Divisi</th>
        <th>Nama Karyawan</th>
        <th>Opsi</th>
        
      </tr>

      <?php
          // buka koneksi , mengambil data dan menampilkan data
          include "../koneksi.php";
          //$con = buka_koneksi();
          $tampil = "SELECT * FROM user";
          $result = $koneksi->query($tampil);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

                  echo "<tr>";
                          echo "<td>". $row['username']."</td>";
                          echo "<td>".$row['usertype']."</td>";
                          
                          //echo "<td>".date("d-m-Y",strtotime($row['tanggal']))."</td>";
                          echo "<td>".$row['division']."</td>";
                          echo "<td>". $row['nama']."</td>";
                          
                          echo "<td>";
        ?>
                        <a href='../edit.php?username=<?php echo $row['username'];?>'>Edit</a> |
                        <a href='hapus_user.php?username=<?php echo $row['username'];?>'>Hapus</a>

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

      <!--  -->

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/custom.js"></script> 

  </body>
</html>

       

