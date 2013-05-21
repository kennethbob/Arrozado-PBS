<?php

		include 'DAO/FoodDAO.php';
        
		$appetizer = $_POST['appetizer'];
		$viand = $_POST['viand'];
		$desert = $_POST['desert'];
		$fruits = $_POST['fruits'];
      $date = $_POST['date'];

        if($appetizer != "" && $viand != "" && $desert != "" && $fruits != "" && $date != "") {

		    $action = new FoodDAO();
		    $action->addFood($appetizer, $viand, $desert, $fruits, $date);
        
        }
?>
