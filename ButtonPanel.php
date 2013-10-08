
<ul id="menu-bar">
 <li><a href="home.php">Home</a></li>
 <li><a href="Tutorial.php">FAQ</a></li>
 <?php
 if(isset($_SESSION['loggedin']))
 {
	echo '<li><a href="CreateThread.php">Create Thread</a></li>';
	if($_SESSION['rank']==0)
	{
	echo '<li><a href="admin.php">Admin</a></li>';
	}
	else if($_SESSION['rank']==1)
	{
	echo '<li><a href="admin.php">Moderator</a></li>';
	}
 }
 ?>
</ul>

