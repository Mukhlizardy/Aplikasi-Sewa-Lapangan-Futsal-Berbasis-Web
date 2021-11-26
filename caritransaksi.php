<?php
  include 'sessionchecker.php';
  $cari = $_POST['cari'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Transaksi</title>
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
      <h1>TRANSAKSI LIST</h1>
      <hr>
      <form method="POST" action="caritransaksi.php">
          <input class="search" type="search" placeholder="..." required name="cari"> 
          <input class="button" type="submit" value="Search">   
      </form>
      <br><br>
      <div>
          <table class="demo-table">
          <thead style="font-size: 11px;">
          <tr>
            <th>NO</th>
            <th>Kode Sewa</th>
            <th>Nama</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Dikembalikan</th>
            <th>Denda</th>
            <th>Total Harga</th>
            <th> Aksi</th>
          </tr>
        </thead>
    <?php
        include 'koneksi.php';
        $no=1;
        $sql = mysqli_query($koneksi, "select * from transaksi where kode_sewa='$cari' || nama='$cari' || tgl_sewa='$cari' || tgl_kembali='$cari' || tgl_dikembalikan='$cari' || hasil_denda='$cari' || total_harga='$cari'") or die (mysqli_error());
        while( $query = mysqli_fetch_array($sql)) {
          
      ?>
        <tbody>
            <tr>
                <td><?php echo $no;?></td>                
                <td><?php echo $query['kode_sewa'];?></td>
                <td><?php echo $query['nama'];?></td>
                <td><?php echo $query['tgl_sewa'];?></td>
                <td><?php echo $query['tgl_kembali'];?></td>
                <td><?php echo $query['tgl_dikembalikan'];?></td>
                <td><?php echo $query['hasil_denda'];?></td>
                <td><?php echo $query['total_harga'];?></td>
                <td class="aksi"> <a class="hapus" style="background-color: black; color: white; border: 1px solid dimgrey;" href="detailtransaksi.php?kode_sewa=<?php echo $query['kode_sewa']; ?>">DETAIL</a> <a class="edit" style="background-color: aquamarine; color: black; border: 1px solid black;" href="confirmtransaksi.php?kode_sewa=<?php echo $query['kode_sewa']; ?>">CONFIRM</a>
                
              </td>
            </tr>
          </tbody>  
        <?php $no++; }?>
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