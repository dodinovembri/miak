<?php  
	include 'module/koneksi.php';

	$id_komposisi = $_POST['id_komposisi'];
	$id_barang_tersedia = $_POST['id_barang_tersedia'];
	$id_bahan_baku = $_POST['id_bahan_baku'];
	$jumlah = $_POST['jumlah'];

	echo $id_komposisi;

	$query = mysqli_query($koneksi, "UPDATE komposisis SET `id_barang_tersedia`='$id_barang_tersedia', `id_bahan_baku`='$id_bahan_baku', `jumlah`='$jumlah' WHERE `id_komposisi`='$id_komposisi'");
	if (!$query) {
		die("Penyimpanan Gagal");
	}
	echo "<script>window.location.href = '?module=komposisi_barangs';</script>";

?>