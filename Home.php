<?php include "Header.php"?>

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

<?php include "footer.php"?>