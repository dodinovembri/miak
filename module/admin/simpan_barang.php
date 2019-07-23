<?php  
	include 'module/koneksi.php';

	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];

	$id_db = "";
	$query_select = mysqli_query($koneksi, "SELECT id_barang FROM barang WHERE id_barang='$id_barang'");
	while ($id = mysqli_fetch_array($query_select)) {
		$id_db = $id['id_barang'];
	}
	
	if ($id_db == $id_barang) {
		echo "<script>window.alert('data sudah ada')</script>";
		echo "<script>window.location.href = '?module=insert_barang';</script>";
	}
	else
	{
		$query = mysqli_query($koneksi, "INSERT INTO barang (`id_barang`, `nama_barang`, `satuan`, `harga`) VALUES ('$id_barang', '$nama_barang', '$satuan', '$harga')");
		if (!$query) {
			die("Penyimpanan Gagal");
		}
		echo "<script>window.location.href = '?module=tampil_barang';</script>";
	}

?>