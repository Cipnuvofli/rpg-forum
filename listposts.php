<?php

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("threads", $con);

  
  
$id = "Select id FROM topics WHERE title = $ ";
  
$sql = "SELECT postdate, title, originalposter, update FROM posts WHERE Threadid = $id";
$result = mysql_query($sql) or die(mysql_error());

echo '<div id = "posts">';

while($row = mysql_fetch_assoc($result))
{

}
?>