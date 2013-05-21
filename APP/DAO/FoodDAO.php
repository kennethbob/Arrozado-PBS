<?php

	include 'BaseDAO.php';

	class FoodDAO extends BaseDAO {

		function addFood($appetizer, $viand, $desert, $fruits, $date) {
		
			$this->open();

			$stmt = $this->dbh->prepare("INSERT INTO foods(appetizer, viand, desert, fruits, date) values (?, ?, ?, ?, ?)");			
						
			$stmt->bindParam(1, $appetizer);
			$stmt->bindParam(2, $viand);
			$stmt->bindParam(3, $desert);
			$stmt->bindParam(4, $fruits);
			$stmt->bindParam(5, $date);
			$stmt->execute();
			$food_id = $this->dbh->lastInsertId();
			
			$this->close();
			
			   echo "<tr id = ".$food_id.">";
            echo "<td>".$food_id."</td>";
			   echo "<td>".$appetizer."</td>";
			   echo "<td>".$viand."</td>";
			   echo "<td>".$desert."</td>";
			   echo "<td>".$fruits."</td>";
			   echo "<td>".$date."</td>";
			   echo "<td><img class = 'img' src = 'icons/ba.png' onclick = 'delete(".$food_id.")'/>";
			   echo "<img src = 'icons/ed.png' onclick = 'edit(".$food_id.")'/></td>";
			   echo "</tr>";
	
			}
			
			function deleteFood($food_id) {			
			
			$this->open();

			$stmt = $this->dbh->prepare("DELETE FROM foods WHERE food_id = ?");
			
			$stmt->bindParam(1, $food_id);
			$stmt->execute();

			$this->close();
		   
		   }
		   
		   function editFood($food_id, $appetizer, $viand, $desert, $fruits, $date){
			$this->open();
			
			$stmt = $this->dbh->prepare("UPDATE foods SET appetizer = ?, viand = ?, desert = ?, fruits = ?, date = ? WHERE food_id = ?");
			$stmt->bindParam(1, $appetizer);
			$stmt->bindParam(2, $viand;
			$stmt->bindParam(3, $desert);
			$stmt->bindParam(4, $fruits);
			$stmt->bindParam(5, $date);
			$stmt->bindParam(6, $food_id);			
			$stmt->execute();
			
			$this->close();
			

			echo "<td>".$food_id."</td>";
			echo "<td>".$appetizer."</td>";
			echo "<td>".$viand."</td>";
			echo "<td>".$desert."</td>";
			echo "<td>".$fruits."</td>";
			echo "<td>".$date."</td>";
			echo "<td><img class = 'img' src = 'icons/ba.png' onclick = 'delete(".$food_id.")'/>";
			echo "<img src = 'icons/ed.png' onclick = 'edit(".$food_id.")'/></td>";
			
         }
         
         }
	      function retrieveFood($food_id){

			$this->open();
			
			$stmt = $this->dbh->prepare("SELECT * FROM foods WHERE food_id = ?");
			$stmt->bindParam(1, $food_id);
			$stmt->execute();

			$record = $stmt->fetch();
			
			$foods = array("food_id"=>$record[0], "appetizer"=>$record[1], "viand"=>$record[2], "desert"=>$record[3], "fruits"=>$record[4], "date"=>$record[5]);

			$json_string = json_encode($foods);
			
			echo $json_string;	

		
			$this->close();
		   }
		   
		   function wordsView() {
			
			$this->open();
			$stmt = $this->dbh->prepare("SELECT * from oat");
			$stmt->execute();

			   while($row = $stmt->fetch()) {
			      echo "<tr id = ".$row[0].">";
               echo "<td>".$row[0]."</td>";
               echo "<td>".$row[1]."</td>";
               echo "<td>".$row[2]."</td>";
               echo "<td>".$row[3]."</td>";
               echo "<td>".$row[4]."</td>";
               echo "<td>".$row[5]."</td>";
			      echo "<td><img class = 'img' src = 'icons/ba.png' onclick = 'delete(".$row[0].")'/>";
			      echo "<img src='icons/ed.png' onclick='edit(".$row[0].")'/></td>";
			      echo "</tr>";
			   }
			
			$this->close();
		   
		   }
   }

?>
