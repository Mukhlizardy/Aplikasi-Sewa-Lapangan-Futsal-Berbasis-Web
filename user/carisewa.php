<?php
	include 'sessionchecker1.php';
	$cari = $_POST['cari'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sewa</title>
	<link rel="stylesheet" type="text/css" href="styleuser.css">
</head>
<body>
	<header>
		<img src="imguser/logo.png" style="width: 150px; float: left; margin-left: 140px;">
		<div class="menu-wrapper">
			<ul class="menu-horizontal">
				<li><a href="menuuser.php">BERANDA</a></li>
				<li><a href="persyaratan.php">PERSYARATAN</a></li>
				<li><a href="sewa.php">SEWA</a></li>
				<li><a href="">PROFIL<span class="arrow"></span></a>
					<ul class="submenu level-1">
						<li><a href="dataakun.php">Data Akun</a></li>
						<li><a href="transaksi.php">Daftar Transaksi</a></li>
						<li><a href="../logout.php">Logout</a></li>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</header>

	<div class="konten">
		<center>
		<h2>Field List</h2><br>
		<form method="POST" action="caripelanggan.php">
          <input class="search" type="search" placeholder="..." required name="cari"> 
          <input class="button" type="submit" name="search" value="Search" >  
      </form>
      <br><br>
		<table border="1" class="demo-table">
			<?php
		        include '../koneksi.php';
		        $sql = mysqli_query($koneksi, "select * from datak where (status='Bebas') and (line_nomor = '$cari' || merk = '$cari' || tipe = '$cari' || warna = '$cari' || status = '$cari')") or die (mysqli_error());
		        while( $query =  mysqli_fetch_array($sql)) {
		          
		      ?>
			<tbody style="font-size: 20px;">
			<tr>
				<td style="text-align: center;"> <center><img src="../img/<?php echo $query['gambar'];?>" width="300px"></center><?php echo $query['line_nomor'];?> 
				</td>
				<td width="350px;"><?php echo $query['merk'];?>
              		<br> <?php echo $query['tipe'];?>
              		<br> <?php echo $query['warna'];?>
              	</td>
				<td class="aksi"> <a class="sewa" style="background-color: aquamarine; color: black; border: 1px solid black;" href="formsewa.php?line_nomor=<?php echo $query['line_nomor']; ?>">BOOKING</a>
				</td>
			</tr>
		</tbody>
		<?php } ?>
		</table>
		</center>
	</div>

	<div style="background-color: darkblue; height: 25px; margin-bottom: 20px; width: 100%;">
	</div>

	<div class="footeratas">
		<ul>
			<li style="font-size: 19px; font-weight: bold;"><img src="imguser/alamat.png" width="20px;">Address<br></li>
            <li style="font-size: 19px; font-weight: bold;"><img src="imguser/telp.png" width="20px;">Phone<br></li>
            <li style="font-size: 19px; font-weight: bold;"><img src="imguser/email.png" width="20px;">E-mail<br></li>
		</ul>
		<ul>
			<li>Mataram Streets 87F,<br>Caturtunggal, Depok, Sleman,<br>Yogyakarta<br>ZIP Code 55281</li>
            <li>(0274) 122-42-102<br>we are open 24/7</li>
            <li>dxamanagement@gmail.com</li>
		</ul>
	</div>
	<footer class="footer">
      <p>&copy;2018 DXA FUTSAL BOOKING - Online Booking Solution. All Rights Reserved</p>
    </footer>
</body>
</html>