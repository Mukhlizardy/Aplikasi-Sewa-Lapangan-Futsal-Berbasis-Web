<?php 
	include 'sessionchecker1.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking Form</title>
    <link rel="stylesheet" type="text/css" href="dist/timepicker.min.css">
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
						<li><a href="dataakun.php">Account Data</a></li>
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
        $line_nomor = $_GET['line_nomor'];
        $sql = mysqli_query($koneksi, "select * from datak where line_nomor='$line_nomor'") or die (mysqli_error());
        $sql1 = mysqli_query($koneksi, "select * from pelanggan where username='$usr'") or die (mysqli_error());
        while( ($query1 =  mysqli_fetch_array($sql1)) && ($query =  mysqli_fetch_array($sql)) ) {
     ?>

	<div class="konten">
		<center>
		<h2>FORM SEWA</h2><br>
		</center>
		<div class="kontenform">
		<div class="artikel">
            <form action="prosessewa.php" method="post">
                <div class="grup">
                	<input type="text" name="id_ktp" value="<?php echo $query1['id_ktp'];?>">
                </div>
                <div class="grup">
                	<input type="text" name="nama" value="<?php echo $query1['nama'];?>">
                </div>
                <div class="grup">
                	<input type="text" name="line_nomor" value="<?php echo $query['line_nomor'];?>">
                </div>
                <div class="grup">
                	<input type="text" name="merk" value="<?php echo $query['merk'];?>">
                </div>
                <div class="grup">
                	<input type="text" name="tipe" value="<?php echo $query['tipe'];?>">
                </div>
                <div class="grup">
                    <input type="text" name="warna" value="<?php echo $query['warna'];?>">
                </div>
                <div class="grup">
                	<input type="text" name="tgl" placeholder="DATE :" readonly="readonly" style="width: 150px;margin-right: 10px; font-size: 13px;">
                	<input type="date" name="tgl_sewa" placeholder="yyyy/mm/dd">
                </div>
                <div class="grup">
                	<input type="date" name="tgl" placeholder="FROM :" readonly="readonly" style="width: 150px; margin-right: 10px; font-size: 13px;">
                    <input type="time" name="tgl_kembali" data-toggle="timepicker">
                    <script src="dist/timepicker.min.js"></script>
                    <script>
            document.addEventListener("DOMContentLoaded", function(event)
            {
                timepicker.load({
                    interval: 15,
                    defaultHour: 8
                });
            });
        </script>
        <div class="grup">
                    <input type="text" name="tgl" placeholder="TO :" readonly="readonly" style="width: 150px; margin-right: 10px; font-size: 13px;">
                    <input type="time" name="jam_selesai" data-toggle="timepicker">
                    <script src="dist/timepicker.min.js"></script>
                    <script>
            document.addEventListener("DOMContentLoaded", function(event)
            {
                timepicker.load({
                    interval: 15,
                    defaultHour: 8
                });
            });
        </script>
                </div> 
                <div class="grup">
                    <label style="font-size: 11pt; color: black;">*Booking Cost Rp.120.000 per hours</label><br>
                </div>
                <div class="grup">
                    <input type="checkbox" name="syarat"> i agree the <a href="persyaratan.php" style="color: red; text-decoration: none;">RULES</a>
                </div>               
                <div class="grup">
                	<input type="submit" name="submit" value="BOOK">
                </div>
            </form>
        </div>
    	</div>
	</div>
<?php }?>

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