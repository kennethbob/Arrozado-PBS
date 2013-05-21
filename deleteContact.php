<?php
 
		include 'DAO/PhonebookDAO.php';
		session_start();
   
   		$username=$_SESSION['username'];
		$contact_id = $_POST['contact_id'];		

		$action = new PhonebookDAO();
		$action->deleteContact($username,$contact_id);

		
?>
