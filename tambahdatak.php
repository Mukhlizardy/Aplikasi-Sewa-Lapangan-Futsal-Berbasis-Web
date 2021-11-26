<?php 
  include 'sessionchecker.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Court Data</title>
  <link rel="stylesheet" type="text/css" href="stylemenu.css">
</head>
<body>
  <div style="position: relative; min-height: 100%">
    <header>
      <p class="judul">Selamat Datang, Admin |<a href="logout.php" class="logout"><img src="img/logout.png" style="width: 20px"> Logout</a></p>
      <input type="checkbox" id="tag-menu"/>
      <label class="menu-bar" for="tag-menu"><img src="img/menu.png" style="width: 25px;"> Menu</label>
      <div class="jw-drawer">
        <nav>
          <ul>
            <li><a href="menuadmin.php"><img src="img/home.png" style="width: 25px;">&nbsp;BOOKING LIST</a></li>
            <li><a href="datalapangan.php"><img src="img/data.png" style="width: 25px;">&nbsp;Field Data</a></li>
            <li><a href="datapelanggan.php"><img src="img/data.png" style="width: 25px;">&nbsp;Customer Data</a></li>
            <li><a href="datatransaksi.php"><img src="img/data.png" style="width: 25px;">&nbsp;Transaction Data</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="content">
      <h1>add court data</h1>
      <hr>
      <form method="POST" action="prosestambahdatak.php">
        <table style="background-color: seashell; padding: 20px; border-radius: 20px;">
          <tr>
            <td>Court line</td>
            <td>:</td>
            <td><input class="input" type="text" name="line_nomor"></td>
          </tr>
          <tr>
            <td>Picture</td>
            <td>:</td>
            <td><input class="input" type="file" name="gambar"></td>
          </tr>
          <tr>
            <td>Type</td>
            <td>:</td>
            <td><input class="input" type="text" name="merk"></td>
          </tr>
          <tr>
            <td>Size</td>
            <td>:</td>
            <td><input class="input" type="text" name="tipe"></td>
          </tr>
          <tr>
            <td>Standarts</td>
            <td>:</td>
            <td><input class="input" type="text" name="warna"></td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td><select class="input" name="status">
                  <option value="Bebas">free</option>
                  <option value="Disewa">booked</option>
                </select>
            </td>
          </tr>
          <tr>
            <td colspan="3" align="center"><input class="btncreate" type="submit" name="simpan" value="Simpan">
            <input class="btncreate" type="reset" name="hapus" value="Hapus"></td>
          </tr>
        </table>
      </form>
    </div>

    <footer class="footer">
      <p>&copy;2018 DXA FUTSAL BOOKING - Online Booking Solution. All Rights Reserved</p>
    </footer>
  </div>

</body>
</html>