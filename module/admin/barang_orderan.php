<?php  
	include 'module/koneksi.php';

	$pesanan = $_POST['pesanan'];
	$tgl = $_POST['tgl'];
	$jumlah = $_POST['jumlah'];

	$pesanan_trx_pelanggan = $pesanan;
	$jumlah_trx_pelanggan = $jumlah;

	// untuk tabel orderen
	$jumlah2 = $_POST['jumlah'];
	$pesanan2 = $_POST['pesanan'];

	// echo $pesanan;

	$query_select = mysqli_query($koneksi, "SELECT * FROM komposisi WHERE id_barang='$pesanan'");
	while ($row = mysqli_fetch_array($query_select)) {
		$gelatin = $jumlah * $row['gelatin'];
		$tepung_terigu = $jumlah * $row['tepung_terigu'];
		$susu_cair = $jumlah * $row['susu_cair'];
		$telur = $jumlah * $row['telur'];
		$mentega = $jumlah * $row['mentega'];
		$coklat_bubuk = $jumlah * $row['coklat_bubuk'];
		$selai_strawberry = $jumlah * $row['selai_strawberry'];
		$selai_blueberry = $jumlah * $row['selai_blueberry'];
		$selai_nanas = $jumlah * $row['selai_nanas'];
		$coklat = $jumlah * $row['coklat'];
	}

	$query = mysqli_query($koneksi, "SELECT * FROM m_barang ORDER BY id_barang ASC");
	// while ($row2 = mysqli_fetch_array($query)) {
	// 	$id_barang[] = $row2['id_barang'];
	// }
	$jumlah = [$gelatin, $tepung_terigu, $susu_cair, $telur, $mentega, $coklat_bubuk, $selai_strawberry, $selai_blueberry, $selai_nanas, $coklat];

	// $query_insert = mysqli_query($koneksi, "INSERT INTO trx_barang_keluar (`tanggal`, `pesanan`, `jumlah`, `gelatin`, `tepung_terigu`, `susu_cair`, `telur`, `mentega`, `coklat_bubuk`, `selai_strawberry`, `selai_blueberry`, `selai_nanas`, `coklat`) VALUES ('$tgl', '$pesanan', '$jumlah', '$gelatin', '$tepung_terigu', '$susu_cair', '$telur', '$mentega', '$coklat_bubuk', '$selai_strawberry', '$selai_blueberry', '$selai_nanas', '$coklat')");
	// if (!$query_insert) {
	// 	die("Penyimpanan gagal");
	// }
	// $id_barang2 = json_encode($id_barang);
	$query_trx_pelanggan = mysqli_query($koneksi, "INSERT INTO trx_pelanggan (`id_barang`, `tgl`, `jumlah`) VALUES ('$pesanan_trx_pelanggan', '$tgl', '$jumlah_trx_pelanggan')");

	$ambil_id = mysqli_query ($koneksi, "SELECT max(id) AS id FROM trx_pelanggan");
    while($r_a = mysqli_fetch_array($ambil_id)){
        $id_insert = $r_a['id'];
    }
	foreach ($jumlah as $key => $value) {
		$row2 = mysqli_fetch_array($query);
		$id_barang = $row2['id_barang'];	
		// echo $id_barang;
	$query_insert = mysqli_query($koneksi, "INSERT INTO trx_bk (`id_trx_pelanggan`, `pesanan`, `tgl`, `bahan`, `jumlah`) VALUES ('$id_insert', '$pesanan', '$tgl', '$id_barang', '$value')");
		if (!$query_insert) {
			die("Penyimpanan Gagal");
		}	
	}

	echo "<script>window.location.href = '?module=transaksi';</script>";
	// $query_orderan = mysqli_query($koneksi, "INSERT INTO orderan (`tgl`, `pesanan`, `jumlah`) VALUES ('$tgl', '$pesanan2', '$jumlah2')");
	

?>