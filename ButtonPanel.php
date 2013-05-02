
<ul id="menu-bar">
 <li><a href="home.php">Home</a></li>
 <li><a href="Tutorial.php">FAQ</a></li>
 <?php
 if(isset($_SESSION['loggedin']))
 {
	echo '<li><a href="CreateThread.php">Create Thread</a></li>';
 }
 ?>
</ul>

