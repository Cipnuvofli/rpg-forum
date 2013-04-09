

<?php include "Header.php"?>

<?php include "usercard.php"?>

<div id = "Buttons">
<?php
if(isset($_SESSION['loggedin']))
{
echo'<button style="background-color:#00000; margin-left:4.5em" type="button" onClick="location.href=\'CreateThread.php\'">Create Thread';
echo'</button>';
}
?>
<button style= "background-color:#000000 margin-left:2em" type="button" onClick="location.href='tutorial.php'">Tutorial
</button>
</div>


<?php include "listtopics.php"?>

<?php include "footer.php"?>
