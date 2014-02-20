<?php
if(isset($_SESSION['loggedin']))
{
		$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
		mysql_select_db("members", $con);
		$Poster = $_SESSION['name'];
		$avi = "SELECT Avatar, Postcount from users WHERE Username = '$Poster'";
		$aviquery =  mysql_query($avi) or die(mysql_error());
		$r3 = mysql_fetch_assoc($aviquery);
		$blarg = $r3['Avatar'];
		$postcount = $r3['Postcount'];
        echo '<div id = "UserCard">';
		echo '<p id = "UCAvatar"><img src="'.$blarg.'" alt = "User Avatar"></p>';
        echo '<p id =  "Username">Logged in as: '.$_SESSION['name'].'</p>';
       
        echo'<p class = "Stats">Successful Write-ins: '.$_SESSION['writeins'].'</p>';
        echo '<p class  = "Stats">Likes Received: '.$_SESSION['Likes received'].'</p>';
        echo '<p class  = "Stats">Post Count: '.$postcount.'</p>';
        echo '<p class  = "Stats"><a href = "charsheets.php?owner='.$_SESSION['name'].'">Character Sheets</a></p>';
		
		echo '<p id = "Avatarchange"><a href = "personal.php">Edit my Profile</a></p>';
		echo '<p id = "Login"><a href = "logout.php">Log out</a></p>';
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
echo '<a href="register.php">Register</a> ';
echo '</div>';


echo'<p class  = "Stats">Successful Write-ins: not logged in</p>';
echo '<p class  = "Stats">Likes Received: not logged in</p>';
echo '<p class  = "Stats">Post Count: not logged in</p>';
echo '<p class  = "Stats">Character Sheets: not logged in</p>';
echo '</div>';
}

?>