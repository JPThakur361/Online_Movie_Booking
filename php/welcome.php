<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
		</script> 
        <style>
.movie{
background-image:
url("pics/gg.jpg");
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
font-family: Berlin Sans FB;
height: 259px;
width: 1100px;
font-color: yellow;
padding: 10px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 140px;
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
background-image:url("pics/f.jpg");
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
5%{background-image: url("pics/download%20(12).jpg");}
33.3% {background-image: url("pics/adds.jpg");}
66.6% {background-image: url("pics/download%20(12).jpg");}
100% {background-image: url("pics/images%20(20).jpg");
}
}
.bottom{
background-image:
url("pics/images%20(16).jpg");
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
<body>
<div class="center">
<body bgcolor="#000000">
<div style="width: 1033px;" class="movie">
<h2 style="font-size: 45px; text-align: left; text-shadow: rgb(255, 0, 0) 6px 5px 5px; color: yellow;"><img alt="" style="float: left; width: 139px; height: 101px;" src="pics/ll.jpg">
<p style="color: yellow;">&nbsp; Movie
Ticket
Reservation</p>
</h2><p style="font-size: 20px; text-shadow: rgb(255, 0, 0) 8px 5px 5px; color: yellow; font-family: Lucida Calligraphy; font-style: italic; text-align: left; font-weight:bolder;">&nbsp;&nbsp;"&nbsp;Changing
your movie world experience </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;through
technology"</p>
 
        </div>
<div class="mid">

<div class="left">
<img alt="" style="float: left; width: 201px; height: 146px;" src="pics/download%20%287%29.jpg">
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

          
<img alt="" style="float: left; width: 640px; height: 100px;" src="pics/images%20%2822%29.jpg">
</br>

<div class="video">
<center>
<video width="620px"; height="610px" controls>
  <source src="HD Film Countdown (pink).mp4" type="video/mp4">
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

<span style="color: white;"><big>&nbsp;<span style="color: white;">Copyright © 2</span></big></span><big style="color: white;">013-2014 by: Rosefield Uton &amp;
John Carlo Sunico<br>
All Rights Reserved.</big>
</div>
</center>
</body>
</div></html>