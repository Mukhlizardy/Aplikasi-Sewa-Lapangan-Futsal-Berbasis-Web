<?php
include 'koneksi.php';
include 'sessionchecker.php';

$plat_nomor = $_POST['plat_nomor'];
$gambar = $_POST['gambar'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$warna = $_POST['warna'];
$status = $_POST['status'];

$query = mysqli_query($koneksi, "update datak set gambar='$gambar',merk='$merk',tipe='$tipe',warna='$warna',status='$status' where plat_nomor='$plat_nomor'") or die (mysqli_error());
if ($query) {
	echo "<script>window.location='datalapangan.php'</script>";
}
else{
	echo "Data gagal Ditambahkan";
}
?>