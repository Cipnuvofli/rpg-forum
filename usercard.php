<?php
session_start();
if(isset($_SESSION['loggedin']))
{
        echo '<div id = "UserCard">';
		echo '<p id = "UCAvatar"><img src="'.$_SESSION['Avatar'].'" alt = "User Avatar"></p>';
        echo '<p id =  "Username">Logged in as: '.$_SESSION['name'].'</p>';
       
		echo'<div id = "Stats">';
        echo'<p>Successful Write-ins: '.$_SESSION['writeins'].'</p>';
        echo '<p>Likes Received: '.$_SESSION['Likes received'].'</p>';
        echo '<p>Post Count: '.$_SESSION['postcount'].'</p>';
        echo '<p>Character Sheets: TODO</p>';
		echo '</div>';
		
		echo '<p id = "Avatarchange"><a href = "personal.php">Change my Avatar/Sig</a></p>';
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
echo ' <a href="recovery.php">Forgot your Password?</a>     <a href="register.php">Register</a> ';
echo '</div>';

echo '<div id = "Stats">';
echo'<p>Successful Write-ins: not logged in</p>';
echo '<p>Likes Received: not logged in</p>';
echo '<p>Post Count: not logged in</p>';
echo '<p>Character Sheets: not logged in</p>';
echo '</div>';
echo '</div>';
}

?>