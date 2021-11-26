<?php
  include 'sessionchecker.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Transaction Confirm</title>
  <link rel="stylesheet" type="text/css" href="stylemenu.css">
</head>
<body>
  <div style="position: relative; min-height: 100%">
    <header>
      <p class="judul">Welcome, Admin |<a href="login.php" class="logout"><img src="img/logout.png" style="width: 20px"> Logout</a></p>
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
      <h1>TRANSACTION CONFIRM</h1>
      <hr>
      <br><br>
      <?php
        include 'koneksi.php';
        $kode_sewa = $_GET['kode_sewa'];
        $sql = mysqli_query($koneksi, "select * from transaksi where kode_sewa='$kode_sewa'") or die (mysqli_error());
        while( $query =  mysqli_fetch_array($sql) ) {
     ?>
    <div class="kontenform">
    <div class="artikel">
            <form action="prosesconfirm.php" method="post">
                <div class="grup">
                  <input type="text" name="kode_sewa" value="<?php echo $query['kode_sewa'];?>" readonly="readonly">
                </div>
                <div class="grup">
                  <input type="text" name="id_ktp" value="<?php echo $query['id_ktp'];?>" readonly="readonly">
                </div>
                <div class="grup">
                  <input type="text" name="nama" value="<?php echo $query['nama'];?>" readonly="readonly">
                </div>
                <div class="grup">
                  <input type="text" name="line_nomor" value="<?php echo $query['line_nomor'];?>" readonly="readonly">
                </div>
                <div class="grup">
                  <input type="text" name="merk" value="<?php echo $query['merk'];?>" readonly="readonly">
                </div>
                <div class="grup">
                  <input type="text" name="tipe" value="<?php echo $query['tipe'];?>" readonly="readonly">
                </div>
                <div class="grup">
                    <input type="text" name="warna" value="<?php echo $query['warna'];?>" readonly="readonly">
                </div>
                <div class="grup">
                  <input type="text" name="tgl" placeholder="Booking Date :" readonly="readonly" style="width: 150px;margin-right: 10px; font-size: 13px;">
                  <input type="date" name="tgl_sewa" value="<?php echo $query['tgl_sewa'];?>" readonly="readonly">
                </div>
                <div class="grup">
                  <input type="text" name="tgl" placeholder="From :" readonly="readonly" style="width: 150px; margin-right: 10px; font-size: 13px;">
                  <input type="date" name="tgl_kembali" value="<?php echo $query['tgl_kembali'];?>" readonly="readonly">
                </div> 
                <div class="grup">
                  <input type="text" name="tgl" placeholder="To :" readonly="readonly" style="width: 150px; margin-right: 10px; font-size: 13px;">
                  <input type="date" name="jam_selesai" value="<?php echo $query['jam_selesai'];?>" reandonly="reandonly">
                </div>           
                <div class="grup">
                  <input type="submit" name="submit" value="CONFIRM">
                </div>
            </form>
        </div>
      </div>
  </div>
<?php }?>
  </div>

    <footer class="footer">
      <p>&copy;2018 DXA FUTSAL BOOKING - Online Booking Solution. All Rights Reserved</p>
    </footer>
  </div>

</body>
</html>