<?php

session_start();

$signature = $_POST['Signature'];

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("members", $con);

$sql = "INSERT INTO users (Signature) VALUES ('$signature')";
$result = mysql_query($sql) or die(mysql_error());


mysql_close($con);


header("Location: Home.php");
?>