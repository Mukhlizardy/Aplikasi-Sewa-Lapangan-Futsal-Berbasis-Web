<?php
include 'koneksi.php';

include 'sessionchecker.php';

$kode_sewa = $_POST['kode_sewa'];
$id_ktp = $_POST['id_ktp'];
$nama = $_POST['nama'];
$line_nomor = $_POST['line_nomor'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$warna = $_POST['warna'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali = $_POST['tgl_kembali'];
$tgl_dikembalikan = $_POST['tgl_dikembalikan'];
$denda = 50000;
$status = 'Bebas';

$start_date = new DateTime("$tgl_kembali");
$end_date = new DateTime("$tgl_dikembalikan");
$interval = $start_date->diff($end_date);
$lama = $interval->days;
$hasil_denda = $lama*50000;

$start_date = new DateTime("$tgl_sewa");
$end_date = new DateTime("$tgl_kembali");
$interval = $start_date->diff($end_date);
$hasil = $interval->days;
$total_harga = (($hasil * 100000)+$hasil_denda);

$query = mysqli_query($koneksi, "update datak set status='$status' where line_nomor='$line_nomor'");
$query1 = mysqli_query ($koneksi, "update transaksi set id_ktp='$id_ktp',nama='$nama',line_nomor='$plat_nomor',merk='$merk',tipe='$tipe',warna='$warna',tgl_sewa='$tgl_sewa',tgl_kembali='$tgl_kembali',tgl_dikembalikan='$tgl_dikembalikan',hasil_denda='$hasil_denda',total_harga='$total_harga' where kode_sewa='$kode_sewa'");

if (($query)&&($query1)) {
	echo "<script>window.location='datatransaksi.php'</script>";
}
else{
	echo "Data Transaksi Gagal Diubah!";
}
?>