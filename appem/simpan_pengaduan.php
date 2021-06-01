<?php
require'koneksi.php';
$tgl=$_POST['tgl_pengaduan'];
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

move_uploaded_file($file,"foto/".$ft);
$sql=mysqli_query($conn,"INSERT into pengaduan values('01291','$tgl','$nik','$isi','$ft','$file','$st'");

{
	var_dump($sql);
	?>
	<script type="text/javascript">
		alert("Data berhasil disimpan,makasih");
		window.location="masyarakat.php";
	</script>
	<?php
}
?> 