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

$id = "SELECT id, postcount FROM Topics WHERE title = '$Threadtitle'";
$iterator = mysql_query($id) or die(mysql_error());
$row = mysql_fetch_assoc($iterator);
echo $Threadtitle;
if($Threadtitle == 'CSheets')
{
$threadid = $_POST['CThreadid'];
echo '<p>HELLO!</p>';
echo $threadid;
}
else
{
$threadid = $row['id'];
}
$postcount = $row['postcount'] + 1;

$plusone = "UPDATE topics SET postcount = '$postcount' WHERE title = '$Threadtitle' ";
$increment = mysql_query($plusone) or die(mysql_error());




echo $threadid;
$sql = "INSERT INTO posts (threadid, content, poster, Story, timestamp)VALUES('$threadid', '$content','$poster', '$story', '$timestamp')";
$result = mysql_query($sql) or die(mysql_error());
mysql_select_db("members", $con);
$getuserpostcount = "select Postcount from users where Username = '$poster'";
$rq =   mysql_query($getuserpostcount) or die(mysql_error());
$rowQ = mysql_fetch_assoc($rq);
$pcQ = $rowQ['Postcount'];
$pcQ = $pcQ+1;
$insertnewpostcount = "update users set Postcount = '$pcQ' where Username = '$poster'";
$ipq =   mysql_query($insertnewpostcount) or die(mysql_error());
if($Threadtitle != 'CSheets')
{
$locked = $_POST['Lock'];
if(isset($locked))
{
	if($locked == "yes")
	{
	$locked = 1;
	$sql2 = "update topics set locked = '$locked' where id = '$threadid'";
	$result2 =   mysql_query($sql2) or die(mysql_error());
	}
	else
	{
	$locked = 0;
	}
}

}




mysql_close($con);
if($Threadtitle != 'CSheets')
{
  header("Location: Topic.php?threadid=$threadid&storyonly=0");
}
else
{
header("Location: charsheets.php?owner=$poster");

}


?>