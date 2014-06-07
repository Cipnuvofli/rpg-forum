
<ul id="menu-bar">
 <li><a href="home.php">Home</a></li>
 <li><a href="Tutorial.php">FAQ</a></li>
 <?php
 session_start();
 if(isset($_SESSION['loggedin']))
 {
	echo '<li><a href="CreateThread.php">Create Thread</a></li>';
	if($_SESSION['rank']==0)//If you're an Admin, this gives you a link to the admin version of the admin panel
	{
	echo '<li><a href="admin.php">Admin</a></li>';
	}
	else if($_SESSION['rank']==1)//If you're a Moderator, this gives you a link to the Moderator version of the Admin Panel
	{
	echo '<li><a href="admin.php">Moderator</a></li>';
	}
 }
 ?>
</ul>

