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



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
  
   
   $con = mysqli_connect("localhost","root","","7sem");
   

   
   $phone = $_POST['phone'];
   session_start();
   $q = "UPDATE `register` SET `phone`='".$phone."' WHERE `name` = '".$_SESSION['sess_user']."'";
   
   $result = mysqli_query($con, $q);
   
   if($result)
   {
       echo '';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($con);
}

?>
<br>
<div class="container">
  
  <div class="alert alert-success">
    <strong>UPDATED  Successfully! </strong> 
  
  </div>
  
  </div>
<h1><a href="home.php">HOME</a></h1>
</html>