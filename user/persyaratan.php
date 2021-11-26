<?php
	include 'sessionchecker1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rules</title>
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

	<div class="konten">
		<ul style="margin-left: 60px;">
			<li style="margin-bottom: 30px;"><h3>Field Booking Requirements</h3>
				<ul style="margin-top: 20px; list-style-type: square;">
					<li>Bring your ID card / driver's license to our admin outlet when you pay for the field you book</li>
				</ul>
			</li>
			<li ><h3>Terms and Conditions</h3>
				<ul style="margin-top: 20px; list-style-type: square;">
					<li style="margin-top: 20px;">Complete field booking requirements</li>
					<li style="margin-top: 20px;">Fill in the booking form agreement from us</li>
					<li style="margin-top: 20px;">Pay the Commitment fee</li>
					<li style="margin-top: 20px;">Come 10 minutes before playing</li>
				</ul>
			</li>
		</ul>
	</div>
	<br><br><br><br><br><br>
	<br>
	<div style="background-color: darkblue; height: 25px; margin-bottom: 10px; width: 100%;">
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