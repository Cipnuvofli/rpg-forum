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


echo'<p id = "Stats">Successful Write-ins: not logged in</p>';
echo '<p id = "Stats">Likes Received: not logged in</p>';
echo '<p id = "Stats">Post Count: not logged in</p>';
echo '<p id = "Stats">Character Sheets: not logged in</p>';
echo '</div>';
}

?>