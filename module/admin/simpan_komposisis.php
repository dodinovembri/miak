<?php  
	include 'module/koneksi.php';

	$id_barang = $_POST['id_barang'];
	$id_bahan_baku = $_POST['id_bahan_baku'];
	$jumlah = $_POST['jumlah'];	

	$query = mysqli_query($koneksi, "INSERT INTO komposisis (`id_barang_tersedia`, `id_bahan_baku`, `jumlah`) VALUES ('$id_barang', '$id_bahan_baku', '$jumlah')");
	if (!$query) {
		die("Penyimpanan Gagal");
	}
	echo "<script>window.location.href = '?module=komposisi_barangs';</script>";

?>