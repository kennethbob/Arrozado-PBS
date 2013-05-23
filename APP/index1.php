<html>
<head>
<link rel = "stylesheet" href = "CSS/myScript.css">
<Title>Registration Form</Title>
<style type="text/css">
</style>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and email address, then click <strong>Submit</strong> to register.</p>
<form method="post" action="login.php" enctype="multipart/form-data" >
      Name  <input type="text" name="name" id="name"/></br>
      Email <input type="text" name="email" id="email"/></br>
      <input type="submit" name="submit" value="Submit" />
</form>
<?php
	
	// DB connection info
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "registration";
// Connect to database.
	try {
    	$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pass);
	}
	catch(Exception $e){
    	die(var_dump($e));
	}
	
	if(!empty($_POST)) {

	try {
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $date = date("Y-m-d");
    // Insert data
	    $sql_insert = "INSERT INTO registration_tbl (name, email, date) VALUES (?,?,?)";
    	$stmt = $conn->prepare($sql_insert);
    	$stmt->bindValue(1, $name);
    	$stmt->bindValue(2, $email);
    	$stmt->bindValue(3, $date);
    	$stmt->execute();
	}
	catch(Exception $e) {
    	die(var_dump($e));
	}
	echo "<h3>Your're registered!</h3>";
	}

	$sql_select = "SELECT * FROM registration_tbl";
	$stmt = $conn->query($sql_select);
	$registrants = $stmt->fetchAll(); 
		if(count($registrants) > 0) {
    		echo "<h2>People who are registered:</h2>";
    		echo "<table>";
    		echo "<tr><th>Name</th>";
    		echo "<th>Email</th>";
    		echo "<th>Date</th></tr>";
    	
    	foreach($registrants as $registrant) {
    	    echo "<tr><td>".$registrant['name']."</td>";
    	    echo "<td>".$registrant['email']."</td>";
    	    echo "<td>".$registrant['date']."</td></tr>";
    	}
    		echo "</table>";
		} else {
    		echo "<h3>No one is currently registered.</h3>";
		}

?>
</body>
</html>
