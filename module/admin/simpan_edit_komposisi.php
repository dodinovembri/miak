<?php  
	include 'module/koneksi.php';

	$id_barang = $_POST['id_barang'];
	$gelatin = $_POST['gelatin'];
	$tepung_terigu = $_POST['tepung_terigu'];
	$susu_cair = $_POST['susu_cair'];
	$mentega = $_POST['mentega'];
	$coklat_bubuk = $_POST['coklat_bubuk'];
	$selai_strawberry = $_POST['selai_strawberry'];
	$selai_blueberry = $_POST['selai_blueberry'];
	$selai_nanas = $_POST['selai_nanas'];
	$coklat = $_POST['coklat'];

	$query = mysqli_query($koneksi, "UPDATE komposisi SET `gelatin`='$gelatin', `tepung_terigu`='$tepung_terigu', `susu_cair`='$susu_cair', `mentega`='$mentega', `coklat_bubuk`='$coklat_bubuk', `selai_strawberry`='$selai_strawberry', `selai_blueberry`='$selai_blueberry', `selai_nanas`='$selai_nanas', `coklat`='$coklat' WHERE id_barang='$id_barang'");
	if (!$query) {
		die("Penyimpanan Gagal");
	}
	echo "<script>window.location.href = '?module=komposisi_barang';</script>";

?>