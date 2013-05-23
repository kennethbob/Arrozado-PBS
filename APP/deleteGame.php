<?php
 
		include 'DAO/GameDAO.php';

		$game_id = $_POST['game_id'];		

		$action = new GameDAO();
		$action->deleteGames($game_id);

		
?>
