<?php
$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("members", $con);

$email = mysql_real_escape_string($_POST['Email']);
echo '<p>'.$email.'</p>';
$sql = "SELECT Email FROM users WHERE Email = $email ";
echo '<p>'.$sql.'</p>';
$result = mysql_query($sql) or die(mysql_error());
/*$row = mysql_fetch_assoc($result);


if($email == $row['Email'])
{
mail($email,"Your Password","Your Password Reset Link","\"From:\" . admin@questx.com");
echo "<p>If this works, it would send an email to the address you entered.</p>";

}
else
{
echo "<p>Email not found</p>";
echo "<a href =\"home.php\">Return to Home page.</a>";
}*/



?>