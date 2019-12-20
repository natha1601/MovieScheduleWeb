<?php  
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BIOSKOP MA CHUNG</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="style.css">
  	
</head>
<body id="font1">
	<nav class="navbar navbar-dark bg-dark justify-content-between">
  		<a class="navbar-brand navbar-brand-centered" id="bag1" href="inde.php"><img class="img-logo" src="images/logo.png" alt="Bioskop UMC"></a>
	</nav>
	<div class="container-fluid" id="div1">
		<div class="row">
			
					<div class="container col-sm-4 transparan2 mar1 text-center">
					<br><h3>STUDIO 1</h3>
					<?php 
						$sql = "SELECT id_studio1, poster, judul, link, time_format(jam_mulai, '%h:%i %p') as jam_mulai, time_format(jam_akhir, '%h:%i %p') as jam_akhir, hari, keterangan, time_format(now(), '%h.%i %p') as sekarang FROM studio1";
				
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
						<?php if ($row['sekarang'] >= $row['jam_mulai'] && $row['sekarang'] <= $row['jam_akhir']) { ?>
								<?php echo "<a href='watch.php?id=" . $row['id_studio1'] . "'>" ?>
									<button type="submit" class="btn btn-outline-dark">Watch Now</button> </a>
						<?php } else { ?>
								<a href="watch.php?id="<?php echo $row['id_studio1'] ?> >
									<button type="submit" class="btn btn-outline-dark" disabled>Watch Now</button> </a>
						<?php	} }} ?>
							
					</div>
					<div class="container col-sm-4 transparan2 mar1">
					<br><h3>STUDIO 2</h3>
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
						<?php if ($row['sekarang'] >= $row['jam_mulai'] && $row['sekarang'] <= $row['jam_akhir']) { ?>
								<?php echo "<a href='watch2.php?id=" . $row['id_studio2'] . "'>" ?>
									<button type="submit" class="btn btn-outline-dark">Watch Now</button> </a>
						<?php } else { ?>
								<a href="watch2.php?id="<?php echo $row['id_studio2'] ?> >
									<button type="submit" class="btn btn-outline-dark" disabled>Watch Now</button> </a>
						<?php	} }} ?>
							
					</div>
					<div class="container col-sm-4 transparan2 mar1">
					<br><h3>STUDIO 3</h3>
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
						<?php if ($row['sekarang'] >= $row['jam_mulai'] && $row['sekarang'] <= $row['jam_akhir']) { ?>
								<?php echo "<a href='watch3.php?id=" . $row['id_studio3'] . "'>" ?>
									<button type="submit" class="btn btn-outline-dark">Watch Now</button> </a>
						<?php } else { ?>
								<a href="watch3.php?id="<?php echo $row['id_studio3'] ?> >
									<button type="submit" class="btn btn-outline-dark" disabled>Watch Now</button> </a>
						<?php	} }} ?>
							
					</div>
					

			
		</div>
	</div>
</body>
</html>