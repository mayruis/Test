<?php
	session_start();
	include("connectSQL.php");
	mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM member WHERE Member_username = '".mysql_real_escape_string($_POST['username'])."' 
	and Member_password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		
				header("location:login.php");
			
				
			
	}
	else{
		$strSQL1 = "  SELECT * FROM `realtime`ORDER BY `id` DESC LIMIT 0 , 1  ";
		$objQuery1 = mysql_query($strSQL1);
		$objResult1 = mysql_fetch_array($objQuery1);
		if ($objResult1['Realtime_Status']=='on')
			{	
				header("location:home.php");
			}
			else
			{
				header("location:select.php");
			}
		}
	
	mysql_close();
?>