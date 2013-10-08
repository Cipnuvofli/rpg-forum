<?php include "Header.php"?>
<?php include "ButtonPanel.php"?>
<?php include "usercard.php"?>





<p id = "header">Create Thread</p>

<div id = "threadpane">

<form action="Threadinsert.php" method="post">
	<p> Title: <input type="text" name="Title" size="60"><br>
	</p>
	
	<textarea name="ThreadStory" cols="52" rows="6"></textarea><br>
	<p>Genre: <select name = "Genre">
		<option value="Quest">Quest</option>
		<option value="Roleplay">Roleplay</option>
		<option value="Fiction">Fiction</option>
		<option value="Generic">Generic</option>
	</select></p>
	<br>
	
	<p>Voting Options: </p><br>
	
	<p>First Choice: <input type="text" name="First" size="80" ></p>

	<p> Second Choice: <input type="text" name="Second" size="80" ></p>

	<p> Third Choice: <input type="text" name="Third" size="80"></p>

	<p>Fourth Choice: <input type="text" name="Fourth" size="80"></p>

	
	<input type="submit" value="Submit"><br> 
	

</form>
</div><br><br>

<?php include "footer.php" ?>