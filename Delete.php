<?php
session_start();

if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. </p>';
}

else if(($_SESSION['rank']==1 || $_SESSION['rank'] == 0 ) && isset($_GET['threadid']))
{
	$threadid = $_GET['threadid'];
	$con = mysql_connect("localhost","root","Gwhnsf@76244");

  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("threads", $con);
  
  $sql = "DELETE FROM topics WHERE id = '$threadid'";
  $result = mysql_query($sql) or die(mysql_error());
  mysql_close($con);


header("Location: Home.php");
}
else if(($_SESSION['rank']==1 || $_SESSION['rank'] == 0 )  && isset($_GET['Postid']))
{
	$Postid = $_GET['Postid'];
	$con = mysql_connect("localhost","root","Gwhnsf@76244");

  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("threads", $con);
  $sql = "DELETE FROM posts WHERE postid = '$Postid'";
  $result = mysql_query($sql) or die(mysql_error());
  mysql_close($con);


header("Location: Home.php");
}
else if($_SESSION['rank']!=3 && isset($_GET['Postid']))
{

	$postid = $_GET['Postid'];
	$username = $_SESSION['name'];
$con = mysql_connect("localhost","root","Gwhnsf@76244");
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db("threads", $con);
	$sql = "Select poster FROM posts where postid = '$postid'";
	$result = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($result);

	if($row['poster'] == $_SESSION['name'])
	{

		$sql2 = "DELETE FROM posts WHERE postid = '$postid'";

		$result2 = mysql_query($sql2) or die(mysql_error());
		header("Location: Home.php");
	
	}
	else
	{
		echo '<p>You dun goofed!</p>';
	
	}
	  mysql_close($con);
	  
}
else
{
	echo '<p>Get out of here</p>';
}












?>