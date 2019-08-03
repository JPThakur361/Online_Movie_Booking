<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>upload image</title>
</head>

<body>
<?php
include('conn.php');
$query=mysql_query("Select * from display_image");
echo "<table>";
while($row=mysql_fetch_array($query))
{
echo"<tr>";
echo"<td>";?><img src="<?php echo $row['images'];?>" height="100" width="100" /><?php echo"</td>";
echo"<td>";echo $row['status']; echo "</td>";

echo"</tr>";
}
echo "</table>";
?>
</body>
</html>
