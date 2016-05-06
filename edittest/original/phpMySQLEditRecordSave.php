<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");
$strSQL = "UPDATE manual_temp SET ";
$strSQL .="temp = '".$_POST["txttemp"]."' ";
$strSQL .=",humidity = '".$_POST["txthumidity"]."' ";
$strSQL .="WHERE id_time = '".$_GET["id_time"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "<script language=\"JavaScript\">";
	echo "alert('Save Done');";
	echo "</script>";
	echo "<script type=\"text/javascript\"> window.location='setting_manual.php'</script>";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>