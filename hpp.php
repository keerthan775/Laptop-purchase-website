<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	session_start();
	$name=$_SESSION['sess_user'];
	$dbh=mysqli_connect("localhost","root","","7sem") or die("could not connect to mysql".mysql_error());
	$sql="insert into transaction values('$name','hp 14 pentium',(now()))";
$res=mysqli_query($dbh,$sql);

if(!$res)
{
die('Could not update ');
} 
else{
	echo "<script>alert('s');</script>";
	
	header("Location: home.php");
	
}


mysqli_close($dbh);
}
?>
