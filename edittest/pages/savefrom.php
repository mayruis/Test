<?php

$id = $_POST["aaa"];
echo $id;


include ("connectSQL.php");


$strSQL = " UPDATE message SET New = 'No' where MessageID ='".$id."'  ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
if ($objQuery)
{

	echo 'save done';
	echo "<script type='text/javascript'>window.location.href = \"/EditTest/pages/notification.php \";</script>";
}
?>