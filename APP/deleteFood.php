<?php
 
		include 'DAO/FoodDAO.php';

		$food_id = $_POST['food_id'];		

		$action = new FoodDAO();
		$action->deleteFood($food_id);

		
?>
