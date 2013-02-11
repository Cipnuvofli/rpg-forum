<!DOCTYPE html>



<head>
  <meta charset="utf-8">
  <title>Quest[x].com</title>
  <meta name="description" content="Registration">
  <link rel="stylesheet" type="text/css" href="CSS/Quest[x].css">
</head>


 <?php 
 
$Birthday = $_POST['bday'];
$Email = $_POST['usrEmail'];
$name = $_POST['name'];

$subject = "Validation Email";
$Body = "Test validation Email";
//This validation email test won't work on a WAMP server
 if (mail($Email, $subject, $Body)) {
   echo("<p>Validation Email sent. Check your email to complete your registration.</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
 ?>
 
 
 
 
 
 
 ?> 


<p><a href = "home.php">Return to main page.</a></p>


</html>