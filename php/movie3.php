<?php
include("SESSION.PHP");?>
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
<title>Cinema 3</title>

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
width: 1030px;
font-color: yellow;
padding: 10px;
border: 5px solid;
border-color: black;
margin: 0px 59px 0px 0px;
text-shadow: rgb(255, 0, 0) 6px 5px 5px;


}
.left{
background-image:
url("");
height: 700px;
width: 200px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 140px;
float: left;
}
.mid{
	background-image:
url("pics/background/mid5.jpg");
	height: 715px;
	width: 640px;
	margin: 0px 0px 0px 140px;
	box-shadow: 0 0 20px rgba(81, 203, 238, 1);
	float: left;
}
.right{
background-image:
url("");
height: 700px;
width: 200px;
border: 5px solid;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
border-color: black;
margin: 0px 0px 0px 0px;
float: left;
}
.bottom{
background-image:
url("pics/background/footer.jpg");
height: 100px;
width: 1055px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
margin: 1px 0px 0px 140px;
float: left;
}
.style1 {
	font-family: "Berlin Sans FB Demi";
	font-size: 18px;
	color: yellow;
	box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}
.center{
background-color:;

border:#FFFFFF;
border:thick;
width:1400px;
height:1060px;
margin: 1px 0px 0px 120px;

}
.style7 {color: rgb(255, 255, 51)}
select[type=a], select {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  border: 5px solid #DDDDDD;
}

select[type=a]:focus, select:focus {
  box-shadow: 0 0 100px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
}
.style8 {color: rgb(255, 255, 51)}
input[type=text], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 5px solid #DDDDDD;
}

input[type=text]:focus, textarea:focus {
  box-shadow: 0 0 100px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
}
.style9 {color: rgb(255, 255, 51)}
input[type=submit], button {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  border: 5px solid  #0099FF;
  background-color:#0099FF;
  font-size:20px;
  font-family:Centaur;
  font-weight:bold;
  width:200px;
  text-align:center;
  
}

input[type=submit]:focus, button:focus {
  box-shadow: 0 0 100px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
  font-size:24px;
  font-family:Centaur;
  font-weight:bolder;
  width:250px;
  text-align:center;
  color:#FFFF00;
}

</style>
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
 <a href="sample.php"><span>Logout</span></a></li> 
<li><a href="GALLERY.php"><span>List of Movies</span></a></li> 
</ul>
</div>
</div>

<div class="mid">
<p style="font-family: Berlin Sans FB Demi; font-size: 30px; text-align: center; color: red;"></p>
<p style="font-family: Berlin Sans FB Demi; font-size: 30px; text-align: center; color: red; font-weight: bold;"></p>
<p style="font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 30px; text-align: center; color: yellow;"><big><big>
Movie Description</big></big></p>
<div style="color: red; text-align: center;">
<?php include('conn.php');
function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}


$submit=$_POST['submits'];
$ticketnum=createRandomPassword();
$cname= $_POST['cname'];
$quantity=$_POST['quantity'];
$Title= $_POST['Title'];
$price= $_POST['price'];
$Time= $_POST['Time'];
$Date=date('Y-m-d');
$Cinema= $_POST['Cinema'];
$result = mysql_query("SELECT ticketnum FROM cinema3");
while($row = mysql_fetch_array($result))
	{
	$ticket=$row['ticketnum'];
	}
	$number=$ticket-$quantity;
{
if ($submit){
if(strlen($cname)>=4){
if(strlen($cname)<=16){

mysql_query("INSERT INTO movies (Ticket_Number,username,cname,quantity,Title,price,Time,date,Cinema,ticket_status) VALUES('$ticketnum','$login_session','$cname','$quantity','$Title','$price','$Time','$Date','$Cinema','Active')");
mysql_query("UPDATE  cinema3 SET  ticketnum =  '$number' WHERE  `cinema3`.`No` =1;");
die("<button type='button' onclick=''><A href='receipt.php'> <img src='pics/print.jpg' alt='Klematis' /><br />Print Voucher</A></button>");
}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
}
}
else{
echo'<script type="text/javascript">alert("Please input your Firstname & Lastname!")</script>';
}
}
if($ticket <= 0)
{
die("<h1 style='background-color:white'>Sorry no tickets available!</h1>");
}
}
?></div>
<form action="" method="post">
<br><br>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 18px; color: yellow;">Costumer
  Name:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="cname" style="padding: 5px 10px; width: 210px; height:15px" required="required" type="text">
  &nbsp;</p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 30px; color: yellow;"><span style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 18px; color: yellow;">No. of tickets:<span style="text-align: center;">&nbsp;</span></span><span style="text-align: center;">&nbsp;&nbsp;&nbsp;
  <select name="quantity" style="padding: 5px 10px; width: 100px;" id="quantity">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>
</span><br>
</p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 18px; color: yellow;">Title
of Movie:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="Title" style="padding: 5px 10px; width: 210px;" type="text" readonly value="
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['title']."";
}
?>">
&nbsp;</p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 18px; color: yellow;">Price:&nbsp;&nbsp;&nbsp;
  <input name="price" style="padding: 5px 10px; width: 100px;" type="text" readonly value="
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['price']."";
}
?>">
&nbsp;</p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 18px; color: yellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time:
  &nbsp;&nbsp;&nbsp;&nbsp;
  <select name="Time" style="padding: 5px 10px; width: 210px;">
    <option><?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['time1']."";
}
?></option>
    <option><?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['time2']."";
}
?></option>
    <option><?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['time3']."";
}
?></option>
  </select>
</p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 18px; color: yellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cinemas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input name="Cinema" style="padding: 5px 10px; width: 210px;" readonly type="text" value="Cinema 3">
</p>
<p style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="submits" value="Reserve Movie" type="submit"  width="200px" height="200">
</p>
</form>
</div>
<div class="right"><img alt="" style="width: 201px; height: 146px; float: left;" src="pics/background/rose.jpg">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema1`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['image'];?>" border="2px solid" opacity="0.5"  width="201px" height="190px" /><?php echo"";
	}
	?>
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema2`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?>
    <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema3`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?></div>
<div class="right"><img src="pics/background/field.jpg" alt="" style="width: 201px; height: 146px; float: left;">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema4`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['image'];?>" border="2px solid" opacity="0.5"  width="201px" height="190px" /><?php echo"";
	}
	?>
	<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema5`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?>
    <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?></div><div class="bottom"><br>
<div style="text-align: center;">&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: white;"><big>Online
Movie Ticket Reservation</big></span><br>
<span style="color: white;"></span>
</div>
<span style="color: white;"><big><span style="color: white;">Copyright © 2</span></big></span><big style="color: white;">013-2014 by: Rosefield Uton &amp;
John Carlo Sunico<br>
All Rights Reserved.</big>
</div>
<br>
</body>
</div></html>