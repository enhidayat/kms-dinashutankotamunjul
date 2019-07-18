<html>
  <title>Input knowledge</title>
  <head>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">

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
  <div class="container">
  <div class="well">
  <div class="row">
    <h1><b>Input Data Karyawan</b></h1>
    <hr>

        <div class="col-md-9" >
         <form action="knowledge_proses.php" method="POST" id="form" color="green">


              <div class="form-group">
                <label for="id_pengetahuan">ID Pengetahuan </label>       
                <input type="text" class="form-control" name="id_pengetahuan" id="id_pengetahuan" placeholder="id_pengetahuan" required>
              </div>
            <div class="form-group">
              <label for="uploader" >Uploader </label> 
              <input type="text" class="form-control" name="uploader" id="uploader" placeholder="nama pengirim" required>
            </div>

            <div class="form-group">
               <label for="tanggal">Tanggal </label>
               <input type="text" class="form-control" id="datepicker" name="tanggal" placeholder="tanggal post" required/>
            </div>
            <div class="form-group">
               <label for="judul">Judul </label>
               <input type="text" class="form-control" id="judul" name="judul" placeholder="judul knowledge" required/>
            </div>
            <div class="form-group">
               <label for="isi">Isi </label>
               <textarea name="isi" rows="7" cols="75" id="isi" placeholder="isi knowledge" required></textarea> </br>
               
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan" width="50" height="20" />
               
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
