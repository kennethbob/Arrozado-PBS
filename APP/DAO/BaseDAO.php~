<?php

	class BaseDAO {
		protected $user = "student1";
		protected $pass = "password";
		protected $db_name = "myDATA";
		protected $dbh = null;

		function open(){
			$this->dbh = new PDO("mysql:host=localhost:dbname=".$this->db_name, $this->user, $this->pass);
		}
		
		function close(){
			$this->dbh = null;
		}	
	}
?>
