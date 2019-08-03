<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css"> 
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
</script>
  <script src="script.js"></script> 
<title>Registration Form</title>

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
color: white;
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
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
width: 200px;
border: 5px solid;
border-color: black;
margin: 0px 0px 0px 140px;
float: left;
}
.mid{
background-image:
url("pics/background/mid2.jpg");
height: 710px;
width: 640px;
margin: 0px 0px 0px 0px;
float: left;
}
.right{
background-image:
url("");
height: 700px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
width: 200px;
border: 5px solid;
border-color: black;
margin: 0px 150px 0px 0px;
float: left;
}
.bottom{
background-image:
url("pics/background/footer.jpg");
height: 110px;
box-shadow: 0 0 20px rgba(81, 203, 238, 1);
width: 1060px;
margin: 1px 0px 0px 145px;
float: left;
}
}
.style1 {color: rgb(255, 255, 51)}
input[type=text], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 2px solid #DDDDDD;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
}

input[type=text]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
  height:30px;
  width:300px;
  font-family:"Courier New", Courier, monospace;
  font-size:20px;
  text-align:center;
  font-weight:bolder;
}
.style1 {color: rgb(255, 255, 51)}
input[type=email], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  border: 2px solid #DDDDDD;
 
}

input[type=email]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
   height:30px;
  width:300px;
  font-family:"Courier New", Courier, monospace;
  font-size:20px;
  text-align:center;
  font-weight:bolder;
}
.style1 {color: rgb(255, 255, 51)}
input[type=password], textarea {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  border: 2px solid #DDDDDD;
 
}

input[type=password]:focus, textarea:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
  height:30px;
  width:300px;
  font-size:20px;
  text-align:center;
}
.style1 {color: rgb(255, 255, 51)}
input[type=submit], button {
  -webkit-transition: all 0.60s ease-in-out;
  -moz-transition: all 0.60s ease-in-out;
  -ms-transition: all 0.60s ease-in-out;
  -o-transition: all 0.60s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  box-shadow: 0 0 20px rgba(81, 203, 238, 1);
  margin: 5px 1px 3px 0px;
  background-color:#0099FF;
  border: 2px solid #0066FF;
  height:35px;
  width:200px;
  font-family:Forte;
  font-size:18px;
  font-weight:bolder;
}
input[type=submit]:focus, button:focus {
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 5px solid rgba(81, 203, 238, 1);
  height:50px;
  width:300px;
  text-align:center;
  font-family:"Courier New", Courier, monospace;
   background-color: #0099FF;
}
.style1 {color: rgb(255, 255, 51)}
input[type=button], button{
  box-shadow: 0 0 80px rgba(81, 203, 238, 10);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 5px solid rgba(81, 203, 238, 1);
  height:50px;
  width:300px;
  text-align:center;
  font-family:"Courier New", Courier, monospace;
   background-color: #0099FF;
}
.center{
background-color:;

border:#FFFFFF;
border:thick;
width:1400px;
height:1050px;
margin: 1px 0px 0px 120px;

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
 <a href="REGISTRATION.php"><span>Sign Up</span></a></li> 
 <li><a href="Login.php"><span>Login</span></a></li> 
  <li><a href="HOME.php"><span>Home</span></a></li>
<li><a href="About.html"><span>About Us</span></a></li>
<li><a href="UPDATE.php"><span>List of movies</span></a></li>
</ul>
</div>
</div>

<div class="left">
<a href="https://www.facebook.com/" target="_blank">
<img alt="" style="border: 2px solid ; width: 201px; height: 146px; float: left;" src="pics/link/facebook.jpg"></a>
<a href="https://twitter.com/login" target="_blank">
<img alt="" style="border: 2px solid ; width: 201px; height: 178px; float: left;" src="pics/link/twitter.jpg"></a>
<a href="https://instagram.com/accounts/login/"target="_blank">
<img alt="" style="border: 2px solid ; width: 201px; height: 170px; float: left;" src="pics/link/insta.jpg"></a>
<a href="https://accounts.google.com/ServiceLogin?elo=1" target="_blank">
<img src="pics/link/gmail.jpg" alt="" height="190" style="border: 2px solid; width: 201px; height: 195px; float: left;"></a>
</div>
<div class="mid">
<p style="font-family: Berlin Sans FB Demi; font-weight:bolder;font-size: 30px; text-shadow: rgb(255, 0, 0) 6px 5px 5px; text-align: center; color: white;">Registration
Form Fill-up All
</p>
<form action="" method="post">
<div style="color: red; text-align: center;">
<?php include('conn.php');
$submit=$_POST['submits'];
$name= $_POST['name'];
$user= $_POST['user'];
$email= $_POST['email'];
$pass= md5($_POST['pass']);
$repass=md5($_POST['repass']);
$query=mysql_query("SELECT * FROM accounts WHERE username='$user' or email='$email'")or die("Wrong Query");
if ($submit){
if($user&$pass&$repass){
if(strlen($user)>=8){
if(strlen($user)<=16){
if(mysql_num_rows($query)==1){
echo'<script type="text/javascript">alert("Username or Email already exist!, try another email and username")</script>';
}
else{
if($pass==$repass){
mysql_query("INSERT INTO accounts (name,username,email,password) VALUES('$name','$user','$email','$pass')");
die("<button type='a' onclick=''><A href='Login.php'>Login to your account now</A></button>");
}
else{
echo'<script type="text/javascript">alert("Password did not match!")</script>';
}
}
}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
}
}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
}
}
else{
echo'<script type="text/javascript">alert("Please Fill up All Fields!")</script>';
}
}
?></div>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: black; font-weight:bolder">Fullname:</p>
<p style="text-align: center;"> <input name="name" type="text">&nbsp;</p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: black; font-weight:bolder">Username:</p>
<p style="text-align: center;"><input name="user" type="text"></p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: black; font-weight:bolder">E-mail
Addrress:</p>
<p style="text-align: center;"><input name="email" type="email"></p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: black; font-weight:bolder">Password</p>
<p style="text-align: center;"><input name="pass" type="password" required="required"></p>
<p style="text-align: center; font-family: Berlin Sans FB Demi; text-shadow: rgb(255, 0, 0) 6px 5px 5px; font-size: 20px; color: black; font-weight:bolder">Re-type
Password</p>
<p style="text-align: center;"><input name="repass" type="password" required="required"></p>
<p style="text-align: center;"><input name="submits" value="Register Account" type="submit">
</p>
</form>
</div>
<div class="right">
<img alt="" style="width: 201px; height: 146px; float: left;" src="pics/background/cs.jpg">
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming1`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?>
<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming2`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?><?php
include('conn.php');
$query=mysql_query("SELECT * FROM `upcoming3`");
{
	$row=mysql_fetch_array($query);
	echo"";?><img src="<?php echo $row['Image'];?>" border="2px solid" opacity="0.5"  width="201px" height="180px" /><?php echo"";
	}
	?>
    </div>
<div class="bottom">
<div class="link">

</div><br>
<div style="text-align: center;">&nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;<span style="color: white;"><big>Online
Movie Ticket Reservation</big></span><br>
<span style="color: white;"></span>
</div>
<span style="color: white;"><big>


</div>
</body>
</center>
</div>
</html>