<?php

session_start();


$threadid = $_POST['threadid'];
$content = $_POST['content'];
$poster =  $_SESSION['name'];
$story =  $_POST['story'];
$timestamp = $_SERVER['REQUEST_TIME'];

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("threads", $con);

$id = "SELECT id, title FROM Topics WHERE id = ";
$iterator = mysql_query($id) or die(mysql_error());
while($row = mysql_fetch_assoc($iterator))
{
	$threadid = $row['id'];
}
$threadid = $threadid+1;



$sql = "INSERT INTO posts (threadid, content, poster, Story, timestamp)VALUES('$threadid', '$content','$poster', '$story', '$timestamp')";
$result = mysql_query($sql) or die(mysql_error());





mysql_close($con);


header("Location: Home.php");

?>