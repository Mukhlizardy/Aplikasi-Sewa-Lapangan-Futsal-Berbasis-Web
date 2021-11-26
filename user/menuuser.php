<?php
	include 'sessionchecker1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu User</title>
	<link rel="stylesheet" type="text/css" href="styleu.css">
</head>
<body>
	<header>
		<img src="imguser/emblem.png" style="width: 150px; float: left; margin-left: 140px;">
		<div class="menu-wrapper">
			<ul class="menu-horizontal">
				<li><a href="menuuser.php">Home</a></li>
				<li><a href="persyaratan.php">Rules</a></li>
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
		<h2 style="margin-left: 140px; color: rgb(64, 64, 64);">Welcome<br>Online Booking System <p style="color: red;">DXA FUTSAL</p></h2>
		<div class="container">
			<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
			<input type="radio" name="slide" class="radio-nav" id="nav-2"/>
			<input type="radio" name="slide" class="radio-nav" id="nav-3"/>
			<ul class="slide">
				<li class="slide-1">
				<img src="imguser/s1.jpg"/>
				</li>
				<li class="slide-2">
				<img src="imguser/s2.jpg"/>
				</li>
			</ul>
			<div class="nav-arrow nav-next">
				<label class="nav-1" for="nav-1">></label>
				<label class="nav-2" for="nav-2">></label>
			</div>
			<div class="nav-arrow nav-prev">
				<label class="nav-1" for="nav-1"><</label>
				<label class="nav-2" for="nav-2"><</label>
			</div>
		</div>
		<div class="perkenalan">
			<center><h3>Introduce</h3></center>
			<p class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DXA Futsal is a futsal field that provides a very strategic field in Yogyakarta that is able to provide the best games to players. DXA Futsal serves online field bookings with a choice of interlock and synthetic turf fields.
			By providing a variety of attractive choices, we need customers to get comfort, satisfaction and pleasure in helping us.</p>
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