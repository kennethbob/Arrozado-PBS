<?php
   session_start();
   if (!isset($_SESSION['username'])){
	   header('Location: pmook_login.php');
  }else{
  	$Username=$_SESSION['username'];
  
  }
?>
<?php

	include 'DAO/userDAO.php';
	$action = new userDAO();
		if(isset($_REQUEST['firstname']) && isset($_REQUEST['middlename']) && isset($_REQUEST['lastname']) && isset($_REQUEST['address']) && isset($_REQUEST['contact_number']) && isset($_REQUEST['date'])){	
			$verrify = $action->$username($_REQUEST['firstname'],$_REQUEST['middlename'],$_REQUEST['lastname'],$_REQUEST['address'],$_REQUEST['contact_number'],$_REQUEST['date']);
		
		header('Location: pmook.php'); 
			
		}else{
					$verMsg = "<div id = 'mySucAdd'><img id = 'sucAdd' src = 'icons/success.png'>Successfully Added</div>";
		}
		
?>
<html>
   <head>
   <title>Pmook</title>
   <script src = "js/jquery-1.8.2.min.js"></script>
   <script src = "js/jquery-ui-1.9.0.custom.min.js"></script>
   <script src = "js/myScript.js"></script>
   <link rel = "stylesheet" href = "CSS/myScript.css"/>
   <link rel = "stylesheet" href = "CSS/jquery-ui-1.9.0.custom.min.css"/>
   <link rel = "shortcut icon" href = "icons/p.png"/>
   <script> 
    $(function() {
           $( "#dialog" ).dialog({
    });
   </script>
   <script>
     $(function() {
       $( "#menu" ).menu();
     });
     </script>
     <style>
     .ui-menu { width: 150px; }
     </style>
   </head>
   <body id = "myBody">
      <fieldset class = "myFSstyle1">
      <p id = "myName1">pmook</p>
      </fieldset></br>
      <div id = "DM">
      <fieldset id = "MF">
      <div class = "mwholediv">
      <ul id="menu">
        <li>
          <a><img id = "IM" src = "icons/home.png"/></a>
          <ul>
            <li><a id = "li" href = "pmook_index.php">Home</a></li>
          </ul>
        </li>
        <li>
        	<a><img id = "IM" src = "icons/Friends-icon.png"/></a>
          <ul>
            <li><a id = "li" href = "friends.php">Friends</a></li>
          </ul>
        </li>
        <li>
        	<a><img id = "IM" src = "icons/myfave.png"/></a>
          <ul>
            <li><a id = "li" href = "foods.php">Foods</a></li>
            <li><a id = "li" href = "games.php">Games</a></li>
            <li><a id = "li" href = "act.php">Actor/Actress</a></li>
            <li><a id = "li" href = "hobby.php">Hobby</a></li>
          </ul>
        </li>
        <li>
        	  <a><img id = "IM" src = "icons/about.png"/></a>
          <ul>
            <li><a id = "li" href = "comm.php">Community</a></li>
            <li><a id = "li" href = "world.php">World</a></li>
          </ul>
        </li>
        <li>
        	<a><img id = "IM" src = "icons/message.png"/></a>
          <ul>
            <li><a id = "li" href = "create.php">Compose message</a></li>
            <li><a id = "li" href = "inbox.php">Inbox</a></li>
            <li><a id = "li" href = "sent.php">Sentbox</a></li>
          </ul>
        </li>
        <li>
        	  <a><img id = "IM" src = "icons/male.png"/></a>
          <ul>
            <li><a id = "li" href = "profile.php">Profile</a></li>
            <li><a id = "li" href = "private.php">Private Settings</a></li>
            <li><a id = "li" href = "account.php">Account Settings</a></li>
            <li><a id = "li" href = "pmook_login.php">Sign out</a></li>
          </ul>
        </li>
      </ul>
      </div>
      </fieldset>
      <div>
	      <fieldset id = "fieldsetME">
		      <fieldset id = "otherField">
			      <p>ABOUT ME <strong>:</strong></p>
			      <img id = "blankIMG" src = "icons/blank_person.jpg"/><p id = "echo"><strong> || <?php if(isset($Username)) echo $Username;?> ..</strong></p></br> 
			      <br>
			      <button id = "changePic">change picture</button>
			      <br></br>											
				      ] ===============<strong>|+|</strong>=============== [ </br>
			      <p id = "aboutme"><strong>Firstname : </strong> <span id = "F"></span> (<span id = "AN"></span>)</p> 
			      <p id = "aboutme"><strong>Middlename : </strong> <span id = "M"></span></p>
			      <p id = "aboutme"><strong>Lastname : </strong> <span id = "L"></span></p> 
			      <p id = "aboutme"><strong>Birthday : </strong> <span id = "B"></span></p>
			      <p id = "aboutme"><strong>Age : </strong> <span id = "A"></span></p> 
			      <p id = "aboutme"><strong>Gender : </strong> <span id = "G"></span></p> 
			      <p id = "aboutme"><strong>Address : </strong> <span id = "AD"></span></p>
			      <p id = "aboutme"><strong>Contact Number : </strong> <span id = "CN"></span></p>
			      <p id = "aboutme"><strong>Status : </strong> <span id = "S"></span></p>
			      <p id = "aboutme"><strong>Email Address : </strong> <span id = "EA"></span></p>
		      </fieldset>
	      </fieldset>
      </div>
      </div>
      <div id = "dialog" title = "Delete">
	      <p>Are you sure you want to delete it ?</p>
      </div>
      <div id = "mywholeDIV">
      <p>Fill in all fields, then click <strong>ADD</strong> to add contacts.</p> 
      <fieldset id = "fieldme">
	      <!--
	      <?php 
          if (isset($verMsg)) {
              echo $verMsg;
               }
          ?>
          -->
      <form id = "myForm" method = "POST">
	      <fieldset id = "myField">
		      <legend>Add Contacts</legend>
			      Firstname:	<fieldset id = "myField1"><input type = "text" name = "firstname" id = "firstname"/></fieldset>
			      Middlename: <fieldset id = "myField1"><input type = "text" name = "middlename" id = "middlename"/></fieldset>
			      Lastname: <fieldset id = "myField1"><input type = "text" name = "lastname" id = "lastname"/></fieldset>
			      Address: <fieldset id = "myField1"><input type = "text" name = "address" id = "address"/></fieldset>
			      Contact number: <fieldset id = "myField1"><input type = "text" name = "contact_number" id = "contact_number"/></fieldset>
			      Date: <fieldset id = "myField1"><input type = "text" name = "date" id = "date"/></fieldset>
								      <input type = "hidden" id = "id">
	      </fieldset>
		      <br>
		      <button type = "reset" id = "myButton1">add</button>
		      <button type = "reset" id = "myButton2">save</button>
		      <button type = "reset" id = "myButton3">close</button>

      </form>
		      <button id = "myCont">contacts</button>
		      </br>
	      <br>
		      <fieldset id = "SF">
		      <input class = "text search-input" type = "text" id = "formSearch_q" name = "search" placeholder = "search contacts">
		      <fieldset id = "MSF"><input class = "submit" type = "image" id = "myButton4" src = "icons/search.png"/></fieldset>
		      </fieldset>
	      </br>
      </fieldset>
      </div>
      </div>
      <br>
      <div class = "myDiv">
	      <table id = "myTable" border = "1" title = "Contacts">
		      <tr>
		
			      <th id = "myTD">id</th></td>
			      <th id = "myTD">firstname</th>
			      <th id = "myTD">middlename</th>
			      <th id = "myTD">lastname</th>
			      <th id = "myTD">address</th>
			      <th id = "myTD">contact number</th>
			      <th id = "myTD">date signed</th>
			      <th id = "myTD">action[d|e|s]</th>
		      </tr>
	      </table>
      </div>
      </br>

      <center>
      <p id = "inputS"><strong id = "STR"></strong></p>
      </center>
      <center>
      <p id = "inputSinput"><strong id = "STR"></strong></p>
      </center>
   </body>
</html>
