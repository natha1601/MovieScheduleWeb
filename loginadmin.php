<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Back End</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="style.css">
</head>
<body class="body-login">
	<nav class="navbar navbar-dark bg-dark justify-content-between">
  		<a class="navbar-brand navbar-brand-centered" id="bag1" href="inde.php"><img class="img-logo" src="images/logo.png" alt="Bioskop UMC"></a>
	</nav>
	<center>
	<?php  
				if (!isset($_POST["login"])) {
			?>

			<div class="text-center" style="padding:50px 0">
				<div class="logo">LOGIN</div>
				<div class="login-form-1">
					<form class="text-left" action="loginadmin.php" method="POST">
						<div class="login-form-main-message"></div>
						<div class="main-login-form">
							<div class="login-group">
								<div class="form-group">
									<label for="lg_username" class="sr-only">Username</label>
									<input type="text" class="form-control" name="nama" placeholder="username">
								</div>
								<div class="form-group">
									<label for="lg_password" class="sr-only">Password</label>
									<input type="password" class="form-control" name="password" placeholder="password">
								</div>
							</div>
							<button type="submit" class="login-button" name="login"><i class="fa fa-chevron-right"><img class="img-submit"src="images/submit.png"></i></button>
						</div>
					</form>
				</div>
			</div>
		<?php  
			} else {
				include 'koneksi.php';
				
				$nama = $_POST["nama"];
				$pass = $_POST["password"];

				$query = "SELECT * FROM user WHERE nama='" . $nama . "'";
				$result = mysqli_query($database, $query);

				if ($result) {
					$row = mysqli_fetch_row($result);
					if ($row[2] == $pass and $row[1] == $nama) {
						$_SESSION['user'] = $nama;
						$nama_user = $_SESSION['user'];
						header("location:home_admin.php");
					} else {
						echo "Nama dan password salah silahkan input kembali<br>"; ?>
							<a href="loginadmin.php"><button class="btn btn-primary">Back</button></a>
						<?php
					}
				} else {
					echo "Nama dan password salah silahkan input kembali<br>"; ?>
							<a href="loginadmin.php"><button class="btn btn-primary">Back</button></a>
						<?php
				}
			}
			
		?>
</center>
</body>
</html>