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
	

echo'<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js">';
echo'tinyMCE.init({';
	   echo 'theme: "advanced",';
       echo 'mode : "exact",';
	   echo 'elements: "content",';
	   echo 'theme_advanced_toolbar_location: "top",';
	   echo 'theme_advanced_buttons1: "bold, italic"';
	   echo 'plugins : "bbcode"';
	   
echo '});';
echo '</script>';

echo'<form method="post" action="insertpost.php">';
        echo'<p>' ;
               echo' <textarea id = "content" name="content" cols="50" rows="15"></textarea>';
                echo'<input type="submit" value="Reply" />';
        echo'</p>';
echo'</form>';


}
?>

<?php include "footer.php"?>