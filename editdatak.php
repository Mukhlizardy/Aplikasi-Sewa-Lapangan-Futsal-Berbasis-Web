<?php
  include 'sessionchecker.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Field Data</title>
  <link rel="stylesheet" type="text/css" href="stylemenu.css">
</head>

<?php
  include "koneksi.php";

  $line_nomor = $_GET['line_nomor'];

  $query = mysqli_query($koneksi, "select * from datak where line_nomor = '$line_nomor'") or die (mysqli_error());

  $data = mysqli_fetch_array($query) or die (mysqli_error());
?>

<body>
  <div style="position: relative; min-height: 100%">
    <header>
      <p class="judul">Welcome, Admin |<a href="logout.php" class="logout"><img src="img/logout.png" style="width: 20px"> Logout</a></p>
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
      <h1>Edit Field Data</h1>
      <hr>
      <form method="POST" action="proseseditdatak.php">
        <table style="background-color: seashell; padding: 20px; border-radius: 20px;">
          <tr>
            <td>Plat Nomor</td>
            <td>:</td>
            <td><input class="input" type="text" name="line_nomor" value="<?php echo $data['line_nomor']; ?>" readonly="readonly"><input class="input" type="hidden" name="line_nomor" value="<?php echo $data['line_nomor']; ?>"></td>
          </tr>
          <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input class="input" type="file" name="gambar" value="<?php echo $data['gambar']; ?>"></td>
          </tr>
          <tr>
            <td>Merk</td>
            <td>:</td>
            <td><input class="input" type="text" name="merk" value="<?php echo $data['merk']; ?>"></td>
          </tr>
          <tr>
            <td>Tipe</td>
            <td>:</td>
            <td><input class="input" type="text" name="tipe" value="<?php echo $data['tipe']; ?>"></td>
          </tr>
          <tr>
            <td>Warna</td>
            <td>:</td>
            <td><input class="input" type="text" name="warna" value="<?php echo $data['warna']; ?>"></td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td><select class="input" name="status">
                  <option value="Bebas" <?php if($data['status']=="Bebas") {echo "selected";} ?>>Bebas</option>
                  <option value="Disewa" <?php if($data['status']=="Disewa") {echo "selected";} ?>>Disewa</option>
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