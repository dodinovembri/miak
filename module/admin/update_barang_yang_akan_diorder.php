<?php  
	include 'module/koneksi.php';

	$id_orderan_untuk_supplier = $_GET['id_orderan_untuk_supplier'];

    
	$query = mysqli_query($koneksi, "UPDATE orderan_untuk_supplier SET status='P' WHERE id_orderan_untuk_supplier='$id_orderan_untuk_supplier'");

	

	echo "<script>window.location.href = '?module=barang_yang_akan_diorder';</script>";
?>