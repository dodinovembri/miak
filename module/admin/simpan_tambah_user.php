<?php  
	include 'module/koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$role = $_POST['role'];
	
	$id_db = "";
	$query_select = mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username'");
	while ($id = mysqli_fetch_array($query_select)) {
		$id_db = $id['username'];
	}
	
	if ($id_db == $username) {
		echo "<script>window.alert('data sudah ada')</script>";
		echo "<script>window.location.href = '?module=tambah_user';</script>";
	}
	else
	{
		$query = mysqli_query($koneksi, "INSERT INTO user (`username`, `password`, `role`) VALUES ('$username', '$password', '$role')");
		if (!$query) {
			die("Penyimpanan Gagal");
		}
		echo "<script>window.location.href = '?module=hal_profile';</script>";
	}

?>