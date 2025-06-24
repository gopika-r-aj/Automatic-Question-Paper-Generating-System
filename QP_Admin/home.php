<?php 
	include_once('controllers/connection.php');
	$obj=new Connection;
	$role=$_SESSION['role'];
	// echo $_SESSION['log_name'];exit;
	if($_SESSION['log_name'] != null){
		include 'head-section.php';
		include 'top-bar.php';
		include 'side-menu.php';
		include 'dashboard.php';
		// include 'pages/forms/forms.php';

		include 'footer.php';
	}else{
		header('location:login.php');
	}
	


?>