<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12347") or die("Error Connect to Database");
$objDB = mysql_select_db("realtime");
$strSQL = "INSERT INTO dht22 ";
$strSQL .="(id_sensor,temperature,humidity,status) ";
$strSQL .="VALUES ";
$strSQL .="('NULL','".$_POST["txttemperature"]."','".$_POST["txthumidity"]."','".$_POST["txtstatus"]."')";

$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
		
</body>
</html>