<?php  
	include 'module/koneksi.php';

	$id_barang = $_GET['id_barang'];
	$query = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id_barang'");

	echo "<script>window.location.href='?module=tampil_barang'</script>";
?>