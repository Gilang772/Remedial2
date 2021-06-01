<?php
require_once 'koneksi.php';

$nik=$_POST['nik'];
$Nama=$_POST['Nama'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$telp=$_POST['telp'];
	
	$query =  mysqli_query($conn,"INSERT into masyarakat values('$nik','$Nama','$Username','$Password','$telp')");
	if ($query) {
		echo mysqli_errno($query);
	}

echo "Data telah disimpan silahkan login";
header("location: index.php");
?>
