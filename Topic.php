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
$Storyonly = $_GET['storyonly'];
 
$sql = "SELECT Postid, Timestamp, Content, Poster, Story FROM posts WHERE Threadid = $queryid ";

$OP = "SELECT originalposter, title From topics WHERE id = $queryid";

$result = mysql_query($sql) or die(mysql_error());
$bird = mysql_query($OP) or die(mysql_error());

$r2 = mysql_fetch_assoc($bird);
$reftitle = $r2['title'];
$huh = $r2['originalposter'];

if($Storyonly == 1)
{
	while($row = mysql_fetch_assoc($result))
	{
		$Postid = $row['Postid'];
		$Timestamp = $row['Timestamp'];
		$Content = $row['Content'];
		$Poster = $row['Poster'];
		$Story = $row['Story'];
		
		if($Story == 1)
		{
		mysql_select_db("members", $con);
		$avi = "SELECT Avatar from users WHERE Username = '$Poster'";
		$aviquery =  mysql_query($avi) or die(mysql_error());
		$r3 = mysql_fetch_assoc($aviquery);
		$blarg = $r3['Avatar'];
		echo '<div class = "Post">';
		echo '<div class = "user">';
		echo '<p>'.$Poster.'</p>';
		echo '<div class = "avatar">';
		echo '<img src ="'.$blarg.'">';
		echo '</div>';
		echo '</div>';
		echo '<div class = "content">';
		echo '<p>'.$Content.'</p>';
		echo '</div>';
		echo '</div>';
		}
	}
}
else
{
while($row = mysql_fetch_assoc($result))
{
	$Postid = $row['Postid'];
	$Timestamp = $row['Timestamp'];
	$Content = $row['Content'];
	$Poster = $row['Poster'];
	$Story = $row['Story'];
	
	mysql_select_db("members", $con);
	$avi = "SELECT Avatar from users WHERE Username = '$Poster'";
	$aviquery =  mysql_query($avi) or die(mysql_error());
	$r3 = mysql_fetch_assoc($aviquery);
	$blarg = $r3['Avatar'];
	echo '<div class = "Post">';
	echo '<div class = "user">';
	echo '<p>'.$Poster.'</p>';
	echo '<div class = "avatar">';
	echo '<img src = "'.$blarg.'">';
	echo '</div>';
	echo '</div>';
	echo '<div class = "content">';
	echo '<p>'.$Content.'</p>';
	echo '</div>';
	echo '</div>';
	
}
}
echo '<div id = "container">';
if(isset($_SESSION['loggedin']))
{
echo '<div class = "Reply">';	
echo'<p>';
echo'<form method="post" action="insertpost.php">';
               echo' <textarea id = "content" name="content" cols="1" rows="1"></textarea>';
                echo'<input type="submit" value="Reply" />';	
				if($_SESSION['name'] == $huh)
				{
					echo'<p> Story:<input type="checkbox" name="Story" value="yes"></p>';
				}
				echo'<input type="hidden" name="Title" value="'.$reftitle.'">';
echo'</form>';
echo'</p>';
echo '</div>';

}
echo '</div>';
?>

