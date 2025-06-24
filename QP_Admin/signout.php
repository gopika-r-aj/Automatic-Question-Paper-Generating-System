<?php
	include_once('controllers/connection.php');
	$obj=new Connection;
	$role=$_SESSION['role'];
	$loc='login.php';
	$obj->logout($role,$loc);
?>