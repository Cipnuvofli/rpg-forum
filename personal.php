<?php include "Header.php"?>

<?php include "ButtonPanel.php"?>

<?php include "usercard.php"?> 

<p id = "header">Edit Avatar and Signature</p>

<div id = "editprofile">

<form action="avatarinsert.php" method="post">
	<font size="6" style="color:#b19b37;margin-left:2em"> Avatars <br></font>
	<font size="3" style="color:#C0C0C0;margin-left:5em"> Choose an avatar: </font><br><br>
	
	
	<table border="1" align="center">
	<tr>
	<td><img src="Images/Avatars/0.jpg"/></td>
	<td><img src="Images/Avatars/1.jpg" height="150" width="150"/></td>
	<td><img src="Images/Avatars/2.jpg" height="150" width="150"/></td>
	<td><img src="Images/Avatars/3.jpg" height="150" width="150"/></td>
	<td><img src="Images/Avatars/4.jpg" height="150" width="150"/></td>
	</tr>
	<tr>
	<td><input type="checkbox" name="avatar" value="0" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" value="1" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" value="2" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" value="3" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" value="4" style="vertical-align:middle"/></td>
	</tr>
	</table><br><br>
	
	<font size="3" style="color:#b19b37;margin-left:50em">[Or Upload Your Own Avatar]</font>
	<input type="button" name="uploadAvatar" value="upload" style="margin-left:2em">Upload</input><br><br>

	<font size="6" style="color:#b19b37;margin-left:9.5em"> Signature <br></font>
	<font size="3" style="color:#C0C0C0;margin-left:20em"> Create your signature: </font><br><br>
	

	
	
	
</form>
</div>
	