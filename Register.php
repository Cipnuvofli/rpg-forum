<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <meta name="description" content="Registration">
  <link rel="stylesheet" type="text/css" href="CSS/Quest[x].css">
</head>

<body>
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
  
<div id = "Registration form">
<form action="rp.php" method = "post">
  <p id = "Birthday">Enter your Birthday: <input type="date" name="bday"></p>



 <p id = "Email"> Enter your E-mail: <input type="email" name="usrEmail"></p>
<p id = "Uname">Enter Your Username: <input type="text" name="name"></p>

<p id = "Passkey">Enter Your Password: <input type="password" name = "Pw"></p>

<p>Please prove you are a human by solving this simple math problem(Captcha powered by Securimage): </p>
<p><img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /></p>
<p><input type="text" name="captcha_code" size="10" maxlength="6" /></p>

<p><a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a></p>

<p>Do you agree to abide by the rules of this forum?</p>
<p><a href = "ForumRules.php">Forum Rules</a></p>
<p> I Agree:<input type="checkbox" name="rules" value="yes"></p>
<p><input type = "submit" value = "Register"></p>
</form>
</div>


<footer>
	<p>Forum created by Joseph Penrod and Steven White</p>
</footer>
</html>

