<html>
<title>Home</title>
<link rel="stylesheet" 
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

section {
  position: relative;
  
}


section img {
  position: absolute;
}
.top {
  animation-name: fade;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-duration: 5s;
  animation-direction: alternate;
  
  }

@keyframes fade {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a.a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a.a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
p{
	background-color:	#F5F5F5	;
	height:420px;
	opacity:0.5;
}
.bg-changer {
    animation: bg-img-slider 10s linear infinite;
    transition: background 300ms ease-in 200ms;
}

.bg-changer {
  animation: bg-img-slider 10s linear infinite;
  /*transition: background 300ms ease-in 200ms;*/
  transition-timing-function: ease-in-out;
  transition-duration: 30s;
}
@keyframes bg-img-slider {
  0%, 100% {
    background-image: radial-gradient(	#ADFF2F, snow);
  }
  20% {
    background-image: radial-gradient(#2b5876, #4e4376);
  }
  40% {
    background-image: radial-gradient(#44A08D, #093637);
  }
  60% {
    background-image: radial-gradient(#DD5E89, #F7BB97);
  }
  80% {
    background-image: radial-gradient(#348F50, #56B4D3);
  }
  90% {
    background-image: radial-gradient(#bdc3c7, #2c3e50);
  }
}

</style>
<body class="bg-changer">
<section>
<img class="bottom" src="images/img1.jpg" width=900 height=150/>
<img class="top" src="images/img2.jpg" width=900 height=150/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<ul>
  <li><i class="fa fa-home" style="font-size:50px;color:green;"></i></li>
  <li><a href="customer_details.php"><i style="font-size:25px"><b>Details</b></i></a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i style="font-size:25px"><b>Update Details</b></i></a>
    <div class="dropdown-content">
      <a class="a" href="update_addr.html"><i style="font-size:25px"><b>Address</b></i></a>
      <a class="a" href="update_state.html"><i style="font-size:25px"><b>State</b></i></a>
      <a class="a" href="update_city.html"><i style="font-size:25px"><b>city</b></i></a>
	  <a class="a" href="update_phn.html"><i style="font-size:25px"><b>Phone num</b></i></a>
	  <a class="a" href="update_pass.html"><i style="font-size:25px"><b>Password</b></i></a>
    </div>
  </li>
  <li><a href="history.php"><i style="font-size:25px"><b>History</b></i></a></li>
  <!--<li><a href="delete.php">Delete account</a></li>-->
  <li><a href="logout.php" ><i class="fa fa-sign-out" style="font-size:40px"></i></a></li>
</ul>
<h1>Welcome, <?php 
session_start();

echo $_SESSION['sess_user'];
?>!</h1>  <br><br>

<a  href="asus.html" style="margin-left:10em"><img src="images/asus4.jpg" width=300 height=150/></a>
<a  href="hp.html" style="margin-left:25em"><img  src="images/hp1.jpg" width=300 height=150/></a>
<br/><br/><br/><br/><br/><br/><br/><br/><br><br>
<a   href="dell.html" style="margin-left:10em"><img src="images/dell1.jpg" width=300 height=150/></a>
<a   href="iball.html" style="margin-left:25em"><img  src="images/iball1.jpg" width=300 height=150/></a>
<br/><br/><br/><br/><br/><br/><br/><br/><br><br>


<a   href="acer.html" style="margin-left:10em"><img  src="images/acer1.jpg" width=300 height=150/></a>
<a  href="lenovo.html" style="margin-left:25em"><img  src="images/lenovo1.jpg" width=300 height=150/></a>
<br/><br/><br/><br/><br/><br/><br/><br/><br><br>
<a  href="mac.html" style="margin-left:10em"><img  src="images/mac4.jpg" width=300 height=150/></a>
<a   href="hpp.html" style="margin-left:25em"><img  src="images/hpp1.jpg" width=300 height=150/></a>
<br/><br/><br/><br/><br/><br/><br/><br/><br><br>

<a  href="dellv.html" style="margin-left:10em"><img  src="images/dellv1.jpg" width=300 height=150/></a>
<a  href="microsoft.html" style="margin-left:25em"><img class="10" src="images/microsoft1.jpg" width=300 height=150/></a>
<br/><br/><br/><br/><br/><br/><br/><br/><br><br>
<a href="asus1.html" style="margin-left:10em"><img  src="images/asus11.jpg" width=300 height=150/></a>
<a  href="ascer.html" style="margin-left:25em"><img  src="images/ascer4.jpg" width=300 height=150/></a>
<br/><br/><br/><br/><br/><br/><br/><br/><br><br>



</section>
<p style="font-size:30px"><i>For any query about <b>online laptop portal </b>
<br>contact Developer :7204864098
<br> mail<i class="fa fa-at"></i><i class="fa fa-arrow-right">
 keerthankeeru775@gmail.com,mahantsj1997@gmail.com</i>
<br><br>
<i class="fa fa-amazon"></i>
<i class="fa fa-angellist"></i>
&nbsp &nbsp &nbsp &nbsp &nbsp <i class="fa fa-desktop" style="font-size:35px"></i> 
<br>this is the beta-version ,,so if client wants any changes can be made further
Follow us on <i class="fa fa-instagram"></i>i_m_keerthan,manthu_jyothibannad
<br><br><br>
<i class="fa fa-instagram" style="font-size:50px"></i>
<i class="fa fa-internet-explorer" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-institution" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-github-square" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-globe" style="font-size:50px"></i>

<i class="fa fa-google-plus" style="font-size:50px"></i>

<i class="fa fa-html5" style="font-size:50px"></i>

<i class="fa fa-linkedin-square" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-opera" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-twitter" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-pinterest-square" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-rss" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-server" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-shopping-bag" style="font-size:50px"></i>
&nbsp &nbsp &nbsp 
<i class="fa fa-shopping-cart" style="font-size:50px"></i>
<br>
</p>
</body>
</html>
