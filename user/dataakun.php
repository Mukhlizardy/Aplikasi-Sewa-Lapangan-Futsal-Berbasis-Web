<?php
	include 'sessionchecker1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Data</title>
	<link rel="stylesheet" type="text/css" href="styleu.css">
</head>
<body>
	<header>
		<img src="imguser/emblem.png" style="width: 150px; float: left; margin-left: 140px;">
		<div class="menu-wrapper">
			<ul class="menu-horizontal">
				<li><a href="menuuser.php">HOME</a></li>
				<li><a href="persyaratan.php">RULES</a></li>
				<li><a href="sewa.php">BOOKING</a></li>
				<li><a href="">PROFILE<span class="arrow"></span></a>
					<ul class="submenu level-1">
						<li><a href="dataakun.php">Account</a></li>
						<li><a href="transaksi.php">Transaction List</a></li>
						<li><a href="../logout.php">Logout</a></li>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</header>

	<?php
        include '../koneksi.php';
		$usr=$_SESSION['username'];
        $sql = mysqli_query($koneksi, "select * from pelanggan where username='$usr'") or die (mysqli_error());
        while( $query =  mysqli_fetch_array($sql) ) {
     ?>

	<div class="konten">
		<center>
		<h2>Account Data</h2><br>
		<div>
          <table class="demo-table">
          <tbody>
            <tr>
            	<td>ID KTP</td>
            	<td>:</td>
              	<td><?php echo $query['id_ktp'];?></td>
            </tr>
            <tr>
              	<td>NAMA</td>
            	<td>:</td>
              	<td><?php echo $query['nama'];?></td>
            </tr>
            <tr>
              	<td>TANGGAL LAHIR</td>
            	<td>:</td>
                <td><?php echo $query['tgl_lhr'];?></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
            	<td>:</td>
                <td><?php echo $query['jk'];?></td>
            </tr>
            <tr>
                <td>TELEPON</td>
            	<td>:</td>
                <td><?php echo $query['no_telp'];?></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
            	<td>:</td>
                <td><?php echo $query['alamat'];?></td>
            </tr>
            <tr>
                <td>USERNAME</td>
            	<td>:</td>
                <td><?php echo $query['username'];?></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
            	<td>:</td>
                <td><?php echo $query['password'];?></td>
            </tr>
          </tbody>
        	</table>
            <br>
        </div>
    </center>
	</div>
<?php } ?>

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