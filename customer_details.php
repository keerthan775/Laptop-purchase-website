<html>
<style>
body{   
    background-image: url('images/2.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
	background-color:#FFFAF0;
}

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 td,  th {
    border: 1px solid #ddd;
    padding: 8px;

	}
 tr:nth-child(even){background-color: #f2f2f2;}
 tr:nth-child(1){background-color:#5F9EA0;}

tr:hover {background-color: #ddd;}
 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
a:link, a:visited {
    background-color: #00FF00;
    color: white;
    padding: 4px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: #D3D3D3;
}

</style>
<body>

<?php 
session_start();

$dbh=mysqli_connect("localhost","root","","7sem") or die("could not connect to mysql".mysql_error());

$sql="select * from register where name='".$_SESSION['sess_user']."'";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('data not found');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> name</td><td> emial </td><td>phone</td>
<td>address </td><td>city </td><td>state </td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['name']."</td><td>".$row['mail']."</td><td>".$row['phone']."</td><td>"
.$row['addr']."</td><td>".$row['city']."</td><td>".$row['state']."</td></tr>";
}
echo "</table>";
}
else
{
echo " No results found for ";
}

mysqli_close($dbh);

?>
<h1><a href="home.php">home </a></h1>
</body>
</html>
