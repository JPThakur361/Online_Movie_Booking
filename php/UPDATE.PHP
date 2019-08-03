<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css"> 
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
</script>
  <script src="script.js"></script> 
<script type="text/javascript" src="js/sagallery.js"></script>
<script src="js/jquery.quicksand.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
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
url("pics/background/header.jpg");
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
font-family: Berlin Sans FB;
height: 259px;
width: 1100px;
font-color: yellow;
padding: 10px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 0px;
text-shadow: rgb(255, 0, 0) 6px 5px 5px;

}
.bottom{
background-image:
url("pics/background/footer.jpg");
height: 150px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
width: 1120px;
margin: 0px 0px 0px 150px;
float: left;
text-align:center;
}
.SECOND{
	margin: 0px;
	padding: 10px;
	border: 4px solid #0000ff;
	height: auto;
	width: auto;
	margin: 0px 25px 50px 140px;
	float: left;
	opacity:1.5;
	filter:alpha(opacity=100);
	text-align: center;
	box-shadow: 0 0 20px rgba(81, 203, 238, 1);
} 
div.img img {
display: inline;
margin: 0px;
opacity:0.5;
filter:alpha(opacity=40);
border: 1px solid #ffffff;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}
div.img a:hover img {
border: 1px solid #0000ff;
opacity:1.0;
filter:alpha(opacity=100);
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}
div.desc {
text-align: center;
font-weight: normal;
width: 120px;
margin: 5px;

}
div.img {
margin: 0px;
padding: 10px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
border: 4px solid #0000ff;
height: auto;
width: auto;
margin: 0px 25px 20px 15px;
float: left;
text-align: center;
} div.img img {
display: inline;
margin: 5px;
border: 1px solid #ffffff;
}
div.img a:hover img {
border: 3px solid white;
}
div.desc {
text-align: center;
font-weight: normal;
width: 120px;
height:auto;
margin: 5px;
}
.style1 {color: rgb(255, 255, 51)}
.center{
background-color:;
border:#FFFFFF;
border:thick;
width:1400px;
height:1060px;

margin: 1px 0px 0px 120px;

}
</style><title>MOVIES</title>

</head>
<center>
<div class="center">
<body bgcolor="#000000" background="pics/background/b4.jpg">
<div class="movie">
<h2 style="font-size: 45px; text-align: left; text-shadow: rgb(255, 0, 0) 6px 5px 5px; color: yellow;">
<img alt="" style="float: left; width: 139px; height: 101px;" src="pics/background/logo.jpg">
<p style="color: yellow;">&nbsp; Movie
Ticket
Reservation</p>
</h2><p style="font-size: 20px; text-shadow: rgb(255, 0, 0) 8px 5px 5px; color: yellow; font-family: Lucida Calligraphy; font-style: italic; text-align: left; font-weight:bolder;">&nbsp;&nbsp;"&nbsp;Changing
your movie world experience </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;through
technology"</p>
<div id='cssmenu'><ul>
 <li class='active'">
 <a href="UPDATE.php"><span>List of movies</span></a></li> 
 <li><a href="Login.php"><span>Login</span></a></li> 
  <li><a href="HOME.php"><span>Home</span></a></li>
<li><a href="About.html"><span>About Us</span></a></li>
<li><a href="REGISTRATION.php"><span>Sign Up</span></a></li>
</ul>
</div>

</div>

<div style="margin-left: 138px; width: 119px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming2`");
{
	$row=mysql_fetch_array($query);
echo'<a href="?unknown">';?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	}
	echo"";?><a class="image-zoom" href="<?php echo $row['Image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming1`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?>
</div>
</div>
<div style="margin-top: 0px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming2`");
{
	$row=mysql_fetch_array($query);
echo'<a href="?unknown">';?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	}
	echo"";?><a class="image-zoom" href="<?php echo $row['Image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming2`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?>
</div>
</div>
<div style="margin-top: 0px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming3`");
{
	$row=mysql_fetch_array($query);
echo'<a href="?unknown">';?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	}
	echo"";?><a class="image-zoom" href="<?php echo $row['Image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming3`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?>
