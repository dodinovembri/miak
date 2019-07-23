<?php  
	include 'module/koneksi.php';

	$id_barang_tersedia = $_GET['id_barang_tersedia'];
	$query = mysqli_query($koneksi, "DELETE FROM barang_tersedia WHERE id_barang_tersedia='$id_barang_tersedia'");

	echo "<script>window.location.href='?module=kelola_product'</script>";
?>