<?php
include("SESSION.PHP");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html><head>
<script></script><title>Costumer Voucher</title>

<style type="text/css">

.a{
background-color:#33CCFF;
height: 450px;
width: 800px;
margin: 1px 0px 0px 150px;
border:5px solid ;
border-style: dotted;
float: center;
}
.b{
background-color:#33CCFF;
height: 70px;
width: 200px;
margin: 1px 10px 0px 150px;
border:2px solid ;
border-style: solid;
float: right;
}

</style>
</head>
<h4 align="center">Print (CTRL+P) & cut this Ticket Voucher</h4>
<div class="a">
<div class="b">
<center>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.04in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.02in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>

</center>
<div id="externalbox" style="width:4in">
<div id="inputdata"><?php echo"" .date("y-m-d");?>-0978712-12-1323-21</div>
</div>

</div>

<body bgcolor="white">
<h2 Align="left" font face="Courier New", Courier, monospace" Color="Green">&nbsp;&nbsp;IMAX Movie Ticket Reservation</br></br>&nbsp;&nbsp;&nbsp;COSTUMER'S COPY</font></h2>
<h1 align="center"><font face="Franklin Gothic Medium" Color="black" size="3">
<table border=1 align=center>
<tr>
<td>Ticket Number</td>
<td>Costumer Name</td>
<td>No.of Tickets</td>
<td>Title</td>
<td>Price</td>
<td>Time</td>
<td>Date</td>
<td>Cinema</td>
</tr>
<?php
include('conn.php');
$submit=$_POST['submits'];
$query=mysql_query("SELECT * FROM `movies` ORDER BY `movies`.`ID`  DESC");
{
	$row=mysql_fetch_array($query);
	echo"<tr><td>".$row['Ticket_Number']."</td>";
	echo"<td>".$row['cname']."</td>";
	echo"<td>".$row['quantity']."</td>";
	echo"<td>".$row['Title']."</td>";
	echo"<td>".$row['price']."</td>";
	echo"<td>".$row['Time']."</td>";
	echo"<td>".$row['date']."</td>";
	echo"<td>".$row['Cinema']."</td></tr>";
	
}
?>
</table></h1></font>
<h1 align="left"><font face="arial" Color="black" size="2px">&nbsp;&nbsp;This is your copy. Keep this part in a sale place. The following are requirements when claiming your ticket:&nbsp;&nbsp;</br></font><font size="1">&nbsp;&nbsp;*&nbsp;This Ticket Voucher (Costumer's copy)<br>&nbsp;&nbsp;*&nbsp;Personally claim your movie ticket after reservation on working days in any IMAX ticket booth nationwide. Working days are from Monday to Sunday.<br>&nbsp;&nbsp;This document is valid after reservation until <?php echo date("M-d-Y"); ?>&nbsp;between&nbsp;<?php
include('conn.php');
$query=mysql_query("SELECT * FROM `movies` ORDER BY `movies`.`Ticket_Number`  DESC");
{
	$row=mysql_fetch_array($query);
	echo "".$row['Time']."";
}
?> </font></h1>
<h3 align="left" font face="Courier New, Courier, monospace">&nbsp;&nbsp;Costumer's Signature:&nbsp;&nbsp;______________________
</h3>
</div>
<h3 align="center">
 Copyright © 2014.<a href="gallery.php">&nbsp;Movie Ticket Reservation</a></h3>

</body>
</html>