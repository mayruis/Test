
<html >
<head>

        <style type="text/css"></style>
   
</html>
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CPE55</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php

include("connectSQL.php");
 date_default_timezone_set("Asia/Bangkok");
 $d  = date("Y-m-d H:i:s");
 $name = $_POST["profile_name"];
 $temp_w1 = $_POST["temp_w1"]; $temp_w2 = $_POST["temp_w2"]; $temp_w3 = $_POST["temp_w3"];
 $temp_w4 = $_POST["temp_w4"]; $temp_w5 = $_POST["temp_w5"]; $temp_w6 = $_POST["temp_w6"];
 $hmin_w1 = $_POST["hmin_w1"]; $hmin_w2 = $_POST["hmin_w2"]; $hmin_w3 = $_POST["hmin_w3"];
 $hmin_w4 = $_POST["hmin_w4"]; $hmin_w5 = $_POST["hmin_w5"]; $hmin_w6 = $_POST["hmin_w6"];
 $hmax_w1 = $_POST["hmax_w1"]; $hmax_w2 = $_POST["hmax_w2"]; $hmax_w3 = $_POST["hmax_w3"];
 $hmax_w4 = $_POST["hmax_w4"]; $hmax_w5 = $_POST["hmax_w5"]; $hmax_w6 = $_POST["hmax_w6"];


 
 
 if(trim($_POST["profile_name"]) == "")
 {
 	
 	echo "Please input namemode!";
 	exit();
 }
 $slstart = "SELECT * FROM `profilename` where Profile_name = '".trim($_POST['profile_name'])."'";
 $objQuery = mysql_query($slstart);
 $objResult = mysql_fetch_array($objQuery);
 if($objResult)
 {
 	echo "<script type='text/javascript'>window.location.href = \"/Chicken/pages/select.php \";</script>";
 	exit();

 }
 else
 {
 	
 	$strSQL1 = "INSERT INTO `chicken`.`profilename` (
 			`id` ,
 			`Profile_name` ,
 			`Profile_datetime` ,
 			`Profile_comment`
 			)
 		VALUES (NULL,'".$_POST['profile_name']."',
		'".$d."',NULL)";
 	
 	
 	
 	$objResult1 = mysql_query($strSQL1);
 
 	if($objResult1)
 	{
 		echo "PN save done";
 		$strSQL2 = "INSERT INTO  profile (Profile_id,Profile_name,Profile_temperature,Profile_humidity_min,Profile_humidity_max,profile_W)
        		VALUES ('',  '".$name."',  '".$temp_w1."',  '".$hmin_w1."',  '".$hmax_w1."','1'),
 		               ('',  '".$name."',  '".$temp_w2."',  '".$hmin_w2."',  '".$hmax_w2."','2'),
 			           ('',  '".$name."',  '".$temp_w3."',  '".$hmin_w3."',  '".$hmax_w3."','3'),
 					   ('',  '".$name."',  '".$temp_w4."',  '".$hmin_w4."',  '".$hmax_w4."','4'),
 		               ('',  '".$name."',  '".$temp_w5."',  '".$hmin_w5."',  '".$hmax_w5."','5'),
 		               ('',  '".$name."',  '".$temp_w6."',  '".$hmin_w6."',  '".$hmax_w6."','6')";
 		
 		$objResult2 = mysql_query($strSQL2);
 		
 		if($objResult2)
 		{
 			echo "P save done";
 			echo $name;
 			echo "<script type='text/javascript'>window.location.href = \"/Chicken/pages/openfarm.php?namemode=$name \";</script>";
 			exit();
 		}
 		else
 		{
 			echo "[".$strSQL2."]";
 			echo "error profile" ;
 		}
 		
 	}
 		else
 		{
 		echo "[".$strSQL1."]";	
 		echo "error profilename" ;
 		}
 	}
 	
 	
 mysql_close();
 ?>
  
