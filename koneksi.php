<?php  
	$database = mysqli_connect("localhost", "root", "", "cinemax");

	if (!$database) {
		die("not connected" . mysqli_connect_error());
	} else {
		echo "success";
	}
?>