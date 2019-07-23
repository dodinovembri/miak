<?php  
	include 'module/koneksi.php';

	$username = $_GET['username'];
	$query = mysqli_query($koneksi, "DELETE FROM user WHERE username='$username'");

	echo "<script>window.location.href='?module=user'</script>";
?>