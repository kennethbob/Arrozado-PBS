<?php
 
		include 'DAO/PhonebookDAO.php';

		session_start();
   
   		$username=$_SESSION['username'];
		$action = new PhonebookDAO();
		$action->viewContact($username);
			
?>
