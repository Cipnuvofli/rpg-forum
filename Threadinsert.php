<?php

session_start();

$title = $_POST['Title'];
$Category = $_POST['Genre'];
$OP = $_SESSION['name'];
$postdate = date( 'Y-m-d' );

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("threads", $con);

$sql = "INSERT INTO topics (title,  postdate, genre, originalposter)VALUES('$title', '$postdate', '$Category','$OP')";
$result = mysql_query($sql) or die(mysql_error());





mysql_close($con);


header("Location: Home.php");
?>