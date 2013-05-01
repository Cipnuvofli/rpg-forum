<?php

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("threads", $con);

$sql = "SELECT postdate, title, originalposter, genre, id FROM topics";
$result = mysql_query($sql) or die(mysql_error());

echo '<div id = "Topics">';
  
while($row = mysql_fetch_assoc($result))
{
	$postdate = $row['postdate'];
	$title = $row['title'];
	$originalposter = $row['originalposter'];
	$genre = $row['genre'];
	$id = $row['id'];
	if($genre == 'Generic')
	{

		echo '<div class = "TopicGeneric">';
		echo '<p><a href = "Topic.php?threadid='.$id.'">'.$title.'</a></p>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';

	}
	if($genre == 'Quest')
	{

		echo '<div class = "TopicQuest">';
		echo '<p><a href = "Topic.php?threadid='.$id.'">'.$title.'</a></p><div class = "StoryOnlyLink"><a href = "Topic.php?threadid='.$id.'&storyonly=1">Story Only</a></div>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
		
	}
	if($genre == 'Fiction')
	{
		echo '<div class = "TopicFiction">';
		echo '<p><a href = "Topic.php?threadid='.$id.'">'.$title.'</a></p><div class = "StoryOnlyLink"><a href = "Topic.php?threadid='.$id.'&storyonly=1">Story Only</a></div>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
	}
	if($genre == 'Roleplay')
	{

		echo '<div class = "TopicRoleplay">';
		echo '<p><a href = "Topic.php?threadid='.$id.'">'.$title.'</a></p>';
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
	}


}
echo '</div>';
mysql_close($con);

?>