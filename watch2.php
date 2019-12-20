<?php  
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BIOSKOP MA CHUNG STUDIO 2</title>
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
			<?php 
					
				$id = $_GET['id'];
				$sql = "SELECT link FROM studio2 where id_studio2='$id'" ;
				$result = mysqli_query($database, $sql);
				if (mysqli_num_rows($result) > 0) {
			 ?>
					<div class="container col-sm transparan2 mar1 text-center">
					<?php 
						$row = mysqli_fetch_assoc($result);  
						
					?>
						<div class="embed-responsive embed-responsive-16by9">
  							<iframe class="embed-responsive-item" src="<?php echo $row['link'] ?>" ></iframe>
						</div>
						<br><a href="index.php"><button class="btn btn-outline-dark">Back to Home</button></a>						
					</div>
			<?php 
				} 
			?>
		</div>
	</div>
</body>
</html>