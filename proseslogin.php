<?php
include 'koneksi.php';

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "select * from login where username = '$username' and password='$password'");

$i = 1;
while ($data = mysqli_fetch_array($sql)) {
    $user = $data['username'];
    $pass = $data['password'];
    $status = $data['status'];
    $i++;
}

if ($username == "" || $password == "") {
    echo "<script>
	  alert('Login Gagal!');
	  window.location = 'Login.php';
	  </script>
	  ";
}

if (($username == $user ) && ($password == $pass )) {
    if (($status == 'admin') && ($username == 'admin')) {
        $_SESSION['username'] = $username;

        echo "<script>window.location='menuadmin.php'</script>";
    } else {
        $_SESSION['username'] = $username;

        echo "<script>window.location='user/menuuser.php'</script>";
    } 
}

?>