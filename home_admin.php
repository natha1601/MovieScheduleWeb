<?php 
  session_start();
  include 'koneksi.php' 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Back End</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-between">
  <div class="navbar-header">
      <a class="navbar-brand" id="bag1" href="inde.php"><img class="img-logo" src="images/logo.png" alt="Bioskop UMC"></a>
  </div>
  <div class="nav navbar-nav">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
      </ul>
  </div>
  </nav>
	<center>
		<?php  
      if (!isset($_SESSION['user'])) {
       echo "Acces Denied";
      } else {
    ?>
    <br>
    <h2>Edit Studio : </h2><br>
    <div class="container-fluid">
      <div class="row">
        <div class="container col-sm-4">
        <button class="btn btn-dark btn-edit" disable>Studio 1</button>
        <div class="studio">
        <?php 
            $sql = "SELECT id_studio1, poster, judul, time_format(jam_mulai, '%h:%i %p') as jam_mulai, time_format(jam_akhir, '%h:%i %p') as jam_akhir, hari, keterangan, time_format(now(), '%h:%i %p') as sekarang FROM studio1";
        
            $result = mysqli_query($database, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ( $row = mysqli_fetch_assoc($result)) {
            ?>
            <img class="img-cover" src="images/<?php echo $row['poster']?>.jpg" class="image" alt="">
            <h4><?php echo $row['judul']; ?>
            <?php echo $row['jam_mulai'] . " - " . $row['jam_akhir'] ;?></h4>
            <h4><?php echo $row['hari']; ?></h4>
            <p>Deskripsi :<br>
            <?php echo $row['keterangan']; ?></p><br>
            <?php }} ?>
            </div>
            <a href="editstudio1.php"><button class="btn btn-dark">Edit</button></a>
        </div>
        <div class="container col-sm-4">
        <button class="btn btn-dark btn-edit" disable>Studio 2</button>
        <?php 
            $sql = "SELECT id_studio2, poster, judul, link, time_format(jam_mulai, '%h:%i %p') as jam_mulai, time_format(jam_akhir, '%h:%i %p') as jam_akhir, hari, keterangan, time_format(now(), '%h:%i %p') as sekarang FROM studio2";
        
            $result = mysqli_query($database, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ( $row = mysqli_fetch_assoc($result)) {
            ?>
            <img class="img-cover" src="images/<?php echo $row['poster']?>.jpg" class="image" alt="">
            <h4><?php echo $row['judul']; ?>
            <?php echo $row['jam_mulai'] . " - " . $row['jam_akhir'] ;?></h4>
            <h4><?php echo $row['hari']; ?></h4>
            <p>Deskripsi :<br>
            <?php echo $row['keterangan']; ?></p><br>
            <?php }} ?>
            <a href="editstudio2.php"><button class="btn btn-dark">Edit</button></a>
        </div>
        <div class="container col-sm-4">
        <button class="btn btn-dark btn-edit" disable>Studio 3</button>
        <?php 
            $sql = "SELECT id_studio3, poster, judul, link, time_format(jam_mulai, '%h:%i %p') as jam_mulai, time_format(jam_akhir, '%h:%i %p') as jam_akhir, hari, keterangan, time_format(now(), '%h:%i %p') as sekarang FROM studio3";
        
            $result = mysqli_query($database, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ( $row = mysqli_fetch_assoc($result)) {
            ?>
            <img class="img-cover" src="images/<?php echo $row['poster']?>.jpg" class="image" alt="">
            <h4><?php echo $row['judul']; ?>
            <?php echo $row['jam_mulai'] . " - " . $row['jam_akhir'] ;?><br></h4>
            <p>Deskripsi :<br>
            <?php echo $row['keterangan']; ?></p><br>
            <?php }} ?>
            <a href="editstudio3.php"><button class="btn btn-dark">Edit</button></a>
        </div>
      </div>
    </div>
    <?php  
      }
    ?>
	</center>
</body>
</html>