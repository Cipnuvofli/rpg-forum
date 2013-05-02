<?php

session_start();

$title = $_POST['Title'];
$Category = $_POST['Genre'];
$OP = $_SESSION['name'];
$postdate = date( 'Y-m-d' );

$timestamp = $_SERVER['REQUEST_TIME'];
$Content = $_POST['ThreadStory'];

if($Category == 'Quest'|| $Category == 'Fiction')
{
	$Story = True;
}
else
{
	$Story = False;
}

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("threads", $con);

$table1 = "topics";
$table2 = "posts";
$query1 = mysql_query("SHOW TABLE STATUS WHERE name='$table1'");
$query2 = mysql_query("SHOW TABLE STATUS WHERE name='$table2'");
$row1 = mysql_fetch_array($query1);
$row2 = mysql_fetch_array($query2);
$threadid = 0;

$id = "SELECT id FROM Topics";
$iterator = mysql_query($id) or die(mysql_error());
while($row = mysql_fetch_assoc($iterator))
{
	$threadid = $row['id'];
}
$threadid = $threadid+1;

$sql = "INSERT INTO topics (title,  postdate, genre, originalposter)VALUES('$title', '$postdate', '$Category','$OP')";
$posts = "INSERT INTO posts (threadid, timestamp, content, poster, Story)VALUES('$threadid', '$timestamp', '$Content', '$OP', '$Story')";
$result = mysql_query($sql) or die(mysql_error());
$result2 = mysql_query($posts) or die(mysql_error());




mysql_close($con);


header("Location: Home.php");
?>