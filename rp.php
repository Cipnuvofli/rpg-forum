<!DOCTYPE html>



<head>
  <meta charset="utf-8">
  <title>Quest[x].com</title>
  <meta name="description" content="Registration">
  <link rel="stylesheet" type="text/css" href="CSS/Quest[x].css">
</head>


 <?php 
 
session_start();
 include_once $_SERVER['DOCUMENT_ROOT'] . 'quest[x]/securimage/securimage.php';
$securimage = new Securimage();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("members", $con);
 
$Birthday = $_POST['bday'];
$Email = $_POST['usrEmail'];
$name = $_POST['name'];
$password = $_POST['Password'];
$Captcha = $_POST['captcha_code'];


if($securimage->check($Captcha) == true)
{

$sql="INSERT INTO users (birthday, email, Username)VALUES('$Birthday','$Email','$name')";
}

else
{
	echo "<p>The Captcha code entered was incorrect(Try enabling cookies).</p><br/><br/>";
	exit;

}

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }



mysql_close($con);

  
 ?>
 
 
 
 
 
 



<p><a href = "home.php">Return to main page.</a></p>


</html>