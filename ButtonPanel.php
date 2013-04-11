
<ul id="menu-bar">
 <li class="active"><a href="#">Home</a></li>
 <li><a href="#">Test</a></li>
 <li><a href="Tutorial.php">Tutorial</a></li>
 <?php
 if(isset($_SESSION['loggedin']))
 {
	echo '<li><a href="CreateThread.php">Create Thread</a></li>';
 }
 ?>
</ul>

