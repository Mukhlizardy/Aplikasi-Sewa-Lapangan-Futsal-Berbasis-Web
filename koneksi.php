<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "projectbooking";

	$koneksi = new mysqli ($hostname, $username, $password);
	if($koneksi){
		mysqli_select_db($koneksi,$db);
		// echo "koneksi berhasil";
	}else{
		echo "koneksi gagal";
	}
?>