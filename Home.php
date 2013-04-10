

<?php include "Header.php"?>

<?php include "usercard.php"?>


<?php
if(isset($_SESSION['loggedin']))
{
echo'<a href = "CreateThread.php" class = "Upperlinks">Create Thread</a>';
}
?>


<a href = "Tutorial.php" class = "Upperlinks">Tutorial</a>


<?php include "listtopics.php"?>

<?php include "footer.php"?>
