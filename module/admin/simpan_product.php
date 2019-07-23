<?php  
	include 'module/koneksi.php';

	$id_product = $_POST['id_product'];
	$nama_product = $_POST['nama_product'];


		$query = mysqli_query($koneksi, "INSERT INTO barang_tersedia (`id_barang_tersedia`,`nama`) VALUES ( '$id_product', '$nama_product')");
		if (!$query) {
			die("Penyimpanan Gagal");
		}
		echo "<script>window.location.href = '?module=kelola_product';</script>";

?>