<?php

session_start();

$postid = $_POST['postid'];
$threadid = $_POST['threadid'];
$content = $_POST['content'];
$poster =  $_POST['poster'];
$story =  $_POST['story'];

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("threads", $con);

$sql = "INSERT INTO posts (postid,  threadid, content, poster, Story)VALUES('$postid', '$threadid', '$content','$poster', '$story')";
$result = mysql_query($sql) or die(mysql_error());





mysql_close($con);


header("Location: Home.php");

?>