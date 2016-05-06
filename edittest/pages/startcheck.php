<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN")
	{
		echo "This page for Admin only!";
		exit();
	}	
	
	mysql_connect("localhost","root","1234");
	mysql_select_db("chicken");
	mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	$date  = $objResult['date'];
	
	
	?>


<?php 

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("chicken");



$strSQL5 = "INSERT INTO realtime ";
$strSQL5 .="(id,date,mode,status,round,temp_1,temp_2,temp_3,temp_4,humi_1,humi_,humi_3,humi_4) ";
$strSQL5 .="VALUES ";
$strSQL5 .="('','".$date."','','','22','22','22','22','22','22','22','22') ";

$objQuery5 = mysql_query($strSQL5);

if($objQuery5)
{

		$slstart = "SELECT * FROM realtime WHERE id = '1' ";
		$objQuery1 = mysql_query($slstart) or die ("Error Query [".$slstart."]");
		$objResult1 = mysql_fetch_array($objQuery1);


			if ($objResult1['status'] == "on"){

				echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/admin.php \";</script>";
				exit();
			}

			else {
	
				echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/Homeadmin.php \";</script>";
				exit();
	
  		   }

}

else {
	
		$slstart = "SELECT * FROM realtime WHERE id = '1' ";
		$objQuery1 = mysql_query($slstart) or die ("Error Query [".$slstart."]");
		$objResult1 = mysql_fetch_array($objQuery1);


			if ($objResult1['status'] == "on"){

				echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/admin.php \";</script>";
				exit();
			}

			else {
	
				echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/Homeadmin.php \";</script>";
				exit();
	
  		   }
	

}


 mysql_close($objConnect);

?>