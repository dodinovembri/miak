<?php  
	include 'module/koneksi.php';

	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
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

	$query = mysqli_query($koneksi, "UPDATE barang SET id_barang='$id_barang', nama_barang='$nama_barang', jumlah='$jumlah', harga='$harga', satuan='$satuan', biaya_pemesanan='$biaya_pemesanan', biaya_penyimpanan='$biaya_penyimpanan', lt='$lt', sl='$sl', eoq='$eoq', frekuensi_pemesanan='$frekuensi_pemesanan', rop='$rop', ss='$ss' WHERE id_barang='$id_barang'");
	if (!$query) {
		die("Penyimpanan gagal !!");
	}
	echo "<script>window.location.href = '?module=barang';</script>";
?>