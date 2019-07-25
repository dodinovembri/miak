<?php  
	include 'module/koneksi.php';

	$id_komposisi = $_GET['id_komposisi'];
	$query = mysqli_query($koneksi, "DELETE FROM komposisis WHERE id_komposisi='$id_komposisi'");

	echo "<script>window.location.href='?module=komposisi_barangs'</script>";
?>