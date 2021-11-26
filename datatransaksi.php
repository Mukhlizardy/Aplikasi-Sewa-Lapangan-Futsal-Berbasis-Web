<?php
  include 'sessionchecker.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trasaction Data</title>
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
      <h1>TRANSACTION LIST</h1>
      <hr>
      <br><br>
      <div>
          <table class="demo-table">
          <thead style="font-size: 11px;">
          <tr>
            <th>No</th>
            <th>Booking Code</th>
            <th>Name</th>
            <th>Booking Date</th>
            <th>From</th>
            <th>To</th>
            <th>Action</th>
          </tr>
        </thead>
    <?php
        include 'koneksi.php';
        $no=1;
        $sql = mysqli_query($koneksi, "select * from transaksi") or die (mysqli_error());
        while($query =  mysqli_fetch_array($sql)) {
      ?>
        <tbody>
            <tr>
                <td><?php echo $no;?></td>                
                <td><?php echo $query['kode_sewa'];?></td>
                <td><?php echo $query['nama'];?></td>
                <td><?php echo $query['tgl_sewa'];?></td>
                <td><?php echo $query['tgl_kembali'];?></td>
                <td><?php echo $query['jam_selesai'];?></td>
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