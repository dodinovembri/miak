<?php  
	include 'module/koneksi.php';

	$id_barang_tersedia = $_POST['id_barang_tersedia'];
	$nama_barang = $_POST['nama_barang'];

	$query = mysqli_query($koneksi, "UPDATE barang_tersedia SET `nama`='$nama_barang' WHERE id_barang_tersedia='$id_barang_tersedia'");
	if (!$query) {
		die("Penyimpanan Gagal");
	}
	echo "<script>window.location.href = '?module=kelola_product';</script>";

?>