<?php 
  session_start();
  include 'koneksi.php' 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Back End</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<style>
  		input[type=text], select {
    		padding: 12px 20px;
    		margin: 8px 0;
    		display: inline-block;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		box-sizing: border-box;
		}
		input[type=password], select {
    		padding: 12px 20px;
    		margin: 8px 0;
    		display: inline-block;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		box-sizing: border-box;
		}

  	</style>
</head>
<body>
	<center>
		<?php  
      if (!isset($_SESSION['user'])) {
       echo "Acces Denied";
      } else {
        if (!isset($_POST['submit'])) { 
    ?>
		    <form method="POST" action="editstudio1.php" >
        <h3>Ubah data Studio 2</h3>
        <input type="text" name="hari" placeholder="Hari"></input><br>
        <input type="text" name="jam_mulai" placeholder="Jam Mulai"></input><br>
        <input type="text" name="jam_akhir" placeholder="Jam Selesai"></input><br>
        <input type="text" name="judul" placeholder="Judul Film"></input><br>
        <textarea placeholder="Deskripsi" name="keterangan"></textarea><br>
        <input type="text" name="poster" placeholder="Nama Poster"></input><br>
        <input type="text" name="link" placeholder="Link"></input><br> 
        <button type="submit" name="submit" class="btn btn-primary">Save</button>      
      </form>
    <?php  
       } else {
          $hari = $_POST['hari'];
          $mulai = $_POST['jam_mulai'];
          $selesai = $_POST['jam_akhir'];
          $judul = $_POST['judul'];
          $deskripsi = $_POST['keterangan'];
          $poster = $_POST['poster'];
          $link = $_POST['link'];

          $user = $_SESSION['user'];
          $query = "UPDATE studio2 SET hari = '$hari', jam_mulai = '$mulai', jam_akhir = '$selesai', judul = '$judul', keterangan = '$deskripsi', poster = '$poster', link = '$link'";
          $hasil = mysqli_query($database, $query);
          if ($hasil) {
            echo "Password berhasil diupdate<br>";
            echo "<a href=\"home_admin.php\"><button>Back</button></a>";
          } else {
            echo "proses gagal";
            echo "<a href=\"home_admin.php\"><button>Back</button></a>";
          }
       }
      } 
    ?>
	</center>
</body>
</html>