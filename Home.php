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

<?php
session_start();
if(isset($_SESSION['loggedin']))
{
	echo '<div id = "UserCard">';
	echo '<p id =  "Username">Logged in as: '.$_SESSION['name'];
	
	echo'<p id = "Stats">Successful Write-ins: '.$_SESSION['writeins'].'</p>';
	echo '<p id = "Stats">Likes Received: '.$_SESSION['Likes received'].'</p>';
	echo '<p id = "Stats">Post Count: '.$_SESSION['postcount'].'</p>';
	echo '<p id = "Stats">Character Sheets: TODO</p>';
	echo '</div>';



}


else
{
echo '<div id = "UserCard">';
echo '<form action="Login.php" method="post">';
echo '<p id = "Username">Username: <input type="text" name="Username" /></p>';
echo ' <p id = "Password">Password: <input type="password" name="Password" /></p>';
echo ' <p id = "Login"><input type="submit" value="Log In" /></p>';
echo '</form>';
echo '<div id = "LoginLinks">';
echo ' <a href="recovery.php">Forgot your Password?</a>     <a href="register.php">Register</a> ';
echo '</div>';


echo'<p id = "Stats">Successful Write-ins: not logged in</p>';
echo '<p id = "Stats">Likes Received: not logged in</p>';
echo '<p id = "Stats">Post Count: not logged in</p>';
echo '<p id = "Stats">Character Sheets: not logged in</p>';
echo '</div>';
}
?>.
<div id = "PostThread">
<a href = "CreateThread.php"></a>
<button style="background-color:#000000;"type="button";><p>Create Thread</p>
</button>
</div>

<div id = "Topics">

<div id = "TopicQuest">
<div id="header" style="background-color:#000000;margin-left:.3em;margin-right:.3em;">
<h1><font size="5"><font color=#b19b37> Quest</font></font></h1></div>
<div id = "StoryOnlyButton">
<a href = "#">
<button style="background-color:#000000;"type="button";><p>Story Only</p>
</button></a>
</div>

<div id = "TopicContents">
<p><a href = "Topic.php">Quest Topic</a></p>
<p>Posted by: Conjured Blade</p>
<p>Timestamp: 1/31/2013 at 12:51 PM</p>

<p><a href ="Topic.php">Quest Topic</a></p>
<p>Posted by: KingSmith</p>
<p>Timestamp: 2/27/2013 at 8:57 PM</p>

</div>
</div>

<div id = "TopicRoleplay">
<div id="header" style="background-color:#000000;">
<h1><font size="5"><font color=#b19b37>Roleplay</font></font></h1></div>
<div id = "StoryOnlyButton">
<a href = "#">
<button style="background-color:#000000;"type="button";><p>Story Only</p>
</button>
</a>
</div>

<div id = "TopicContents">
<p><a href = "Topic.php">Roleplay Topic</a></p>
<p>Posted by: Conjured Blade</p>
<p>Timestamp: 1/31/2013 at 12:52 PM</p>

<p><a href ="Topic.php">Roleplay Topic</a></p>
<p>Posted by: KingSmith</p>
<p>Timestamp: 2/27/2013 at 8:57 PM</p>
</div>
</div>

<div id = "TopicFiction">
<div id="header" style="background-color:#000000;">
<h1><font size="5"><font color=#b19b37>Fiction</font></font></h1></div>
<div id = "StoryOnlyButton">
<a href = "#">
<button style="background-color:#000000;"type="button";><p>Story Only</p></button>
</a>
</div>

<div id = "TopicContents">
<p><a href = "Topic.php">Fiction Topic</a></p>
<p>Posted by: Conjured Blade</p>
<p>Timestamp: 1/31/2013 at 12:53 PM</p>

<p><a href ="Topic.php">Fiction Topic</a></p>
<p>Posted by: KingSmith</p>
<p>Timestamp: 2/27/2013 at 8:57 PM</p>
</div>
</div>

<div id = "TopicGeneric">
<div id="header" style="background-color:#000000;">
<h1><font size="5"><font color=#b19b37>Generic</font></font></h1></div>
<div id = "StoryOnlyButton">
<a href = "#">
<button style="background-color:#000000;"type="button";><p>Story Only</p>
</button>
</a>
</div>

<div id = "TopicContents">
<p><a href = "Topic.php">Generic Topic</a></p>
<p>Posted by: Conjured Blade</p>
<p>Timestamp: 1/31/2013 at 12:54 PM</p>

<p><a href ="Topic.php">Generic Topic</a></p>
<p>Posted by: KingSmith</p>
<p>Timestamp: 2/27/2013 at 8:57 PM</p>
</div>
</div>

</div>


<div id="footer" style =color:#b19b37;clear:both;text-align:center;">
Forum created by Joseph Penrod and Steven White </div>
</body>
</html> 