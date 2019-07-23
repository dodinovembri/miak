<?php  
	include 'module/koneksi.php';

	$id_barang = $_POST['id_barang'];
	$gelatin = $_POST['gelatin'];
	$tepung_terigu = $_POST['tepung_terigu'];
	$susu_cair = $_POST['susu_cair'];
	$telur = $_POST['telur'];
	$mentega = $_POST['mentega'];
	$coklat_bubuk = $_POST['coklat_bubuk'];
	$selai_strawberry = $_POST['selai_strawberry'];
	$selai_blueberry = $_POST['selai_blueberry'];
	$selai_nanas = $_POST['selai_nanas'];
	$coklat = $_POST['coklat'];

	$id_db = "";
	$query_select = mysqli_query($koneksi, "SELECT id_barang FROM komposisi WHERE id_barang='$id_barang'");
	while ($id = mysqli_fetch_array($query_select)) {
		$id_db = $id['id_barang'];
	}
	
	if ($id_db == $id_barang) {
		echo "<script>window.alert('data sudah ada')</script>";
		echo "<script>window.location.href = '?module=insert_komposisi';</script>";
	}
	else
	{
		$query = mysqli_query($koneksi, "INSERT INTO komposisi (`id_barang`, `gelatin`, `tepung_terigu`, `susu_cair`, `telur`, `mentega`, `coklat_bubuk`, `selai_strawberry`, `selai_blueberry`, `selai_nanas`, `coklat`) VALUES ('$id_barang', '$gelatin', '$tepung_terigu', '$susu_cair', '$telur', '$mentega', '$coklat_bubuk', '$selai_strawberry', '$selai_blueberry', '$selai_nanas', '$coklat')");
		if (!$query) {
			die("Penyimpanan Gagal");
		}
		echo "<script>window.location.href = '?module=komposisi_barang';</script>";
	}

?>