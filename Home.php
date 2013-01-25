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



<p id = "Stats">Successful Write-ins: not logged in</p>
<p id = "Stats">Likes Received: not logged in</p>
<p id = "Stats">Post Count: not logged in</p>


</div>

<div id = "Topics">

<div id = "TestTopic(Quest)">
<p>I wanna be the Forum: The Quest(Setting: Real Life)</p>
</div>

<div id = "TestTopic(Roleplay)">
<p>DND/World of Darkness/Exalted/Original Setting, Take your pick!</p>
</div>

<div id = "TestTopic(Fanfiction)">
<p>Bad Self-insertfic vol. 1</p>
</div>

<div id = "TestTopic(Generic)">
<p>BlahBlahBlah</p>
</div>

</div>


<footer>
	<p>Forum created by Joseph Penrod and Steven White</p>
</footer>
</body>
</html> 