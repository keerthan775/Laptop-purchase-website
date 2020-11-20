<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 4px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
body {
	background-color:	#F0F8FF;
}
</style>
<body>
<?php 




session_start();
$name=$_SESSION['sess_user'];
echo $name;
$dbh=mysqli_connect("localhost","root", "","7sem") or die("could not connect to mysql".mysql_error());
$sql="delete from register where name=$name ";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die( 'not deleted'.mysqli_error($res));
} 


else
{
 header("Location: login.html");
}


mysqli_close($dbh);

?>
<br>
<div class="container">
  
  <div class="alert alert-success">
    <h1><strong>DELETED Successfully! </strong> </h1>
  
  </div>
  
  

</html>