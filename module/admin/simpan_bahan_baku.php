<?php  
	include 'module/koneksi.php';
	
	$nama_bahan_baku = $_POST['nama_bahan_baku'];
	$satuan_bahan_baku = $_POST['satuan_bahan_baku'];


		$query = mysqli_query($koneksi, "INSERT INTO bahan_baku (`nama_bahan_baku`, `satuan_bahan_baku`) VALUES ( '$nama_bahan_baku', '$satuan_bahan_baku')");
		if (!$query) {
			die("Penyimpanan Gagal");
		}
		echo "<script>window.location.href = '?module=kelola_bahan_baku';</script>";

?>