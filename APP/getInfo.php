<?php
	
	session_start();
	
	include 'DAO/userDAO.php';
	
	$username = $_SESSION['username'];
	
	$action = new userDAO();
	$action->getInfo($username);
?>
