<?php
    include 'DAO/BaseDAO.php';
    
    class userDAO extends BaseDAO{
        
        
		         
		function logIn($username,$password){
		      	
		      $this->open();
		      		
		      $stmt = $this->dbh->prepare("SELECT username,password FROM registered");
		      $stmt->execute();
		      
				$found = false;   		
		      while($row = $stmt->fetch()){
			 		if($row[0]==$username && $row[1] == $password){
			    		$found = true;
			    //return true;
			 		}
			 
		      }	
		      	return $found;					
		      $this->close();
		      
		}
              function registered ($firstname, $middlename, $lastname, $birthday, $age, $gender, $address, $contact_number, $status, $alternate_name, $username, $email_address, $password, $password2){
                  $this->open();
                  
                  $stmt= $this->dbh->prepare("INSERT INTO registered (firstname, middlename, lastname, birthday, age, gender, address, contact_number, status, alternate_name, username, email_address, password, password2)values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                  $stmt->bindParam(1, $firstname);
                  $stmt->bindParam(2, $middlename);
                  $stmt->bindParam(3, $lastname);
		  $stmt->bindParam(4, $birthday);
                  $stmt->bindParam(5, $age);
                  $stmt->bindParam(6, $gender);
                  $stmt->bindParam(7, $address);
                  $stmt->bindParam(8, $contact_number);
                  $stmt->bindParam(9, $status);
                  $stmt->bindParam(10, $alternate_name);
                  $stmt->bindParam(11, $username);
                  $stmt->bindParam(12, $email_address);
                  $stmt->bindParam(13, $password);
                  $stmt->bindParam(14, $password2);
                  $stmt->execute();
                  $id = $this->dbh->lastInsertId();
                 
                
                  
                  $stmt = $this->dbh->prepare("CREATE TABLE ".$username."(contact_id INT auto_increment, firstname varchar(20), middlename varchar(20), lastname varchar(20), contact_number varchar(20), date date, primary key(contact_id))");
                  $stmt->execute();
                  
                  $this->close(); 
              }
              function getInfo($username) {
              
              	$this-> open();
              	
              	$stmt = $this->dbh->prepare("SELECT * FROM registered where username = ?");
              	$stmt->bindParam(1, $username);
              	$stmt->execute();
              	
              	$row = $stmt->fetch();
              	
              	$data_array = array("firstname"=>$row[1], "middlename"=>$row[2], "lastname"=>$row[3], "birthday"=>$row[4], "age"=>$row[5], "gender"=>$row[6], "address"=>$row[7], "contact_number"=>$row[8], "status"=>$row[9], "email_address"=>$row[12], "alternate_name"=>$row[10]);	
              	
              	$encoded_data = json_encode($data_array);
              	echo $encoded_data;
              	
              	 	
              $this->close();
              
	          }
	          
	          }
	          ?>
