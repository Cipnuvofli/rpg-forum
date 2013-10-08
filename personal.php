<?php include "Header.php"?>

<?php include "ButtonPanel.php"?>

<?php include "usercard.php"?> 

<p id = "header">Edit Your Profile</p>

<div id = "editprofile">


	
<p>Avatar:</p>
	<form action="profilechange.php" method="post" enctype="multipart/form-data"> 
	<label for="file" style="margin-left:18em">Filename:</label>
	<input type="file" name="file" id="file"><br><br>
	

	<p> Signature:</p>
	<form action="profilechange.php" method="post">
	<font size="3" style="color:#b19b37;margin-left:20em"><input type="text" name="signature" size="30" style="margin-left:.3em"></font>
	<br><br>
	
	<input type="submit" value="Save Changes" style="margin-left:70em"><br>
	
	
</form></form>
</div><br><br>

<?php include "footer.php" ?>
	