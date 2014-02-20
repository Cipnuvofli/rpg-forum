<?php
session_start();
if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. </p>';
}

else if(($_SESSION['rank']==1 || $_SESSION['rank'] == 0 )  && isset($_POST['ID']))
{
$content = $_POST['content'];
$ID = $_POST['ID'];
$username = $_SESSION['name'];
$con = mysql_connect("localhost","root","Gwhnsf@76244");
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db("threads", $con);
 $sql = "Update posts set content = '$content' where postid = '$ID'";
 $result = mysql_query($sql) or die(mysql_error());

header("Location: Home.php");
}
else if($_SESSION['rank']!=3 && isset($_POST['ID']))
{

$content = $_POST['content'];
$ID = $_POST['ID'];
$username = $_SESSION['name'];

$con = mysql_connect("localhost","root","Gwhnsf@76244");
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db("threads", $con);
	$sql = "Select poster FROM posts where postid = '$ID'";
	$result = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($result);

	if($row['poster'] == $_SESSION['name'])
	{

		 $sql = "Update posts set content = '$content' where postid = '$ID'";
		 $result = mysql_query($sql) or die(mysql_error());
	
	}
	else
	{
		echo '<p>You dun goofed!</p>';
	
	}
	  mysql_close($con);
	  header("Location: Home.php");
	  
}
else
{
	echo '<p>Get out of here</p>';
}












?>