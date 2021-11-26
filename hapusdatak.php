<?php
	include "koneksi.php";
	include 'sessionchecker.php';

	$line_nomor = $_GET['line_nomor'];
	$query = mysqli_query($koneksi, "delete from datak where line_nomor='$line_nomor'");

	if ($query!="") {
		echo "<script>window.location='datalapangan.php'</script>";
	}
?>