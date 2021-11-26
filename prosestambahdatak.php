<?php
include 'koneksi.php';
include 'sessionchecker.php';

$line_nomor = $_POST['line_nomor'];
$gambar = $_POST['gambar'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$warna = $_POST['warna'];
$status = $_POST['status'];

$query = mysqli_query ($koneksi, "insert into datak values ('$line_nomor','$gambar','$merk','$tipe','$warna','$status')");

if ($query!="") {
	echo "<script>window.location='datalapangan.php'</script>";
}
else{
	echo "Data gagal Ditambahkan!";
}
?>