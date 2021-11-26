<?php
	include 'sessionchecker1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transaction List</title>
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
		<h2>Transaction list</h2><br>
        <div>
          <table class="demo-table">
          <thead style="text-align: center;">
          <tr>
          	<th>NO</th>
          	<th>Booking Code</th>
          	<th>Court Line</th>
          	<th>Type</th>
          	<th>Court Size</th>
          	<th>Standarts</th>
          	<th>Booking Date</th>
          	<th>From</th>
          	<th>To</th>
          </tr>
      	</thead>
		<?php
        include '../koneksi.php';
		$usr=$_SESSION['username'];
		$no=1;
        $sql = mysqli_query($koneksi, "select * from pelanggan p INNER JOIN login l ON p.username=l.username INNER JOIN transaksi t ON p.id_ktp=t.id_ktp where l.username='$usr'") or die (mysqli_error());
        while($query =  mysqli_fetch_array($sql)) {        
      ?>
      	<tbody>
            <tr>
              	<td><?php echo $no;?></td>
              	<td><?php echo $query['kode_sewa'];?></td>
                <td><?php echo $query['line_nomor'];?></td>
                <td><?php echo $query['merk'];?></td>
                <td><?php echo $query['tipe'];?></td>
                <td><?php echo $query['warna'];?></td>
                <td><?php echo $query['tgl_sewa'];?></td>
                <td><?php echo $query['tgl_kembali'];?></td>
                <td><?php echo $query['jam_selesai'];?></td>
                
            </tr>
          </tbody>	
        <?php $no++; }?>
        </table>
		</center>
      </div>
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