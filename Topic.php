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
	echo'<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>';

echo'<script type="text/javascript">';
echo'tinyMCE.init({';
       echo 'mode : "textareas"';
echo '});';
echo '</script>';

echo'<form method="post" action="insertpost.php">';
        echo'<p>' ;
               echo' <textarea name="content" cols="50" rows="15">This is some content that will be editable with TinyMCE.</textarea>';
                echo'<input type="submit" value="Reply" />';
        echo'</p>';
echo'</form>';


}
?>

<?php include "footer.php"?>