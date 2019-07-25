<?php  
	include 'module/koneksi.php';

	$id_bahan_baku = $_GET['id_bahan_baku'];
	$query = mysqli_query($koneksi, "DELETE FROM bahan_baku WHERE id_bahan_baku='$id_bahan_baku'");

	echo "<script>window.location.href='?module=kelola_bahan_baku'</script>";
?>