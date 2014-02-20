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
$con = mysql_connect("localhost","root","Gwhnsf@76244");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("members", $con);
 //Special Thanks to Greg Bogg's tutorial on using blowfish hashing for Passwords
$agreement = $_POST['rules'];
$month = $_POST['dobm'];
$day = $_POST['dobd'];
$year= $_POST['doby'];
$date = strtotime($day.'-'.$month.'-'.$year);
$Birthday = date("Y-m-d", $date);
$Email = mysql_real_escape_string($_POST['usrEmail']);
$name = mysql_real_escape_string($_POST['name']);
$password = mysql_real_escape_string($_POST['Pw']);
CRYPT_BLOWFISH or die ('No Blowfish found.');
$Blowfish_Pre = '$2a$05$';
$Blowfish_End = '$';
$Allowed_Chars ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
$Chars_Len = 63;

// 18 would be secure as well.
$Salt_Length = 21;

$mysql_date = date( 'Y-m-d' );
$salt = "";

for($i=0; $i<$Salt_Length; $i++)
{
    $salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
}
$bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;

$hashed_password = crypt($password, $bcrypt_salt);

$Captcha = $_POST['captcha_code'];


if($securimage->check($Captcha) == true &&isset($agreement)&& $agreement == 'yes')
{
echo "<p>Registration Successful!.</p><br/><br/>";

$sql="INSERT INTO users (Joindate, salt, password, birthday, email, Username, avatar, Rank)VALUES('$mysql_date', '$salt', '$hashed_password','$Birthday','$Email','$name', 'images/avatars/1.jpg', '2')";
}
else if($agreement != 'yes')
{
	echo "<p>You must agree to the Forum rules to register.</p><br/><br/>";
	exit;

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
 
 
 
 
 
 



<p><a href = "home.php">Return to main page</a></p>


</html>