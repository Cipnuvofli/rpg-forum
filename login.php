<!DOCTYPE html>


 <?php 
session_start();
$con = mysql_connect("localhost","root","Gwhnsf@76244");
CRYPT_BLOWFISH or die ('<p>No Blowfish found.</p>');
$Blowfish_Pre = '$2a$05$';
$Blowfish_End = '$';
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("members", $con);
if(isset($_SESSION['loggedin']))
{
	die("Already Logged in!");

}

$username = mysql_real_escape_string($_POST['Username']);
$password = mysql_real_escape_string($_POST['password']);


$sql = "SELECT Username, salt, password FROM users WHERE Username = '$username'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($result);

$writeins = $row['Writeins'];
$likes = $row['Likes received'];
$postcount = $row['Postcount'];


$hashed_pass = crypt($password, $Blowfish_Pre.$row['salt'].$Blowfish_End);

if($username == $row['Username'] && $hashed_pass == $row['password'])
{
	echo '<p>Login Successful!</p>';
	$_SESSION['loggedin'] = "YES";
	$_SESSION['name'] = $username;
	$_SESSION['writeins'] = $writeins;
	$_SESSION['postcount'] = $postcount;
}
else
{
	echo '<p>Login Failure</P>';
}
mysql_close($con);


 ?> 
