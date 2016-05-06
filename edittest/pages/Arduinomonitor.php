<?php
$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");

$temperature = "SELECT  `avg_t` ,`avg_h` FROM temperature WHERE id = '1' ";
$obj = mysql_query($temperature) or die ("Error Query8 [".$temperature."]");
$Result6 = mysql_fetch_array($obj);

$A1 = "SELECT start.mode,start.alert,profile.mode,profile.name  FROM start INNER JOIN profile  ON   start.mode = profile.mode   WHERE  start.id = '1'";
$A2 = mysql_query($A1) or die ("Error Query1 [".$A1."]");
$start_j_profile = mysql_fetch_array($A2);
$name_mode = $start_j_profile['name'];
$alert = $start_j_profile['alert'];

$BB1 = "SELECT * FROM  temp_day ORDER BY id DESC LIMIT 1 ";
$BB2 = mysql_query($BB1) or die ("Error Query [".$BB1."]");
$templast = mysql_fetch_array($BB2);

$day = $templast['count_date'];
$tt  = $templast['temp'];
$hh  = $templast['humidity'];





if ($day <= '7' ){

	$week = '1';

}
elseif (($day > 7) && ($day < 15)){
	$week = '2';

}
elseif (($day > 14) && ($day < 22)){
	$week = '3';

}
elseif (($day > 21) && ($day < 29)){

	$week = '4';
}
elseif (($day > 28) && ($day < 36)){

	$week = '5';
}
elseif (($day > 35) && ($day < 43)){

	$week = '6';
}



$AA1 = "SELECT * FROM  $name_mode  WHERE id_time = '".$week."' ";
$AA2 = mysql_query($AA1) or die ("Error Query [".$AA1."]");
$profile = mysql_fetch_array($AA2);
$ttemp=$profile['temp'];
$ttmin=$profile['humidity_min'];
$ttmax=$profile['humidity_max'];
$ttemp1 =$ttemp+0.5;
$ttemp2 =$ttemp-0.5;




if ($obj){
	
$AB = $Result6['avg_t'];
$AC = $Result6['avg_h'];

$int = '';

if ($alert == '1'){

if($AB>$ttemp1){  //temp มากกว่า
		
	if ($AC > $ttmax){ //temp มากกว่าและ humi มากว่า

		
			//('Temp High && Humi High'); 
			$int = '8        ';//25
		
	}
	elseif ($AC < $ttmin){ //tempมากว่า และ humi ต่ำกว่า

		
			//('Temp High && Humi Low');
			$int = '7       ';//24
		

	}
	else {//temp มากว่า


		
			//('Temp High');
			$int = '6      ';//23               
	}

}

elseif ($AB<$ttemp2 ){//temp ต่ำกว่า
		
	if ($AC > $ttmax){//temp ต่ำกว่า และ humi สูงกว่า


	
			//('Temp Low && Humi High'); 
			$int = '5     ';//22

	}
	elseif ($AC < $ttmin){//temp ต่ำกว่า และhumi ต่ำกว่า


		
			//('Temp Low && Humi Low'); 
			$int = '4    ';//21


	}
	else {//temp ต่ำกว่า


		
			//('Temp Low'); 
			$int = '3   ';//20

	}

}


elseif ($AC<$ttmin){//humi ต่ำ



		   //('Humi Low');
		   $int = '2  ';//19

		
}


elseif ($AC>$ttmax){//humi มากกว่า

		
	
		   //('Humi High');
		   $int = '1 '; //18


}


}

else {

	$int = '1';//17

}

echo "[".number_format($AB,2)."  ".number_format($AC,2)."    ".$int."]";

}
else {
	
	echo '['."ERROR DATA BASE".']';
	
	
}

mysql_close($objConnect);


?>