<?php

session_start();


$content = $_POST['content'];
$poster =  $_SESSION['name'];
$timestamp = $_SERVER['REQUEST_TIME'];
$Threadtitle = $_POST['Title'];
if(isset($_POST['Story']) == false)
{
	$story = 0;
}
else if($_POST['Story'] == 'yes')
{
	$story = 1;
}
else
{
	$story = 0;
}

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("threads", $con);

$id = "SELECT id FROM Topics WHERE title = '$Threadtitle'";
$iterator = mysql_query($id) or die(mysql_error());
$row = mysql_fetch_assoc($iterator);
$threadid = $row['id'];





$sql = "INSERT INTO posts (threadid, content, poster, Story, timestamp)VALUES('$threadid', '$content','$poster', '$story', '$timestamp')";
$result = mysql_query($sql) or die(mysql_error());





mysql_close($con);


header("Location: Home.php");

?>