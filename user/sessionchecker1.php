<?php
session_start();
if(empty($_SESSION['username'])){
	echo "<script>alert ('Anda harus login') </script>";
	echo "<script>window.location='../login.php'</script>";
$session= $_SESSION['username'];
}
?>