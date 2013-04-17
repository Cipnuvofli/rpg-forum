<?php include "Header.php"?>

<?php include "usercard.php"?>

<?php include "ButtonPanel.php"?>


<?php

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("threads", $con);

$queryid = $_GET['threadid'];
 
 
$sql = "SELECT Postid, Timestamp, Content, Poster, Story FROM posts WHERE Threadid = $queryid ";

$result = mysql_query($sql) or die(mysql_error());

echo '<div id = "posts">';

while($row = mysql_fetch_assoc($result))
{
	
}

echo '</div>';
?>

<?php include "footer.php"?>