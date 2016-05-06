

<?php
$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");
$strSQL = "UPDATE temperature SET ";
$strSQL .="event = NULL ";
$strSQL .=",sensor = '".$_GET["humidity"]."' ";
$strSQL .=",celsius = '".$_GET["temperature"]."' ";
$strSQL .="WHERE id = '1' ";
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