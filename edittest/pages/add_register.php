<?php
$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");

$strSQL = "INSERT INTO member ";
$strSQL .="(UserID,Username,Password,Name,LastName,Email,Telephone,Status) ";
$strSQL .="VALUES ";
$strSQL .="('NULL','".$_POST["txtUsername"]."','".$_POST["txtpassword"]."' ";
$strSQL .=",'".$_POST["txtName"]."','".$_POST["txtLastName"]."','".$_POST["txtEmail"]."' ";
$strSQL .=",'".$_POST["txtTelephone"]."','".$_POST["Status"]."') ";
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
