<?php

	include 'BaseDAO.php';

	class PhonebookDAO extends BaseDAO {

		function addContact($username, $firstname, $middlename, $lastname, $address, $contact_number, $date) {
		
			$this->open();

			$stmt = $this->dbh->prepare("INSERT INTO ".$username."(firstname, middlename, lastname, address, contact_number, date) values (?, ?, ?, ?, ?, ?)");			
						
			$stmt->bindParam(1, $firstname);
			$stmt->bindParam(2, $middlename);
			$stmt->bindParam(3, $lastname);
			$stmt->bindParam(4, $address);
			$stmt->bindParam(5, $contact_number);
			$stmt->bindParam(6, $date);
			$stmt->execute();
			$contact_id = $this->dbh->lastInsertId();
			
			$this->close();
			
			 echo "<tr>";
          		 echo "<td>".$contact_id."</td>";
			 echo "<td>".$firstname."</td>";
			 echo "<td>".$middlename."</td>";
			 echo "<td>".$lastname."</td>";
			 echo "<td>".$address."</td>";
			 echo "<td>".$contact_number."</td>";
			 echo "<td>".$date."</td>";
			 echo "<td>[<img class = 'img' id = 'DI' src = 'icons/delete1.jpg' onclick = 'deleteContact(".$contact_id.")'/>]";
			 echo "||[<img id = 'DI' src ='icons/edit.jpg' onclick ='editContact(".$contact_id.")'/>]";
			 echo "||[<img id = 'DI' src ='icons/share1.png' onclick ='shareContact(".$contact_id.")'/>]</td>";
			 echo "</tr>";
			
			}
			
			function deleteContact($username, $contact_id) {			
			
			$this->open();

			$stmt = $this->dbh->prepare("DELETE FROM ".$username." WHERE contact_id = ?");
			
			$stmt->bindParam(1, $contact_id);
			$stmt->execute();

			$this->close();
			}
			
			function editContact($username, $contact_id, $firstname, $middlename, $lastname, $address, $contact_number, $date){
			$this->open();
			
			$stmt = $this->dbh->prepare("UPDATE ".$username." SET firstname = ?, middlename = ?, lastname = ?, address = ?, contact_number = ? date = ? WHERE contact_id = ?");
			$stmt->bindParam(1, $firstname);
			$stmt->bindParam(2, $middlename);
			$stmt->bindParam(3, $lastname);
			$stmt->bindParam(4, $address);
			$stmt->bindParam(5, $contact_number);
			$stmt->bindParam(6, $date);
			$stmt->bindParam(7, $contact_id);			
			$stmt->execute();
			
			$this->close();
			

			echo "<td>".$contact_id."</td>";
			echo "<td>".$firstname."</td>";
			echo "<td>".$middlename."</td>";
			echo "<td>".$lastname."</td>";
			echo "<td>".$address."</td>";
			echo "<td>".$contact_number."</td>";
			echo "<td>".$date."</td>";
			echo "<td>[<button id = 'DI' src = 'icons/delete1.jpg' onclick = 'deleteContact(".$contact_id.")'>delete</button>]";
			echo "[<button id = 'DI' onclick='editContact(".$contact_id.")'>edit</button>]";
			echo "[<button id = 'DI' onclick ='shareContact(".$contact_id.")'>share</button>]</td>";
			
			}
			
			function retrieve($username, $contact_id){

			$this->open();
			
			$stmt = $this->dbh->prepare("SELECT * FROM ".$username." WHERE contact_id = ?");
			$stmt->bindParam(1, $contact_id);
			$stmt->execute();

			$record = $stmt->fetch();
			
			$mySQLtable = array("contact_id"=>$record[0], "firstname"=>$record[1], "middlename"=>$record[2], "lastname"=>$record[3], "address"=>$record[4], "contact_number"=>$record[5], "date"=>$record[6]);

			$json_string = json_encode($mySQLtable);
			
			echo $json_string;	

		
			$this->close();
			}
			
			function searchContact($username, $lastname) {
	        
	        $this->open();
	        $stmt = $this->dbh->prepare("SELECT * FROM ".$username." WHERE lastname = ?");
	        $stmt->bindParam(1, $lastname);
	        $stmt->execute();
	        
	        $row = $stmt->fetch();
	        
             echo "<td>".$row[1]."</td>";
             echo "<td>".$row[2]."</td>";
			    echo "<td>".$row[3]."</td>";
			    echo "<td>".$row[4]."</td>";
			    echo "<td>".$row[5]."</td>";
			    echo "<td>".$row[6]."</td>";
			    echo "<td>[<button id = 'DI' src = 'icons/delete1.jpg' onclick = 'deleteContact(".$row[0].")'>delete</button>]";
			    echo "[<button id = 'DI' onclick='editContact(".$row[0].")'>edit</button>]";
			    echo "[<button id = 'DI' onclick ='shareContact(".$row[0].")'>share</button>]</td>";
	        
	        $this->close();
	        
	    	}
	    	
	    	function viewContact($username) {
			
			$this->open();
			$stmt = $this->dbh->prepare("SELECT * from ".$username."");
			$stmt->execute();

			while($row = $stmt->fetch()) {
				
				echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
				echo "<td>[<button id = 'DI' src = 'icons/delete1.jpg' onclick = 'deleteContact(".$row[0].")'>delete</button>]";
			   echo "[<button id = 'DI' onclick='editContact(".$row[0].")'>edit</button>]";
			   echo "[<button id = 'DI' onclick ='shareContact(".$row[0].")'>share</button>]</td>";
				echo "</tr>";
			
			}
			
			$this->close();
		}
		
	}
?>	
