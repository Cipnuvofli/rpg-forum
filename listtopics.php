<?php

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("threads", $con);

$sql = "SELECT postdate, title, originalposter, genre, id, locked FROM topics";
$result = mysql_query($sql) or die(mysql_error());
$topiccount = mysql_num_rows($result);
echo '<div id = "Topics">';
  
$topics = 0;  
while($row = mysql_fetch_assoc($result) and $topics<5)
{
	$postdate = $row['postdate'];
	$title = $row['title'];
	$originalposter = $row['originalposter'];
	$genre = $row['genre'];
	$id = $row['id'];
	$locked = $row['locked'];
	if($genre == 'Generic')
	{

		echo '<div class = "TopicGeneric">';
		echo '<p><a href = "Topic.php?threadid='.$id.'&storyonly=0">'.$title.'</a></p>';
				if($locked == 1)
		{
		echo'<p>This Thread is locked</p>';
		}
		 if(isset($_SESSION['loggedin']))
 {

		if($_SESSION['rank']==1||$_SESSION['rank'] == 0)
		{
			echo '<div class = "StoryOnlyLink"><a href = "Delete.php?threadid='.$id.'">Delete Thread</a></div>';
		}
	}
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
		$topics = $topics+1;

	}
	if($genre == 'Quest')
	{

		echo '<div class = "TopicQuest">';
		 if(isset($_SESSION['loggedin']))
		{

		
		if($_SESSION['rank']==1||$_SESSION['rank'] == 0)
		{
			echo '<div class = "StoryOnlyLink"><a href = "Delete.php?threadid='.$id.'">Delete Thread</a></div>';
		}
		}
		echo '<p><a href = "Topic.php?threadid='.$id.'&storyonly=0">'.$title.'</a></p><div class = "StoryOnlyLink"><a href = "Topic.php?threadid='.$id.'&storyonly=1">Story Only</a></div>';
		if($locked == 1)
		{
		echo'<p>This Thread is locked</p>';
		}
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
		$topics = $topics+1;
	}
	if($genre == 'Fiction')
	{
		echo '<div class = "TopicFiction">';
		 if(isset($_SESSION['loggedin']))
 {

		
			if($_SESSION['rank']==1||$_SESSION['rank'] == 0)
		{
			echo '<div class = "StoryOnlyLink"><a href = "Delete.php?threadid='.$id.'">Delete Thread</a></div>';
		}
		}
		echo '<p><a href = "Topic.php?threadid='.$id.'&storyonly=0">'.$title.'</a></p><div class = "StoryOnlyLink"><a href = "Topic.php?threadid='.$id.'&storyonly=1">Story Only</a></div>';
		if($locked == 1)
		{
		echo'<p>This Thread is locked</p>';
		}
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
		$topics+1;
	}
	if($genre == 'Roleplay')
	{

		echo '<div class = "TopicRoleplay">';
		 if(isset($_SESSION['loggedin']))
 {

			if($_SESSION['rank']==1||$_SESSION['rank'] == 0)
		{
			echo '<div class = "StoryOnlyLink"><a href = "Delete.php?threadid='.$id.'">Delete Thread</a></div>';
		}
	}
		echo '<p><a href = "Topic.php?threadid='.$id.'&storyonly=0">'.$title.'</a></p>';
				if($locked == 1)
		{
		echo'<p>This Thread is locked</p>';
		}
		echo '<p>Posted by:'.$originalposter.'</p>';
		echo '<p>Original Post Date: '.$postdate.'</p>';
		echo '</div>';
		$topics = $topics+1;
	}
	
}
if($topiccount>5)
{
	echo'<form action="movepageT.php" method = "post">';
	$i = $topiccount*5;
	
	
	echo'</form>';

	
	
}

echo '</div>';
mysql_close($con);

?>