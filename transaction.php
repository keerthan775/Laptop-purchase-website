<html>
<style>
body{   
    background-image: url('images/img1.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
	background-color:#FFFAF0;
}
h1{
	color:red;
}
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



</style>
<script>
alert("succesfull")
function goBack() {
  window.history.back();
}
</script>
<body>

<?php 


$dbh=mysqli_connect("localhost","root","","7sem") or die("could not connect to mysql".mysql_error());

$sql="select * from transaction order by name limit 1";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('data not found');
} 

$count=mysqli_num_rows($res);


while($row=mysqli_fetch_assoc($res))
{
echo "<br><br><br><br><h1 align=center><i>Name:</i>".$row['name']."</h1>";
echo "<h1 align=center><i>Laptop model:</i>".$row['laptop']."</h1>";
echo "<h1 align=center><i>Date:</i>".$row['date']."</h1>";

}


mysqli_close($dbh);

?>
<h1><i>Thank you!,,,product will be delivered within week,,cash on delivery<i></h1>
<h1><button onclick="goBack()">Home</button></h1>
</body>
</html>
