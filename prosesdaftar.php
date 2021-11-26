<?php
include 'koneksi.php';


$id_ktp = $_POST['id_ktp'];
$nama = $_POST['nama'];
$tgl_lhr = $_POST['tgl_lhr'];
$jk = $_POST['jk'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$repeat_pass = $_POST['repeat_pass'];
$status = 'user';

if ($password==$repeat_pass) {
	$query = mysqli_query ($koneksi, "insert into login values ('','$username','$password','$status')");
	$query1 = mysqli_query ($koneksi, "insert into pelanggan values ('$id_ktp','$nama','$tgl_lhr','$jk','$no_telp','$alamat','$username','$password')");

	if (($query)&&($query1)) {
		echo "<script>window.location='login.php'</script>";
	}
}else{
	echo "<script>alert ('Password Anda Salah!') </script>";
	echo "<script>window.location='daftar.php'</script>";
}

?>