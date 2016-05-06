<?php
include ("connectSQL.php");



$nameprofile = " SELECT * FROM `profilename`ORDER BY `id` DESC LIMIT 0 , 1  ";
$objPF = mysql_query($nameprofile) or die ("Error Query8 [".$nameprofile."]");
$ResultPF = mysql_fetch_array($objPF);
$namePF = $ResultPF['Profile_name'];

$temperature = "SELECT * FROM  `realtime` ORDER BY  `id` DESC LIMIT 0 , 1 ";
$obj = mysql_query($temperature) or die ("Error Query8 [".$temperature."]");
$Result6 = mysql_fetch_array($obj);
//echo ("device id =").$Result6['Device_id'];


if ($Result6['Realtime_Status']=="on"){


 $dRT=$Result6['Realtime_DateTime'];
 $ST=$Result6['Realtime_Status'];
 
 $RND=$Result6['Realtime_Round'];
 $dc=$Result6['Realtime_D'];
 $HR1=$Result6['Realtime_HR'];
 $W=$Result6['Realtime_W'];
 
 $dayc = substr($Tdate, 8, 2);
 $dayT = substr($dRT, 8,2);
 
 $HR = date("H");
 $Hi = date("i");
 $HS = date("s");
 
 
 if($dayc != $dayT )
 {
 
      $dc =  $dc+1;	
   
     // echo "next day--";
 }
 elseif ($dc == '0'){$dc =  $dc+1;	   echo "next day";}
 if ($dc <= 7)
 {
 	$W = 1;
 //	echo "W1";
 }
 elseif ($dc >= 8 && $dc <= 14)
 {
 	$W = 2;
 	//echo "W2";
 }	
 elseif ($dc >= 15 && $dc <= 21)
 {
 	$W = 3;
 	//echo "W3";
 }
 elseif ($dc >= 22 && $dc <= 28)
 {
 	$W = 4;
 	//echo "W4";
 }
 elseif ($dc >= 29 && $dc <= 35)
 {
 	$W = 5;
 	//echo "W5";
 }
 elseif ($dc >= 36 && $dc <= 42)
 {
 	$W = 6;
 //	echo "W2";
 }
 

 $NODE = ($_GET["node"]);
 $Tdate =($_GET["DATE"]);
 $temp = ($_GET["temp"]);
 $Humi = ($_GET["humi"]);

 
 
if ($NODE >= "1" ){			
	
$strSQL0 = "INSERT INTO realtime (id,Profile_name ,Device_id ,Realtime_DateTime ,Realtime_Temperature ,
			Realtime_Humidity ,Realtime_Status ,Realtime_Round ,Realtime_HR ,Realtime_W ,Realtime_D)
			VALUES ( NULL,'".$namePF."','".$NODE."','".$Tdate."','".$temp."','".$Humi."','".$ST."','".$RND."','".$HR."','".$W."','".$dc."' );";



$objQuery0 = mysql_query($strSQL0)or die ("Error Query [".$strSQL0."]");

if($objQuery0){

	
	
	
	$BB1 = "SELECT * FROM  realtime ORDER BY id DESC LIMIT 1 ";
	$BB2 = mysql_query($BB1) or die ("Error Query [".$BB1."]");
	$templast = mysql_fetch_array($BB2);
	
	$week = $templast['Realtime_W'];
	$tt  = $templast['Realtime_Temperature'];
	$hh  = $templast['Realtime_Humidity'];
	$name_mode = $templast['Profile_name'];
	$Round = $templast['Realtime_Round'];
	
	
		
		
	$AA1 = "SELECT * FROM  profile  WHERE profile_W = '".$week."'and Profile_name ='".$name_mode."' ";
	$AA2 = mysql_query($AA1) or die ("Error Query [".$AA1."]");
	$profile = mysql_fetch_array($AA2);
	$ttemp=$profile['Profile_temperature'];
	$ttmin=$profile['Profile_humidity_min'];
	$ttmax=$profile['Profile_humidity_max'];
	$ttemp1 =$ttemp+0.5;
	$ttemp2 =$ttemp-0.5;
	//echo "hh=".$hh;
	//echo "tt=".$tt;
//	echo "ttemp=".$ttemp;
//	echo "hmin=".$ttmin;
//	echo "ttmax=".$ttmax;
//	echo "nameM=".$name_mode;
	
	if($tt>$ttemp1){
			
		if ($hh > $ttmax)
		{
			
	     	$THHH1 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Temperature is high and Humidity is high.','".$Round."','Yes' )";
	     	$THHH11 = mysql_query($THHH1)or die ("Error Query [".$THHH1."]");
	     	if($THHH11){
	     		echo "success!!!!";echo "1";
	     	}
		}
		elseif ($hh < $ttmin)
		{
			
			$THHH2 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Temperature is high and Humidity is low.','".$Round."','Yes' )";
			$THHH22 = mysql_query($THHH2)or die ("Error Query [".$THHH2."]");
			if($THHH22){
			  echo "success!!!!";echo "2";
			}
		}
		else {
	
			
		
			$THHH3 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Temperature is high.','".$Round."','Yes' )";
			$THHH33 = mysql_query($THHH3)or die ("Error Query [".$THHH3."]");
			if($THHH33){
			  echo "success!!!!";echo "3";
			}
		}
	
	}
	
	elseif ($tt<$ttemp2 ){
			
		if ($hh > $ttmax)
		{	
			$THHH4 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Temperature is low and Humidity is high.','".$Round."','Yes' )";
			$THHH44 = mysql_query($THHH4)or die ("Error Query [".$THHH4."]");
			if($THHH44){
				echo "success!!!!";echo "4";
			}
		}
		elseif ($hh < $ttmin)
		{
			
			$THHH5 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Temperature is low and Humidity is low.','".$Round."','Yes' )";
			$THHH55 = mysql_query($THHH5)or die ("Error Query [".$THHH5."]");
			if($THHH55){
				echo "success!!!!";echo "5";
			}
				
		}
		else {
				
			
			$THHH6 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Temperature is low.','".$Round."','Yes' )";
			$THHH66 = mysql_query($THHH6)or die ("Error Query [".$THHH6."]");
			if($THHH66){
		    	echo "success!!!!";echo "6";
			}
		}
	
	}
	
	
	elseif ($hh<$ttmin)
	{
		
		    $THHH7 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Humidity is low.','".$Round."','Yes' )";
		    $THHH77 = mysql_query($THHH7)or die ("Error Query [".$THHH7."]");
		    if($THHH77){
		    	echo "success!!!!";echo "7";
		    }
	}
		
	
	elseif ($hh>$ttmax)
	{
		
			$THHH8 = "INSERT INTO message (MessageID,message_time ,Subject ,Description ,Realtime_Round,New)
			VALUES ( 'NULL','".$d."','You have new alert.','Humidity is high.','".$Round."','Yes' )";
			$THHH88 = mysql_query($THHH8)or die ("Error Query [".$THHH8."]");
			if($THHH88){
			     echo "success!!!!";echo "8";
			}
		}
	
	}
			else
				{
				   echo "Get Node Not Value";
				}	
   }
}

else
{
	 
	echo "status is off";
}

mysql_close($objConnect);
			
?>	



