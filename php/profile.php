<?php
include("SESSION.PHP");?>
<?php
include("field.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>About</title>

<style type="text/css">
/* unvisited link */
a:link {
color: red;
}
/* visited link */
a:visited {
color: #00FF00;
}
/* mouse over link */
a:hover {
color: violet;
}
/* selected link */
a:active {
color: #0000FF;
}
.movie{
background-image:
url("pics/gg.jpg");
font-family: Berlin Sans FB;
height: 200px;
width: 1000px;
font-color: yellow;
padding: 10px;
border: 5px solid;
border-color: black;
}
.left{
background-image:
url("pics/cut2.jpg");
height: 700px;
width: 180px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 140px;
float: left;
-webkit-animation: second 3s linear 5s infinite alternate;
-webkit-animation-duration: 10s; /* Chrome, Safari, Opera */
animation: second 1s;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes second {
0%{background-image: url("");}
33.3% {background-image: url("");}
66.6% {background-image: url("");}
100% {background-image: url("");
}
}
.mid{
background-image:
url("pics/images (17).jpg");
height: 706px;
width: 850px;
margin: 0px 0px 0px 150px;
float: left;
}
.right{
background-image:url("pics/cut2.jpg");
height: 700px;
width: 180px;
border: 5px solid;
border-color: black;
margin: 0px 130px 0px 0px;
float: left;
-webkit-animation: second 3s linear 5s infinite alternate;
-webkit-animation-duration: 10s; /* Chrome, Safari, Opera */
animation: second 1s;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes second {
0%{background-image: url("pics/asfv.jpg");}
33.3% {background-image: url("pics/download (13).jpg");}
66.6% {background-image: url("pics/downloadqq.jpg");}
100% {background-image: url("pics/maleficent_ver14-150x210.jpg");
}
}
.bottom{
background-image:
url("pics/images%20(16).jpg");
height: 100px;
width: 1040px;
margin: 1px 0px 0px 150px;
float: left;
}
</style>
</head>
<body style="background-color: black; color: rgb(0, 0, 0);" alink="#ee0000" link="#0000ee" vlink="#551a8b">
<center>
<div style="width: 1033px;" class="movie">
<h1 style="font-size: 40px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: left; color: yellow;"><img alt="" style="border: 0px solid ; text-shadow: rgb(255, 0, 0) 6px 5px 5px; width: 101px; height: 101px; float: left;" src="pics/ll.jpg"> &nbsp; Movie
Ticket
Reservation
<p style="font-size: 15px; font-family: Lucida Calligraphy;">&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&#8220;Changing
your movie world experience </p>
<p style="font-size: 15px; font-family: Lucida Calligraphy; font-style: italic; text-align: center;">
through technology&#8221;</p>
</h1>
<p style="text-align: right; font-size:20px; color:white; font-family: Berlin Sans FB Demi;">
<a href="GALLERY.PHP">Gallery</a> &nbsp; &nbsp;&nbsp;<?php echo $login_session;?>
</p>
</div>
</center>

<div class="mid">
<p style="font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 30px; text-align: center; color: yellow;">&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp;&nbsp;<br>
- My Account -
</p>
<p style="font:'Courier New', Courier, monospace; color:white; font-size:30px; text-align:left;"
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fullname:&nbsp; &nbsp;<?php
include('conn.php');
$query=mysql_query("SELECT ID FROM `accounts` where ");
{
	$row=mysql_fetch_array($query);
	echo "".$row['name']."<br>";
}
?>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Username:&nbsp; &nbsp;<?php echo $login_session;?></br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email Address:&nbsp; &nbsp;<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `accounts`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['email']."<br>";
}
?></p>


</div>
<div class="right">
</div>
<div class="bottom"><br>
<div style="text-align: center;">&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: white;"><big>Online
Movie Ticket Reservation</big></span><br>
<span style="color: white;"></span>
</div>
<span style="color: white;"><big>&nbsp;
&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: white;">Copyright 2</span></big></span><big style="color: white;">013-2014 by: Rosefield Uton &amp;
John Carlo Sunico<br>
&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Powered by Google</big>
</div>
</body>
</html>