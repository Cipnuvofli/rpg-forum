<?php include "Header.php"?>

<?php include "ButtonPanel.php"?>

<?php include "usercard.php"?> 

<p id = "header">Edit Your Profile</p>

<div id = "editprofile">


	
<p>Avatar:</p>
	<form action="profilechange.php" method="post" enctype="multipart/form-data"> 
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file"><br><br>
	

	<p> Signature:</p>
	<form action="profilechange.php" method="post">
	<input type="text" name="signature" size="30"">
	<br><br>
	
	<input type="submit" value="Save Changes"><br>
	
	
</form></form>
</div><br><br>

<?php include "footer.php" ?>
	