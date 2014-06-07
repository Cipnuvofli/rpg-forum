<?php
session_start();
if(!isset($_SESSION['rank']))
{
	echo '<p>You shouldn\'t be here. </p>';
	//TODO: Output this to a log
}

else if($_SESSION['rank']==1 || $_SESSION['rank'] == 0 )
{
$highest = $_POST['HIGHEST'];
$con = mysql_connect("localhost","root","Gwhnsf@76244");

	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("members", $con);


for($i = 2; $i<=$highest; $i++)
{
	
	$memberid = $i;

	$newrank = $_POST[$i];

	
	$sql = "UPDATE users SET rank = '$newrank' where id = '$memberid'";
	  $result = mysql_query($sql) or die(mysql_error());


}
	 mysql_close($con);
  header("Location: members.php");

}
else
{
		echo '<p>You shouldn\'t be here. </p>';


}

















?>