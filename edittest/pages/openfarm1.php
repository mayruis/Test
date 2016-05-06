
<?php

include("connectSQL.php");
date_default_timezone_set("Asia/Bangkok");
$d  = date("Y-m-d H:i:s");
$proflie = "SELECT * FROM profilename";
$proflie1 = mysql_query($proflie);
$proflie2 = mysql_fetch_array($proflie1);

$slstart = "SELECT * FROM  `realtime` ORDER BY  `id` DESC LIMIT 0 , 1";
$objQuery = mysql_query($slstart);
$objResult = mysql_fetch_array($objQuery)or die ("Error Query12 [".$objQuery."]");


$date = $objResult['Realtime_DateTime'];
$nameprofile = $_POST["namemode"];

$lab = $objResult['Realtime_Round'];
$rnd = $lab+1;
echo "</br>lab=".$lab;
echo "</br>rn=".$rnd;
echo "</br>rn1=".$objResult['Realtime_Round'];
$HR = date("H");
//function utf8_strlen($s) {
//	$c = strlen($s); $l = 0;
//for ($i = 0; $i < $c; ++$i)
//	if ((ord($s[$i]) & 0xC0) != 0x80) ++$l;
//	return $l;
//}
//echo $nameprofile;
//echo "\n";
//echo $nameprofile1;
//echo "\n";

//$nameprofile = substr($nameprofile1, 2, utf8_strlen($nameprofile)-2);

if($objResult['Realtime_Status']==off){

	$lab = $objResult['Realtime_Round'];
	$rnd = $lab+1;
	echo "lab=".$lab;
	echo "rn=".$rnd;



	$openfarm = "UPDATE  `chicken`.`realtime` SET  Device_id = '6',Realtime_Status='on',Realtime_Round='".$rnd."',Profile_name='".$nameprofile."' order by `id` desc LIMIT 1 ";

	$openfarmss = mysql_query($openfarm);


	if ($openfarmss)
	{
		
		echo "</br>".$nameprofile;
		echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/home.php \";</script>";
		exit();
	}

	else
	{
		echo "error save please check you database!!!!!";

	}
}
else
{

	echo "error save Status is on";
	echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/home.php \";</script>";

	//echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/home.php \";</script>";exit();
}
?>