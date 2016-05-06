<?php

include("connectSQL.php");



$slstart1 = "SELECT * FROM profile where Profile_name = '".trim($_POST['profile_name'])."'";
$objQuery1 = mysql_query($slstart1);
$objResult2 = mysql_fetch_array($objQuery1);
	
if($objResult2)
{
	$strSQL1 = "INSERT INTO chicken, profile (Profile_id,Profile_name,Profile_temperature,Profile_humidity_min,Profile_humidity_max)
        		VALUES ('',  '".$name."',  '".$temp_w1."',  '".$hmin_w1."',  '".$hmax_w1."'),
 		               ('',  '".$name."',  '".$temp_w2."',  '".$hmin_w2."',  '".$hmax_w2."'),
 			           ('',  '".$name."',  '".$temp_w3."',  '".$hmin_w3."',  '".$hmax_w3."'),
 					   ('',  '".$name."',  '".$temp_w4."',  '".$hmin_w4."',  '".$hmax_w4."'),
 		               ('',  '".$name."',  '".$temp_w5."',  '".$hmin_w5."',  '".$hmax_w5."'),
 		               ('',  '".$name."',  '".$temp_w6."',  '".$hmin_w6."',  '".$hmax_w6."')
 		";


	$objResult3 = mysql_query($strSQL1);
	
	if($objResult3)
	{
		echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/home.php \";</script>";
		exit();
	}
		
	
	else
	{
		echo $objResult3;
		echo error ;
	}
}







?>