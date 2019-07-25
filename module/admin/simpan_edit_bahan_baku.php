<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_POST['id_bahan_baku'];
	$nama_bahan_baku = $_POST['nama_bahan_baku'];
	$satuan_bahan_baku = $_POST['satuan_bahan_baku'];

	$query = mysqli_query($koneksi, "UPDATE bahan_baku SET `nama_bahan_baku`='$nama_bahan_baku', `satuan_bahan_baku`='$satuan_bahan_baku' WHERE id_bahan_baku='$id_bahan_baku'");
	if (!$query) {
		die("Penyimpanan Gagal");
	}
	echo "<script>window.location.href = '?module=kelola_bahan_baku';</script>";

?>