<?php  
	session_start();
	if ($_SESSION['id_role'] != 3) {
		header("location: index.php");
	}
	else
	{
		if (!isset($_GET['module']) || $_GET['module']==''){
			$_GET['module']='home'; 
		}	
	?>

	<?php 
		include 'module/templates/head.php'; 
		// tag body mulai dari sini
		include 'module/templates/header.php';
		include 'module/kepala_gudang/templates/leftbar.php';		
		require_once('module/kepala_gudang/'.$_GET['module'].'.php');
		include 'module/templates/footer.php';
		// end tag body
	?>

<?php } ?> 