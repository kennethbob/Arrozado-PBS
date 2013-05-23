<?php
        include 'DAO/userDAO.php';
        
	 session_start();
   
    		$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
     		$lastname = $_POST['lastname'];
     		$birthday = $_POST['birthday'];
     		$age = $_POST['age'];
     		$gender = $_POST['gender'];
     		$address = $_POST['address'];
     		$contact_number  = $_POST['contact_number'];
     		$status  = $_POST['status'];
     		$alternate_name  = $_POST['alternate_name'];
     		$username  = $_POST['username'];
     		$email_address  = $_POST['email_address'];
			$password = $_POST['password'];
			$password2  = $_POST['password2'];
      

        	$action = new userDAO();
	                
	     	$action->registered($firstname, $middlename, $lastname, $birthday, $age, $gender, $address, $contact_number, $status, $alternate_name, $username, $email_address, $password, $password2);       

		
		session_destroy();

		echo "Successfully registered";
?>

