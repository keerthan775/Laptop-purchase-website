<html>
<body>

<?php 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
$name=$_POST['user'];
$password=$_POST['pass'];
$dbh=mysqli_connect("localhost","root","","7sem") or die("could not connect to mysql".mysql_error());
$sql="SELECT * FROM register WHERE name='".$name."' AND password='".$password."'";

$res=mysqli_query($dbh,$sql);

if(!$res)
{
	die('Could not update ');
} 
else{
	
	

if($row=mysqli_fetch_assoc($res))
{
	session_start();
	$_SESSION['sess_user']=$name;
header("Location:home.php");
}
else{
	die(header("Location:registerinsert.html"));;
}

}
mysqli_close($dbh);
}
?>
</html>
</body>