<?php  
	include 'module/koneksi.php';

	$username = $_SESSION['username'];
	$password = md5($_POST['password']);


	$query = mysqli_query($koneksi, "UPDATE user SET `password`='$password' WHERE username='$username'");
	if (!$query) {
		die("Penyimpanan Gagal");
	}
	echo "<script>window.location.href = '?module=hal_profile';</script>";

?>