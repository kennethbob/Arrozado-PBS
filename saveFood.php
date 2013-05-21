<?php
	
	include 'DAO/FoodDAO.php';

	$id = $_POST['food_id'];
	$appetizer = $_POST['appetizer'];
	$viand = $_POST['viand'];
	$desert = $_POST['desert'];
	$fruits = $_POST['fruits'];
	$date = $_POST['date'];
	
	$action = new FoodDAO();	
	$action->editFood($food_id, $appetizer, $viand, $desert, $fruits, $date);

?>
