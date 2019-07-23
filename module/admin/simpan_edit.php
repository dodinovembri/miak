<?php  
	include 'module/koneksi.php';

	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];


	$query = mysqli_query($koneksi, "UPDATE barang SET `id_barang`='$id_barang', `nama_barang`='$nama_barang', `satuan`='$satuan', `harga`='$harga' WHERE id_barang='$id_barang'");
	if (!$query) {
		die("Penyimpanan Gagal");
	}
	echo "<script>window.location.href = '?module=tampil_barang';</script>";

?>