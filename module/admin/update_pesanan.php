<?php  
	include 'module/koneksi.php';

	$id_orderan_untuk_supplier = $_GET['id_orderan_untuk_supplier'];
	$id_barang = $_GET['id_barang'];

    $query2 = mysqli_query($koneksi, "SELECT * FROM orderan_untuk_supplier WHERE id_orderan_untuk_supplier='$id_orderan_untuk_supplier'");

	$query = mysqli_query($koneksi, "UPDATE orderan_untuk_supplier SET status='S' WHERE id_orderan_untuk_supplier='$id_orderan_untuk_supplier'");

	while ($row = mysqli_fetch_array($query2)) {
		$id_pesanan = $row['id_pesanan'];
		$jumlah = $row['jumlah'];
		$tgl = $row['tgl'];
	}
	$simpan_ke_trx_bm = mysqli_query($koneksi, "INSERT INTO trx_bm (`tgl`, `pesanan`, `jumlah`) VALUES ('$tgl', '$id_pesanan', '$jumlah')");
	if (!$query) {
		die("Penyimpanan gagal !!");
	}

	$query_update = mysqli_query($koneksi, "UPDATE barang SET status='B' WHERE id_barang='$id_barang'");

	echo "<script>window.location.href = '?module=barang';</script>";
?>