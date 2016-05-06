<html>
<head>

	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php

	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("chicken");
	
	mysql_query("SET NAMES UTF8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
	
	$strSQL  ="UPDATE profilename SET Profile_comment = '".$_POST["txtarea"]."' ";
	$strSQL .="WHERE Profile_name = '".$_POST["name"]."' ";
	
	$objQuery0 = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	
	if($objQuery0)
	{
		echo "update Done.";
		$d  = date("Y-m-d H:i:s");
		$slstart = "SELECT * FROM  `realtime` ORDER BY  `Realtime_DateTime` DESC LIMIT 0 , 1";
		$objQuery = mysql_query($slstart);
		$objResult = mysql_fetch_array($objQuery)or die ("Error Query8 [".$objQuery."]");
		$lab = $objResult['Realtime_Round'];
		echo $lab;
		$strSQL1  ="INSERT INTO realtime (Device_id,Profile_name,Realtime_Status,Realtime_Datetime,Realtime_Round) VALUES ('10','".$_POST["name"]."','off','".$d."','".$lab."')";
		$objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
		if ($objQuery1)
		{
			echo "save off Done.";
			echo "<script type='text/javascript'>window.location.href = \"/Chicken/pages/select.php \";</script>";
			exit();
		}
	}
	else
	{
		echo "Error Save [".$strSQL."]";
	}
	
	mysql_close($objConnect);
	
?>
</body>
</html>
