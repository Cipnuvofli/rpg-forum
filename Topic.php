<?php include "Header.php"?>
<?php include "ButtonPanel.php"?>
<?php include "usercard.php"?>




<?php
echo '<div id = "posts">';
$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("threads", $con);

$queryid = $_GET['threadid'];
$Storyonly = $_GET['storyonly'];
 
$sql = "SELECT Postid, Timestamp, Content, Poster, Story FROM posts WHERE Threadid = $queryid ";

$OP = "SELECT originalposter, title, locked, postcount From topics WHERE id = $queryid";

$result = mysql_query($sql) or die(mysql_error());
$bird = mysql_query($OP) or die(mysql_error());

$r2 = mysql_fetch_assoc($bird);
$reftitle = $r2['title'];
$huh = $r2['originalposter'];
$locked = $r2['locked'];
$postcount = $r2['postcount'];
$pages = $postcount/25;
$posts = 0;




if($Storyonly == 1)
{
	while($row = mysql_fetch_assoc($result))
	{
		$Postid = $row['Postid'];
		$Timestamp = $row['Timestamp'];
		$Content = $row['Content'];
		$Poster = $row['Poster'];
		$Story = $row['Story'];
		$posts = $posts+1;
		if($Story == 1)
		{
		mysql_select_db("members", $con);
		$avi = "SELECT Avatar, Signature from users WHERE Username = '$Poster'";
		$aviquery =  mysql_query($avi) or die(mysql_error());
		$r3 = mysql_fetch_assoc($aviquery);
		$blarg = $r3['Avatar'];
		$siggy = $r3['Signature'];
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
		echo '<hr/>';
		echo '<p>'.$siggy.'</p>';
		echo '<hr/>';
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
		$posts = $posts+1;
		mysql_select_db("members", $con);
		$avi = "SELECT Avatar, Signature from users WHERE Username = '$Poster'";
		$aviquery =  mysql_query($avi) or die(mysql_error());
		$r3 = mysql_fetch_assoc($aviquery);
		$blarg = $r3['Avatar'];
		$siggy = $r3['Signature'];
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
		echo '<hr/>';
		echo '<p>'.$siggy.'</p>';
		echo '<hr/>';
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
}

if(isset($_SESSION['loggedin']) && $locked == 0)
{

echo '<div id = "container">';
echo '<div class = "Reply">';	
echo'<p>';
echo'<form method="post" action="insertpost.php">';
               echo' <textarea id = "content" name="content" cols="1" rows="1"></textarea>';
                echo'<input type="submit" value="Reply" />';	
				if($_SESSION['name'] == $huh)
				{
					echo'<p> Story:<input type="checkbox" name="Story" value="yes"></p>';
				}
				if($_SESSION['rank']==1||$_SESSION['rank'] == 0)
				{
					echo'<p> Lock Thread:<input type="checkbox" name="Lock" value="yes"></p>';
				}
				echo'<input type="hidden" name="Title" value="'.$reftitle.'">';
echo'</form>';
echo'</p>';
echo '</div>';
echo '</div>';
}
else if($locked != 0)
{

echo '<p id = "Lockmessage">This thread is locked.</p>';
}

echo '</div>';
?>

