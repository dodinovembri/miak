<?php  
	include 'module/koneksi.php';

	$id_barang = $_GET['id_barang'];
	$query = mysqli_query($koneksi, "DELETE FROM komposisi WHERE id_barang='$id_barang'");

	echo "<script>window.location.href='?module=komposisi_barang'</script>";
?>