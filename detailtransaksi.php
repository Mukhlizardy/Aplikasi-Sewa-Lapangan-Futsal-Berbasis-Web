<?php
  include 'sessionchecker.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking Detail</title>
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
      <h1>Booking Detail</h1>
      <hr>
      <br><br>
      <?php
        include 'koneksi.php';
        $kode_sewa = $_GET['kode_sewa'];
        $sql = mysqli_query($koneksi, "select * from transaksi where kode_sewa='$kode_sewa'") or die (mysqli_error());
        while( $query =  mysqli_fetch_array($sql) ) {
     ?>
      <div>
          <table class="demo-table">
          <tr> 
            <td>Booking Code</td>
            <td>:</td>
            <td><?php echo $query['kode_sewa'];?></td>
          </tr>
          <tr>  
            <td>User ID</td>
            <td>:</td>
            <td><?php echo $query['id_ktp'];?></td>                
          </tr>
          <tr>  
            <td>Name</td>
            <td>:</td>
            <td><?php echo $query['nama'];?></td>
          </tr>
          <tr>  
            <td>Court Line</td>
            <td>:</td>
            <td><?php echo $query['line_nomor'];?></td>
          </tr>
          <tr>  
            <td>Type</td>
            <td>:</td>
            <td><?php echo $query['merk'];?></td>
          </tr>
          <tr>  
            <td>Court Size</td>
            <td>:</td>
            <td><?php echo $query['tipe'];?></td>
          </tr>
          <tr>  
            <td>Courts Standarts</td>
            <td>:</td>
            <td><?php echo $query['warna'];?></td>
          </tr>
          <tr>  
            <td>Booking Date</td>
            <td>:</td>
            <td><?php echo $query['tgl_sewa'];?></td>                 
          </tr>
          <tr>  
            <td>From</td>
            <td>:</td>
            <td><?php echo $query['tgl_kembali'];?></td>                
          </tr>
          <tr>  
            <td>To</td>
            <td>:</td>
            <td><?php echo $query['jam_selesai'];?></td>                
          </tr>
        <?php  }?>
        </table>
    </center>
      </div>
  </div>

    <footer class="footer">
      <p>&copy;2018 DXA FUTSAL BOOKING - Online Booking Solution. All Rights Reserved</p>
    </footer>
  </div>

</body>
</html>