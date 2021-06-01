<?php
require 'koneksi.php';
$use=$_POST['Username'];
$pass=$_POST['Password'];
$sql=mysqli_query($conn,"SELECT * from masyarakat where Username='$use' and Password='$pass'");
$cek=mysqli_num_rows($sql);
if ($cek>0)
{
	$data=mysqli_fetch_array($sql);
	session_start();
	$_SESSION['nama']=$data['Nama'];
	$_SESSION['nik']=$data['nik'];
	header('location:masyarakat.php');

}
?>