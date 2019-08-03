<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<script></script>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css"> 
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
</script>
  <script src="script.js"></script> 

<title>Welcome To Movie Ticket Reservation</title>

<style type="text/css">
/* unvisited link */
a:link {
color: CYAN;
}
/* visited link */
a:visited {
color: #00FF00;
}
/* mouse over link */
a:hover {
color: #FF00FF;
}
/* selected link */
a:active {
color: #0000FF;
}
.movie{
background-image:
url("pics/background/header.jpg");
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
font-family: Berlin Sans FB;
height: 259px;
width: 1030px;
font-color: yellow;
padding: 10px;
border: 5px solid;
border-color: black;
margin: 0px 59px 0px 0px;
text-shadow: rgb(255, 0, 0) 6px 5px 5px;


}
.left{
background-color:black;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
height: 700px;
width: 200px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 140px;
float: left;
}
.mid{
background-image:url("");
height: 400px;
width: 640px;
margin: 0px 0px 0px 0px;
float: left;
-webkit-animation: myfirst 3s linear 5s infinite alternate;
-webkit-animation-duration: 20s; /* Chrome, Safari, Opera, Phones */
animation: myfirst 1s;
}
.right{
background-image:url("pics/ads/imax.jpg");
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
height: 700px;
width: 200px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 0px;
float: left;
-webkit-animation: second 3s linear 5s infinite alternate;
-webkit-animation-duration: 20s; /* Chrome, Safari, Opera */
animation: second 1s;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes second {
5%{background-image: url("pics/ads/ad2.jpg");}
33.3% {background-image: url("pics/ads/ad1.jpg");}
66.6% {background-image: url("pics/ads/ad2.jpg");}
100% {background-image: url("pics/ads/ad3.jpg");
}
}
.bottom{
background-image:
url("pics/background/footer.jpg");
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
height: 100px;
width: 1055px;
margin: 1px 0px 0px 140px;
float: left;
text-align:center;
}
.center{
background-color:;

border:#FFFFFF;
border:thick;
width:1400px;
height:1100px;
margin: 1px 0px 0px 120px;

}
.video{
background-color:#333333;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
widows:inherit;
border:#FFFFFF;
border:thick;
width:px;
height:px;
margin:80px 0px 200px 0px;



}
</style>
</head>
<center>
<div class="center">

<body bgcolor="#000000" background="pics/background/b4.jpg">
<div  class="movie">
<h2 style="font-size: 45px; text-align: left; text-shadow: rgb(255, 0, 0) 6px 5px 5px; color: yellow;">
<img alt="" style="float: left; width: 139px; height: 101px;" src="pics/background/logo.jpg">
<p style="color: yellow;">&nbsp; Movie
Ticket
Reservation</p>
</h2><p style="font-size: 20px; text-shadow: rgb(255, 0, 0) 8px 5px 5px; color: yellow; font-family: Lucida Calligraphy; font-style: italic; text-align: left; font-weight:bolder;">&nbsp;&nbsp;"&nbsp;Changing
your movie world experience </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;through
technology"</p>
<div id='cssmenu'><ul>
 <li class='active'"><a href="HOME.php"><span>Home</span></a></li> 
 <li><a href="REGISTRATION.php"><span>Sign Up</span></a></li> 
  <li><a href="Login.php"><span>Login</span></a></li>
<li><a href="About.html"><span>About Us</span></a></li>
<li><a href="UPDATE.php"><span>List of movies</span></a></li>
</ul>
</div>
</div>
<div class="left">
<img alt="" style="float: left; width: 201px; height: 146px;" src="pics/background/cs3.jpg">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming6`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?>
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming5`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?>
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming4`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?>

</div>
<div class="mid">
<img alt="" style="float: left; width: 640px; height: 100px;" src="pics/background/cs4.jpg">
</br>

<div class="video">
<center>
<video width="620px"; height="610px" controls>
  <source src="videos/HD Film Countdown (pink).mp4" type="video/mp4">
    <source src="" type="video/mp4">

  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.</video>
  
</center>
</div>
</div>
<div class="right">



</div>
<div class="bottom">&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; <br>
&nbsp;<span style="color: white;"><big>Online
Movie Ticket Reservation</big></span><br>
<span style="color: white;"></span>

