<?php

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("threads", $con);

$sql = "SELECT postdate, title, originalposter, genre FROM topics";
$result = mysql_query($sql) or die(mysql_error());

echo '<div id = "Topics">';
  
while($row = mysql_fetch_assoc($result))
{
	$postdate = $row['postdate'];
	$title = $row['title'];
	$originalposter = $row['originalposter'];
	$genre = $row['genre'];
	if($genre == 'Generic')
	{
		echo '<div id = "TopicGeneric">';
		echo '<div id = "TopicContents">';
		echo '<p><a href = "Topic.php">'.$title.'</a></p>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
		echo '</div>';

	}
	if($genre == 'Quest')
	{
		echo '<div id = "TopicQuest">';
		echo '<div id = "TopicContents">';
		echo '<p><a href = "Topic.php">'.$title.'</a></p>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '<div id = "StoryOnlyButton">';
		echo '<a href = "#">';
		echo '<button style="background-color:#000000;"type="button";><p>Story Only</p>';
		echo '</button></a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
	}
	if($genre == 'Fiction')
	{
		echo '<div id = "TopicFiction">';
		echo '<div id = "TopicContents">';
		echo '<p><a href = "Topic.php">'.$title.'</a></p>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '<div id = "StoryOnlyButton">';
		echo '<a href = "#">';
		echo '<button style="background-color:#000000;"type="button";><p>Story Only</p>';
		echo '</button></a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	if($genre == 'Roleplay')
	{
		echo '<div id = "TopicRoleplay">';
		echo '<div id = "TopicContents">';
		echo '<p><a href = "Topic.php">'.$title.'</a></p>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
		echo '</div>';
	}


}
echo '</div>';
mysql_close($con);

?>