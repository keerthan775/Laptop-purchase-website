<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")

{

$name=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$addr=$_POST['addr'];
$city=$_POST['city'];
$state=$_POST['state'];
$password=$_POST['password'];



$dbh=mysqli_connect("localhost","root","","7sem") or die("could not connect to mysql".mysql_error());

$sql="insert into register values('$name','$mail','$phone','$addr','$city','$state','$password')";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not update ');
} 
else{
	echo "<script>
alert('succesfull');
window.location.href='http://localhost/7sem/login.html';
</script>";
}


mysqli_close($dbh);
}
?>