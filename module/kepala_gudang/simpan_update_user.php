<?php  
	include 'module/koneksi.php';

	$id = $_POST['id'];
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	// $role = $_POST['role'];
    
	// $query = mysqli_query($koneksi, "UPDATE user SET username='$username', nama='$nama', jabatan='$jabatan', role='$role' WHERE id='$id'");
	$query = mysqli_query($koneksi, "UPDATE user SET username='$username', nama='$nama', jabatan='$jabatan' WHERE id='$id'");

	echo "<script>window.location.href = '?module=hal_profile';</script>";
?>