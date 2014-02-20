<?php include "Header.php"?>

<?php include "ButtonPanel.php"?>

<?php include "usercard.php"?> 

<?php

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("members", $con);
$username = mysql_real_escape_string($_SESSION['name']);
$sql = "Select Signature, Avatar from users where Username = '$username'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($result);

$Signature = $row['Signature'];
$Avatar = $row['Avatar'];

mysql_close($con);

echo '<p id = "header">Edit Your Profile</p>';

echo '<div id = "editprofile">';


	echo '<img src = "'.$Avatar.'"/>';
echo '<p>Avatar(Should be 150*150 px):';
	echo '<form action="profilechange.php" method="post" enctype="multipart/form-data"> ';
	echo '<label for="file">Filename:</label>';
	echo '<input type="file" name="file" id="file"></p><br>';
	echo '<input type = "submit" name="avvie" value= "Save Changes"><br/><br/>';

	echo '<p>New Signature:</p>';
	echo '<form action="profilechange.php" method="post">';
	echo '<textarea id = "content" name="Siggy" value ="'.$Signature.'" cols="1" rows="1"></textarea>';
	echo '<br><br>';
	
	echo '<input type="submit" name="signature" value="Save"><br>';

	
	
echo '</form></form>';
echo '</div>';

?>

<?php include "footer.php" ?>
	