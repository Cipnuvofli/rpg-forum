<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Quest[x].com</title>
  <meta name="description" content="The Message Board Designed from the ground up for Play by post roleplaying.">
  <link rel="stylesheet" type="text/css" href="CSS/Quest[x].css">

  <canvas id="Logo" width="320" height="100"></canvas>
  <script>
    var canvas = document.getElementById('Logo');
    var context = canvas.getContext('2d');
	var x = canvas.width / 2;
    var y = canvas.height / 2;
	
	context.font="2.5em Helvetica";
	context.textAlign = 'center';
	context.textBaseline = 'middle';
	context.fillStyle = "#b19b37"
	context.fillText("Quest[x].com",x,y);

  </script>
  

</head>


<body>
<div id = "UserCard">
<form action="Login.php" method="post">
 <p id = "Username">Username: <input type="text" name="Username" /></p>
 <p id = "Password">Password: <input type="password" name="Password" /></p>
 <p id = "Login"><input type="submit" value="Log In" /></p>
</form>
<div id = "LoginLinks">
 <a href="recovery.php">Forgot your Password?</a>     <a href "Register.php">Register</a> 
</div>


<p id = "Stats">Successful Write-ins: not logged in</p>
<p id = "Stats">Likes Received: not logged in</p>
<p id = "Stats">Post Count: not logged in</p>


</div>

<div id = "Topics">

<div id = "TopicQuest">
<p><a href = "Topic.php">I wanna be the Forum: The Quest(Setting: Real Life)</a></p>
<p>Posted by: Conjured Blade</p>
<p>Timestamp: 1/31/2013 at 12:51 PM</p>

</div>

<div id = "TopicRoleplay">
<p><a href = "Topic.php">DND/World of Darkness/Exalted/Original Setting, Take your pick!</a></p>
</div>

<div id = "TopicFanfiction/Fiction">
<p><a href = "Topic.php">Bad Self-insertfic vol. 1</a></p>
</div>

<div id = "TopicGeneric">
<p><a href = "Topic.php">BlahBlahBlah</a></p>
</div>

</div>


<footer>
	<p>Forum created by Joseph Penrod and Steven White</p>
</footer>
</body>
</html> 