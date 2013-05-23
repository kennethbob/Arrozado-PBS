<html>
<head>
<title>Actor and Actress</title>
<script src = "js/jquery-1.8.2.min.js"></script>
<script src = "js/myScript.js"></script>
<script src = "js/jquery-ui-1.9.0.custom.min.js"></script>
<link rel = "stylesheet" href = "CSS/fav_CSS.css"/>
<link rel = "stylesheet" href = "CSS/myScript.css"/>
<link rel = "stylesheet" href = "CSS/jquery-ui-1.9.0.custom.min.css"/>
<link rel = "shortcut icon" href = "icons/p.png"/>
</head>
<body>
<fieldset class = "pmookStyle">
<p id = "pmook1">pmook<a href = "pmook_index.php"><img id = "foodIMG" src = "icons/home.png"/></a></p>
</fieldset></br>
<div>
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
   <div class = "actClass">
      <fieldset class = "actFS">
         <form id = "actForm">
            Actor: <fieldset id = "fField"><input type = "text" name = "actor" id = "actor"/></fieldset>
            Actress: <fieldset id = "fField"><input type = "text" name = "actress" id = "actress"/></fieldset>
         </form>
         <br>
            <button id = "actAdd">add to list</button>
            <button id = "actEdit">save to list</button>
            <button id = "actDelete">remove from list</button>
         </br>
      </fieldset>
   </div>
   <br>
      <div class = "actDiv">
         <fieldset class = "actFStab">
            <table class = "actTable" border = 1>
               <tr>
                  <td>act_id</td>
                  <td>actor</td>
                  <td>actress</td>
               </tr>
            </table>
         </fieldset>
      </div>
   </br>
</div>
</body>
</html>
