<!DOCTYPE html>



<head>
  <meta charset="utf-8">
  <title>Quest[x].com</title>
  <meta name="description" content="Registration">
  <link rel="stylesheet" type="text/css" href="CSS/Quest[x].css">
</head>
<?php 
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("members", $con);
$username = mysql_real_escape_string($_POST['Username']);
$password = mysql_real_escape_string($_POST['Password']);

$sql = "SELECT Username FROM users WHERE Username = '$username'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($result);

if($username == $row['Username'])
{
	echo 'Username verified';
}
else
{
	echo 'Username issue';
}

mysql_close($con);
//what?




?>.

<p><a href = "home.php">Return to main page.</a></p>


</html>
