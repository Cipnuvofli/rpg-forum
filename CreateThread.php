<?php include "Header.php"?>
<?php include "ButtonPanel.php"?>
<?php include "usercard.php"?>



<?php
if(isset($_SESSION['loggedin'])&&isset($_SESSION['name']))
{
echo"<p id = \"header\">Create Thread</p>";

echo"<div id = \"threadpane\">";

echo"<form action=\"Threadinsert.php\" method=\"post\">";
	echo"<p> Title: <input type=\"text\" name=\"Title\" size=\"60\"><br/>";
	echo"</p>";
	
	echo"<textarea name=\"ThreadStory\" cols=\"52\" rows=\"6\"></textarea><br/>";
	echo"<p>Genre: <select name = \"Genre\">";
		echo"<option value=\"Quest\">Quest</option>";
		echo"<option value=\"Roleplay\">Roleplay</option>";
		echo"<option value=\"Fiction\">Fiction</option>";
		echo"<option value=\"Generic\">Generic</option>";
	echo"</select></p>";
	echo"<br>";


if($_SESSION['rank']==1||$_SESSION['rank'] == 0)
{
echo '<p> Lock Thread:<input type="checkbox" name="Lock" value="yes"></p><br/>';
}


	
	echo"<p>Voting Options: </p><br/>";
	
	echo"<p>First Choice: <input type=\"text\" name=\"First\" size=\"80\" ></p>";

	echo"<p> Second Choice: <input type=\"text\" name=\"Second\" size=\"80\" ></p>";

	echo"<p> Third Choice: <input type=\"text\" name=\"Third\" size=\"80\"></p>";

	echo"<p>Fourth Choice: <input type=\"text\" name=\"Fourth\" size=\"80\"></p>";

	
	echo"<input type=\"submit\" id=\"Createthread\" value=\"Submit\"><br> ";
	

echo"</form>";
echo"</div><br><br>";
}
else
{
echo "<p>You must be logged in to use this function</p>";

}

?>

<?php include "footer.php" ?>