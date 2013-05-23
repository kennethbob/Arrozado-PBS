<?php

		include 'DAO/PhonebookDAO.php';
        session_start();
   
   		$username=$_SESSION['username'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact_number = $_POST['contact_number'];
		$date = $_POST['date'];



		$action = new PhonebookDAO();
		$action->addContact($username,$firstname, $middlename, $lastname, $address, $contact_number, $date);

?>
