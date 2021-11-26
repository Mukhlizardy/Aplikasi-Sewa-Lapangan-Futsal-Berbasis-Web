<?php
  include 'sessionchecker.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Court Data</title>
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
      <h1>FIELD LIST</h1>
      <hr>
      <form method="POST" action="carilapangan.php">
          <input class="search" type="search" placeholder="..." required name="cari"> 
          <input class="button" type="submit" value="Search">   
      </form>
          <input class="btncreate" type="button" name="create" value="Create Data" onclick="window.location = 'tambahdatak.php';">
      <br><br>
        <center>
        <div>
          <table class="demo-table">
          <thead>
              <tr>
                <th> No </th>
                <th> Court Line </th>
                <th> Type </th>
                <th> Court Size </th>
                <th> Standarts </th>
                <th> Status </th>
                <th> Aksi</th>
              </tr>
          </thead>
      <?php
        include 'koneksi.php';
        $no=1;
        $sql = mysqli_query($koneksi, "select * from datak") or die (mysqli_error());
        while( $query =  mysqli_fetch_array($sql)) {
      ?>
          <tbody>
            <tr>
              <td> <?php echo $no;?></td>
              <td style="text-align: center;"> <center><img src="img/<?php echo $query['gambar'];?>" width="150px"></center><?php echo $query['line_nomor'];?> </td>
              <td> <?php echo $query['merk'];?></td>
              <td> <?php echo $query['tipe'];?></td>
              <td> <?php echo $query['warna'];?></td>
              <td> <?php echo $query['status'];?></td>
              <td class="aksi"> <a class="edit" style="background-color: aquamarine; color: black; border: 1px solid black;" href="editdatak.php?line_nomor=<?php echo $query['line_nomor']; ?>">EDIT</a>
                <a class="hapus" style="background-color: black; color: white; border: 1px solid dimgrey;" href="hapusdatak.php?line_nomor=<?php echo $query['line_nomor']; ?>">HAPUS</a> 
              </td>
            </tr>
          </tbody>
        <?php $no++; } ?>
        </table>
      </div>
      </center>
    </div>

    <footer class="footer">
      <p>&copy;2018 DXA FUTSAL BOOKING - Online Booking Solution. All Rights Reserved</p>
    </footer>
  </div>

</body>
</html>