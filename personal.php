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
	<td><input type="checkbox" name="avatar" id="0" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" id="1" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" id="2" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" id="3" style="vertical-align:middle"/></td>
	<td><input type="checkbox" name="avatar" id="4" style="vertical-align:middle"/></td>
	</tr>
	</table><br><br>
	</form>
	
	<font size="3" style="margin-left:20em;color:#b19b37">Or Upload Your Own Image</font>
	<form action="upload_file.php" method="post" enctype="multipart/form-data"> 
	<label for="file" style="margin-left:18em">Filename:</label>
	<input type="file" name="file" id="file"><br><br>
	

	<font size="6" style="color:#b19b37;margin-left:9.5em"> Signature <br></font>
	<font size="3" style="color:#C0C0C0;margin-left:20em"> Create your signature: </font><br><br>
	<form action="signatureInsert.php" method="post">
	<font size="3" style="color:#b19b37;margin-left:20em"> Signature: <input type="text" name="signature" size="30" style="margin-left:.3em"></font>
	<br><br>
	
	<input type="submit" value="Submit" style="margin-left:70em"><br>
	
	
</form></form>
</div><br><br>

<?php include "footer.php" ?>
	