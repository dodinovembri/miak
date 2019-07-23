<?php  
	include 'module/koneksi.php';

	$id_barang = $_POST['id_barang'];
	
	$q = mysqli_query($koneksi, "SELECT * FROM m_barang WHERE id_barang='$id_barang'");
	while ($r = mysqli_fetch_array($q)) {
		$nama_barang = $r['nama_barang'];	
	}
	$satuan = $_POST['satuan'];
	$jumlah = $_POST['jumlah']; //D
	$harga = $_POST['harga']; //harga per
	$biaya_pemesanan = $_POST['biaya_pemesanan']; //S
	$biaya_penyimpanan_blm = $_POST['biaya_penyimpanan']; //H
	$biaya_penyimpanan = ($harga * $biaya_penyimpanan_blm)/100;
	$lt = $_POST['lt']; //leadtime
	$sl = $_POST['sl']; //service level

	$eoq_blm = (2 * $biaya_pemesanan * $jumlah)/$biaya_penyimpanan;
	$eoq = sqrt($eoq_blm);
	$frekuensi_pemesanan = $jumlah/$eoq;
	$rop = ($jumlah/365) * $lt;

	$jml_pemakaian_perhari = $jumlah/365;
	$ss = $sl * $jml_pemakaian_perhari * $lt;

	$id_db = "";
	$query_periksa = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
	while ($row = mysqli_fetch_array($query_periksa)) {
		$id_db = $row['id_barang'];
	}
	if ($id_db == $id_barang) {
		echo "<script>
					window.alert('Data Barang Sudah Ada Dalam Database');
					window.location.href = '?module=tambah';
			 </script>";
	}
	else{
		$query = mysqli_query($koneksi, "INSERT INTO barang (`id_barang`, `nama_barang`, `jumlah`, `harga`, `satuan`, `biaya_pemesanan`, `biaya_penyimpanan`, `lt`, `sl`, `eoq`, `frekuensi_pemesanan`, `rop`, `ss`) VALUES ('$id_barang', '$nama_barang', '$jumlah', '$harga', '$satuan', '$biaya_pemesanan', '$biaya_penyimpanan', '$lt', '$sl', '$eoq', '$frekuensi_pemesanan', '$rop', '$ss')");
		if (!$query) {
			die("Penyimpanan gagal");
		}
		echo "<script>window.location.href = '?module=barang';</script>";
	}
?>