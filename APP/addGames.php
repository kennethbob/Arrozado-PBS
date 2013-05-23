<?php

		include 'DAO/GameDAO.php';
        
		$games = $_POST['games'];
		$date = $_POST['date'];

        if($games != "") {

		    $action = new GameDAO();
		    $action->addGames($games);
        
        }
?>
