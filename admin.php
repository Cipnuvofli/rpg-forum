<?php include "Header.php"?>
<?php include "ButtonPanel.php"?>
<?php include "usercard.php"?>



<?php 

if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. </p>';

}

else if($_SESSION['rank']!= 0)
{
	echo "<p>You Shouldn't be here, ".$_SESSION['name'].".</p>";
}
else if($_SESSION['rank']==1)
{
	
}
else
{


	echo '<li class = "Members"><a href = "Members.php">Members</a></li>';


}
?>
<?php include "Footer.php"?>