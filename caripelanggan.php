<?php
  include 'sessionchecker.php';
  $cari = $_POST['cari'];
?>
<!DOCTYPE html>
<html>
<head>
  <title> Customer Data</title>
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
      <h1>CUSTOMER LIST</h1>
      <hr>
      <form method="POST" action="caripelanggan.php">
          <input class="search" type="search" placeholder="..." required name="cari"> 
          <input class="button" type="submit" value="Search">   
      </form>
      <br><br>
        <div>
          <table class="demo-table" width="1100px;">
          <thead style="text-align: center;">
              <tr>
                <th> No</th>
                <th> User ID </th>
                <th> Full Name </th>
                <th> Birth of Date </th>
                <th> Gender </th>
                <th> Phone </th>
                <th> Address </th>
                <th> Username </th>
              </tr>
          </thead>
      <?php
        include 'koneksi.php';
        $no=1;
        $sql = mysqli_query($koneksi, "select * from pelanggan where id_ktp='$cari' || nama='$cari' || tgl_lhr='$cari' || jk='$cari' || no_telp='$cari' || alamat='$cari' || username='$cari'") or die (mysqli_error());
        while( $query =  mysqli_fetch_array($sql)) {
          
      ?>
          <tbody>
            <tr>
              <td> <?php echo $no;?></td>
              <td> <?php echo $query['id_ktp'];?></td>
              <td> <?php echo $query['nama'];?></td>
              <td> <?php echo $query['tgl_lhr'];?></td>
              <td> <?php echo $query['jk'];?></td>
              <td> <?php echo $query['no_telp'];?></td>
              <td> <?php echo $query['alamat'];?></td>
              <td> <?php echo $query['username'];?></td>
            </tr>
          </tbody>
        <?php $no++; } ?>
        </table>
      </div>
    </div>

    <footer class="footer">
      <p>&copy;2018 DXA FUTSAL BOOKING - Online Booking Solution. All Rights Reserved</p>
    </footer>
  </div>

</body>
</html>