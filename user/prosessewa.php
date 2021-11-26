<?php
include '../koneksi.php';
include 'sessionchecker1.php';

$id_ktp = $_POST['id_ktp'];
$nama = $_POST['nama'];
$line_nomor = $_POST['line_nomor'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$warna = $_POST['warna'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];
$jam_selesai = $_POST['jam_selesai'];


$denda = 0;
$ttl = 0;


// $date = str_replace('/', '-', $tgl_sewa);
// $dt =  date('Y-m-d', strtotime($tgl_sewa));

//$query = mysqli_query($koneksi, "update datak set status='$status' where plat_nomor='$plat_nomor'");
mysqli_query ($koneksi, "INSERT INTO `transaksi`(`kode_sewa`, `id_ktp`, `nama`, `line_nomor`, `merk`, `tipe`, `warna`, `tgl_sewa`, `tgl_kembali`, `jam_selesai`, `hasil_denda`, `total_harga`) VALUES ('','$id_ktp','$nama','$line_nomor','$merk','$tipe','$warna','$tgl_sewa','$tgl_kembali','$jam_selesai','$denda','$ttl')") or die(mysqli_error($koneksi));

	header ("location:transaksi.php");
?>