<?php
 
		include 'DAO/PhonebookDAO.php';
		session_start();
   
   		$username=$_SESSION['username'];
		$search = $_POST['search'];
		
		$action = new PhonebookDAO();
		$action->searchContact($username,$search);
			
?>
