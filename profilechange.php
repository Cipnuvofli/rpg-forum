<?php
session_start();
if(isset($_POST['signature']))
{

$con = mysql_connect("localhost","root","Gwhnsf@76244");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("members", $con);
$signature = mysql_real_escape_string($_POST['Siggy']);
$username = mysql_real_escape_string($_SESSION['name']);
$sql = "Update users set Signature = '$signature' where Username = '$username'";
$result = mysql_query($sql) or die(mysql_error());
header("Location: personal.php");
}
else if(isset($_POST['avvie']))
{

$target = "Images/Avatars/";
$target = $target.basename($_FILES["file"]["name"]);
$allowedExts = array("gif", "jpeg", "jpg", "png");

  
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: ".$_FILES["file"]["error"] . "<br>";
    }
  else
    {
    if (file_exists("Images/Avatars/".$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"]." already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"], "Images/avatars/".$_FILES["file"]["name"]);
	  $con = mysql_connect("localhost","root","Gwhnsf@76244");

		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("members", $con);
		$username = mysql_real_escape_string($_SESSION['name']);
		$sql = "Update users set Avatar = '$target' where Username = '$username'";
		$result = mysql_query($sql) or die(mysql_error());
      }
    }
	header("Location: personal.php");
  }

else
  {
  echo "Invalid file";
  }
}
  








?>