</div>
</div>
<div style="margin-top: 0px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming4`");
{
	$row=mysql_fetch_array($query);
echo'<a href="?unknown">';?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	}
	echo"";?><a class="image-zoom" href="<?php echo $row['Image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming4`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?>
</div>
</div>
<div style="margin-top: 0px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming5`");
{
	$row=mysql_fetch_array($query);
echo'<a href="?unknown">';?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	}
	echo"";?><a class="image-zoom" href="<?php echo $row['Image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";
	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming5`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?>
</div>
</div>
<div style="height: 248px; width: 120px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming6`");
{
	$row=mysql_fetch_array($query);
echo'<a href="?unknown">';?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="110px" height="130px" /><?php echo"</a><br>";
	}
	echo"";?><a class="image-zoom" href="<?php echo $row['Image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";
	?><div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming6`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo $row['date']."<br></p>";
}
?></div>
</div>
<div style="height: 248px; width: 120px;" class="SECOND">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema1`");
{
	$row=mysql_fetch_array($query);
	echo"<a href='updatecall.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid"  width="110px" height="114px" /><?php echo"</a><br>";
	}	echo"";?><a class="image-zoom" href="<?php echo $row['image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";

	?>
<div class="desc">
  <p style="font:'Courier New', Courier, monospace; color:yellow; font-size:16px; text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema1`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['time']."<br>";
	echo $row['cinema']."<br></p>";
}
?>
  </div>
</div>
<div style="margin-top: 0px; height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema2`");
{
	$row=mysql_fetch_array($query);
	echo"<a href='updatecall.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid"  width="110px" height="114px" /><?php echo"</a><br>";
	}echo"";?><a class="image-zoom" href="<?php echo $row['image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";

	?>
<div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema2`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['time']."<br>";
	echo $row['cinema']."<br></p>";
}
?></div>
</div>
<div style="height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo"<a href='updatecall.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid"  width="110px" height="114px" /><?php echo"</a><br>";
}echo"";?><a class="image-zoom" href="<?php echo $row['image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";

	?>
<div class="desc">
<p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['time']."<br>";
	echo $row['cinema']."<br></p>";
}
?></div>
</div>
<div style="height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema4`");
{
	$row=mysql_fetch_array($query);
	echo"<a href='updatecall.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid"  width="110px" height="114px" /><?php echo"</a><br>";
	}echo"";?><a class="image-zoom" href="<?php echo $row['image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";

	?><div class="desc">
<p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema4`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['time']."<br>";
	echo $row['cinema']."<br></p>";
}
?></div>
</div>
<div style="height: 248px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema5`");
{
	$row=mysql_fetch_array($query);
	echo"<a href='updatecall.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid"  width="110px" height="114px" /><?php echo"</a><br>";
}echo"";?><a class="image-zoom" href="<?php echo $row['image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";

	?><div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema5`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['time']."<br>";
	echo $row['cinema']."<br></p>";
}
?></div>
</div>
<div style="height: 248px; width: 120px;" class="img">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo"<a href='updatecall.php'>";?><img src="<?php echo $row['image'];?>" border="2px solid"  width="110px" height="114px" /><?php echo"</a><br>";
}echo"";?><a class="image-zoom" href="<?php echo $row['image'];?>" rel="prettyPhoto[gallery]" /> View<?php echo"</a>";

	?>
    <div class="desc"><p style="font:'Courier New', Courier, monospace; color:yellow;text-shadow: 0 0 30px rgba(81, 203, 238, 1);"
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo "<p>".$row['status']."<br>";
	echo $row['title']."<br>";
	echo "Price:&nbsp;&nbsp;".$row['price']."<br>";
	echo $row['time']."<br>";
	echo $row['cinema']."<br></p>";
}
?>
</div>
</div>
<div class="bottom"><br>
&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p><span style="color: white;"><big>Online
  Movie Ticket Reservation</big></span><br>
  <span style="color: white;"></span></p>

<span style="color: white;"><big>&nbsp;

</div>

</body>
</div>
</html>
