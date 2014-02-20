<?php include "Header.php"?>
<?php include "ButtonPanel.php"?>
<?php include "usercard.php"?>




<?php
echo '<div id = "posts">';
$con = mysql_connect("localhost","root","Gwhnsf@76244");
$Owner = $_GET['owner'];
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("threads", $con);

$OP = "SELECT originalposter, title, postcount, id From topics WHERE genre = 'CharacterSheets' and originalposter='$Owner'";

$Chartopic = mysql_query($OP) or die(mysql_error());
$r1 = mysql_fetch_assoc($Chartopic);
$topicid = $r1['id'];
$postcount = $r1['postcount'];
$title = $r1['title'];

$huh = $r1['originalposter'];

if(!isset($title) &&isset($_SESSION['loggedin']))
{

$title = "CSheets";
$Category = "CharacterSheets";
$OriginalPoster = $_SESSION['name'];
$postdate = date( 'Y-m-d' );

$timestamp = $_SERVER['REQUEST_TIME'];
$Content = "Blank Character Sheet";


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

$sql = "INSERT IGNORE INTO topics (title,  postdate, genre, originalposter)VALUES('CSheets', '$postdate', '$Category','$OriginalPoster')";
$posts = "INSERT IGNORE INTO posts (threadid, timestamp, content, poster, Story)VALUES('$threadid', '$timestamp', '$Content', '$OriginalPoster', '0')";
$result = mysql_query($sql) or die(mysql_error());
$result2 = mysql_query($posts) or die(mysql_error());
}

$sql = "SELECT Postid, Timestamp, Content, Poster FROM posts WHERE Threadid = '$topicid' ";
$bird = mysql_query($sql) or die(mysql_error());

	while($row = mysql_fetch_assoc($bird))
	{
		
		$Postid = $row['Postid'];
		$Timestamp = $row['Timestamp'];
		$Content = $row['Content'];
		$Poster = $row['Poster'];
		mysql_select_db("members", $con);
		$avi = "SELECT Avatar from users WHERE Username = '$Owner'";
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
		echo '<p class ="Posttext">'.$Content.'</p>';
		echo '</div>';
	if(isset($_SESSION['loggedin']))
	 {
		if($_SESSION['rank']==1||$_SESSION['rank'] == 0|| $_SESSION['name'] == $Poster)
		{
				echo '<div class = "Delete">';
				echo '<a href = "delete.php?Postid='.$Postid.'">Delete Post                       </a>';
				echo '<a href = "editPost.php?Postid='.$Postid.'">                       Edit Post</a>';

				echo '</div>';	
		}
	}
		echo '</div>';
		
	}


if(isset($_SESSION['loggedin']) && ($_SESSION['rank']==1||$_SESSION['rank'] == 0|| $_SESSION['name'] == $Poster))
{

echo '<div id = "container">';
echo '<div class = "Reply">';	
echo'<p>';
echo'<form method="post" action="insertpost.php">';
               echo' <textarea id = "content" name="content" cols="1" rows="1"></textarea>';
			   				echo'<input type="hidden" name="Title" value="CSheets">';
							echo'<input type="hidden" name="CThreadid" value="'.$topicid.'">';
                echo'<input type="submit" value="Create" />';	
echo'</form>';
echo'</p>';
echo '</div>';
echo '</div>';
}

echo '</div>';

?>

