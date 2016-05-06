
<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");

$sltemperature = "SELECT  `avg_t` ,`avg_h` FROM temperature WHERE id = '1' ";
$obj = mysql_query($sltemperature) or die ("Error Query2 [".$sltemperature."]");
$Result6 = mysql_fetch_array($obj);
 
$AB = $Result6['avg_t'];
$AC = $Result6['avg_h'];

echo $AB;
echo "<br>";
echo $AC;

mysql_close($objConnect);
?>
</body>
</html>