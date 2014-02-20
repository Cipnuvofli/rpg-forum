<?php include "Header.php"?>
<?php include "ButtonPanel.php"?>
<?php include "usercard.php"?>
<?php

if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. </p>';
}

else if($_SESSION['rank']==1 || $_SESSION['rank'] == 0 )
{
	$con = mysql_connect("localhost","root","Gwhnsf@76244");

  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("members", $con);
  
  $sql = "SELECT Username, Joindate, Postcount, Writeins, email, birthday,  rank, id FROM Users";
  echo '<p class = "Theader">Name | Joindate | Postcount | Writeins | Email | Bday | LikesReceived | Rerank </p>';
  $result = mysql_query($sql) or die(mysql_error());
 echo' <form action="rank.php" method = "post">';
  while($row = mysql_fetch_assoc($result))
  {
	$name = $row['Username'];
	$date = $row['Joindate'];
	$count = $row['Postcount'];
	$Writeins = $row['Writeins'];
	$email = $row['email'];
	$birthday = $row['birthday'];
	$id = $row['id'];

	$rank = $row['rank'];
	echo '<div class = "memlist">';
	echo '<p>'.$name.'|'.$date.'|'.$count.'|'.$Writeins.'|'.$email.'|'.$birthday.'| ';
	echo'<select name="'.$id.'" class = "dob">';      
	if($rank == 2)
	{
	echo'<option value="2" selected = "selected">Member    </option>';
	}
	else
	{
	echo'<option value="2">Member    </option>';
	}
	if($_SESSION['rank'] == 0)
	{
		if($rank == 0)
		{
			echo'<option value="0" selected = "selected">Admin   </option>';
		}
		else
		{
			echo'<option value="0">Admin   </option>';
		}
	}
	if($rank == 1)
	{
			echo'<option value="1" selected = "selected">Moderator    </option>';
	}
	
	else
	{
	echo'<option value="1">Moderator    </option>';
	}
	if($rank == 3)
	{
		echo'<option value="3" selected = "selected">Banned   </option>';
	}
	else
	{
	echo'<option value="3">Banned   </option>';
	}
	echo'</select></p>';
	echo'<br/><br/>';
	echo '</div>';
  
	
  }
  echo'<input type="hidden" name="HIGHEST" value="'.$id.'">';
  echo'<input type="submit" class ="memlist" value="Save Changes" />';	
  mysql_close($con);



}
else
{
	echo '<p>You shouldn\'t be here. </p>';
}








?>

<?php include "footer.php"?>