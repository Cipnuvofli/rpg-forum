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



while($row = mysql_fetch_assoc($result))
{
	$Postid = $row['Postid'];
	$Timestamp = $row['Timestamp'];
	$Content = $row['Content'];
	$Poster = $row['Poster'];
	$Story = $row['Story'];
	
	
	echo '<div class = "Post">';
	echo '<div class = "user">';
	echo '<p>'.$Poster.'</p>';
	echo '<div class = "avatar">';
	echo '<img src = "Images/Avatars/0.jpg">';
	echo '</div>';
	echo '</div>';
	echo '<div class = "content">';
	echo '<p>'.$Content.'</p>';
	echo '</div>';
	echo '</div>';
	
}
if(isset($_SESSION['loggedin']))
{
echo '<div class = "Reply">';	
echo'<p>';
echo'<form method="post" action="insertpost.php">';
               echo' <textarea id = "content" name="content" cols="1" rows="1"></textarea>';
                echo'<input type="submit" value="Reply" />';
echo'</form>';
echo'</p>';
echo '</div>';

}
?>

<?php include "footer.php"?>