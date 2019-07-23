<?php  
		include 'module/koneksi.php';

		$id_barang = $_GET['id_barang'];
		$tgl = date("Y-m-d");		

		$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
		while ($row = mysqli_fetch_array($query)) {
			$eoq = $row['eoq'];
			$satuan = $row['satuan'];
		}

		$query_insert = mysqli_query($koneksi, "INSERT INTO orderan_untuk_supplier (`id_pesanan`, `jumlah`, `satuan`, `tgl`) VALUES ('$id_barang', '$eoq', '$satuan', '$tgl')");
		// update status barang menjadi Proses (P)
		$query_update = mysqli_query($koneksi, "UPDATE barang SET status='P' WHERE id_barang='$id_barang'");

		if (!$query_insert) {
			die("Penyimpanan gagal");
		}

		echo "<script>window.location.href = '?module=pesanan_barang';</script>";
?>