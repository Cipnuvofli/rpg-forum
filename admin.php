<?php include "Header.php"?>
<?php include "ButtonPanel.php"?>
<?php include "usercard.php"?>



<?php 

if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. </p>';
	//TODO: Output this to a log
}

else if($_SESSION['rank']!= 0)
{
	echo "<p>You Shouldn't be here, ".$_SESSION['name'].".</p>";
	//TODO: Output this to a log
}
else if($_SESSION['rank']==1)
{
	
}
else
{

	
	echo '<li class = "Members"><a href = "Members.php">Members</a></li>';//Takes you to the list of members for things like promotions, and bannings


}
?>
<?php include "Footer.php"?>