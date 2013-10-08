<?php include "Header.php"?>

<?php include "usercard.php"?>

<?php include "ButtonPanel.php"?>

<?php 

if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. You should send me the details of how you did this.</p>';

}

else if($_SESSION['rank']!= 0)
{
	echo "<p>You Shouldn't be here, ".$_SESSION['name'].". You should send me the details of how you did this.</p>";
}
else if($_SESSION['rank']==1)
{
	
}
else
{
	echo '<li><p class = "Tabs">Members</p></li>';
	echo '<li><p class = "Tabs">Subforums</p></li>';

}
?>
<?php include "Footer.php"?>