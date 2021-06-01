<?php
if(isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
	  case 'Tulis_pengaduan';
	  include 'Tulis_pengaduan.php';
	  break;

	  case 'Lihat laporan';
	  include 'Lihat_laporan';
	  break;


	}
}
else
{
	?>
	Selamat datang di aplikasi pelaporan pengaduan masyarakat yang di buat untuk melaporkan pelanggaran atau penyinpangan di masyarakat<br><br>
	anda login sebagai :<h2><b> <?php echo $_SESSION['nama'];
}
?>