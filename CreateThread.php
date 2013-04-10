<?php include "Header.php"?>

<body> 

<div id="Create Thread">
<div id="header" style="color:#b19b37;text-align:center;border:.3em outset #b19b37;margin-left:20em;margin-right:20em;">
<font size="6">Create Thread
</font>
</div>
<div style="border:.3em outset #b19b37;margin-top:5em;margin-left:15em;margin-right:15em">

<form action="Threadinsert.php" method="post">
	<font size="4" style="color:#FFFFFF;margin-left:1.7em"> Title: <input type="text" name="Title" size="60" style="margin-left:.5em;margin-top:1em"><br>
	</font>
	
	<textarea name="ThreadStory" cols="52" rows="6" style="margin-left:2em">Create story here...</textarea><br>
	<select name = "Genre" style="margin-left:2em;margin-bottom:2em">
		<option>Select Genre</option>
		<option value="Quest">Quest</option>
		<option value="Roleplay">Roleplay</option>
		<option value="Fiction">Fiction</option>
		<option value="Generic">Generic</option>
	</select><br>
	
	<font size="4" color="#b19b37" style="margin-left:2em">Create choices for users to vote for: </font><br>
	
	<div style="color:#FFFFFF;margin-left:3.5em"> First Choice: <input type="text" name="First" size="80" style="margin-left:1.95em;margin-top:1em">
	</div>
	<div style="color:#FFFFFF;margin-left:3.5em"> Second Choice: <input type="text" name="Second" size="80" style="margin-left:.5em;margin-top:1em">
	</div>
	<div style="color:#FFFFFF;margin-left:3.5em"> Third Choice: <input type="text" name="Third" size="80" style="margin-left:1.55em;margin-top:1em">
	</div>
	<div style="color:#FFFFFF;margin-left:3.5em"> Fourth Choice: <input type="text" name="Fourth" size="80" style="margin-left:1em;margin-top:1em">
	</div>
	
	<input type="submit" value="Submit" style="margin-left:2em;margin-bottom:1em"><br> 
	

</form>
</div>

<div>
<a href = "Home.php">
<button style="background-color:#000000;"type="button";><p>Return Home</p>
</button>
</div>
</div>

</body>

<?php include "footer.php" ?>