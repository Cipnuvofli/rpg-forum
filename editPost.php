<?php
include "Header.php";
 include "ButtonPanel.php";
include "usercard.php";

if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. </p>';
}

else if(($_SESSION['rank']==1 || $_SESSION['rank'] == 0 )  && isset($_GET['Postid']))
{
	$postid = $_GET['Postid'];
	$username = $_SESSION['name'];
echo '<div id = "container">';
echo '<div class = "Reply">';	
echo'<p>';
echo'<form method="post" action="e2.php">';
               echo' <textarea id = "content" name="content" cols="1" rows="1"></textarea>';
                echo'<input type="submit" value="Edit" />';	
				echo'<input type="hidden" name="ID" value="'.$postid.'">';
echo'</form>';
echo'</p>';
echo '</div>';



}
else if($_SESSION['rank']!=3 && isset($_GET['Postid']))
{

	$postid = $_GET['Postid'];
	$username = $_SESSION['name'];
$con = mysql_connect("localhost","root","Gwhnsf@76244");
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db("threads", $con);
	$sql = "Select poster FROM posts where postid = '$postid'";
	$result = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($result);

	if($row['poster'] == $_SESSION['name'])
	{

					echo '<div id = "container">';
			echo '<div class = "Reply">';	
			echo'<p>';
			echo'<form method="post" action="e2.php">';
						   echo' <textarea id = "content" name="content" cols="1" rows="1"></textarea>';
							echo'<input type="submit" value="Edit" />';	
							echo'<input type="hidden" name="ID" value="'.$postid.'">';
			echo'</form>';
			echo'</p>';
			echo '</div>';
	
	}
	else
	{
		echo '<p>You dun goofed!</p>';
	
	}
	  mysql_close($con);
	  
}
else
{
	echo '<p>Get out of here</p>';
}
include "footer.php";











?>