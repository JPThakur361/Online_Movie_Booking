<?php 
include('conn.php');
session_start();{
$user=mysql_real_escape_string($_POST['username']);
$pass=md5($_POST['password']); 
$fetch=mysql_query("SELECT ID FROM `accounts` WHERE username='$user' and password='$pass'");
$count=mysql_num_rows($fetch);
if($count!="")
{
$_SESSION['login_username']=$user;
header("location:GALLERY.PHP");
}
else{
header('location:Login.php');
}
}
?>