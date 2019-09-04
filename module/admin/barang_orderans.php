<?php  
	include 'module/koneksi.php';

	$pesanan = $_POST['pesanan'];
	$tgl = $_POST['tgl'];
	$jumlah = $_POST['jumlah'];
	$jm = $_POST['jumlah'];

	$pesanan_trx_pelanggan = $pesanan;
	$jumlah_trx_pelanggan = $jumlah;

	// untuk tabel orderen
	$jumlah2 = $_POST['jumlah'];
	$pesanan2 = $_POST['pesanan'];

	// echo $pesanan;

	$query_select2 = mysqli_query($koneksi, "SELECT * FROM komposisis WHERE id_barang_tersedia='$pesanan'");
	$query_select = mysqli_query($koneksi, "SELECT komposisis.*, bahan_baku.*, barang.jumlah as jml FROM komposisis JOIN bahan_baku ON komposisis.id_bahan_baku = bahan_baku.id_bahan_baku JOIN barang ON bahan_baku.nama_bahan_baku = barang.nama_barang WHERE komposisis.id_barang_tersedia='$pesanan' ORDER BY komposisis.jumlah DESC");	
		while ($row = mysqli_fetch_array($query_select)) {
			$id_barang_tersedia = $row['id_barang_tersedia'];
			$id_bahan_baku = $row['id_bahan_baku'];
			$jumlah = $row['jumlah'] * $jumlah;				
			$jmlah_bahan = $row['jml'];
			$hasil = $jmlah_bahan - $jumlah;
			
			if ($hasil <= 0) {
			echo "<script>window.alert('Jumlah Barang Tidak Cukup');</script>";
			echo "<script>window.location.href = '?module=orderan_pelanggan';</script>";	
			die;		
			}
		// else{
		}

			$query_trx_pelanggan = mysqli_query($koneksi, "INSERT INTO trx_pelanggan (`id_barang`, `tgl`, `jumlah`) VALUES ('$pesanan_trx_pelanggan', '$tgl', '$jumlah_trx_pelanggan')");

				$ambil_id = mysqli_query ($koneksi, "SELECT max(id) AS id FROM trx_pelanggan");
		    while($r_a = mysqli_fetch_array($ambil_id)){
		        $id_insert = $r_a['id'];
		    }


			    	while ($row = mysqli_fetch_array($query_select2)) {
					$id_barang_tersedia = $row['id_barang_tersedia'];
					$id_bahan_baku = $row['id_bahan_baku'];
					$jumlah3 = $row['jumlah'] * $jm;				
					$jmlah_bahan = $row['jml'];		
						
					$query_insert = mysqli_query($koneksi, "INSERT INTO trx_bk (`id_trx_pelanggan`, `pesanan`, `tgl`, `bahan`, `jumlah`) VALUES ('$id_insert', '$pesanan', '$tgl', '$id_bahan_baku', '$jumlah3')");
					if (!$query_insert) {
						die("Penyimpanan Gagal");
					}
				
				
			}

			echo "<script>window.location.href = '?module=transaksi';</script>";
		// }
			// echo $jumlah - $jmlah_bahan;		

			// echo $row['jml'];						
			
	// }
		// if ($hasil <= 0) {
		// 	echo "<script>window.alert('Jumlah Barang Tidak Cukup');</script>";
		// 	echo "<script>window.location.href = '?module=orderan_pelanggan';</script>";
		// }
		// else{
			

		// }

		



	// $query = mysqli_query($koneksi, "SELECT * FROM m_barang ORDER BY id_barang ASC");
	// while ($row2 = mysqli_fetch_array($query)) {
	// 	$id_barang[] = $row2['id_barang'];
	// }
	// $jumlah = [$gelatin, $tepung_terigu, $susu_cair, $telur, $mentega, $coklat_bubuk, $selai_strawberry, $selai_blueberry, $selai_nanas, $coklat];

	// $query_insert = mysqli_query($koneksi, "INSERT INTO trx_barang_keluar (`tanggal`, `pesanan`, `jumlah`, `gelatin`, `tepung_terigu`, `susu_cair`, `telur`, `mentega`, `coklat_bubuk`, `selai_strawberry`, `selai_blueberry`, `selai_nanas`, `coklat`) VALUES ('$tgl', '$pesanan', '$jumlah', '$gelatin', '$tepung_terigu', '$susu_cair', '$telur', '$mentega', '$coklat_bubuk', '$selai_strawberry', '$selai_blueberry', '$selai_nanas', '$coklat')");
	// if (!$query_insert) {
	// 	die("Penyimpanan gagal");
	// }
	// $id_barang2 = json_encode($id_barang);


	

	// echo "<script>window.location.href = '?module=transaksi';</script>";
	// $query_orderan = mysqli_query($koneksi, "INSERT INTO orderan (`tgl`, `pesanan`, `jumlah`) VALUES ('$tgl', '$pesanan2', '$jumlah2')");
	

?>