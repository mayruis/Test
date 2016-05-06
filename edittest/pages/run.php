<?php
    
    $w1sql = "SELECT avg(`Realtime_W`),avg(`Realtime_Temperature`),avg(`Realtime_Humidity`) FROM `realtime` WHERE `Realtime_Round` = (SELECT MAX(  `Realtime_Round` )FROM realtime )and Realtime_status ='on' and Device_id != '6' group by `Realtime_W`";
    $w1qry = mysql_query($w1sql);
   
   
    
    //echo "</br>".$w1Result1['avg(`Realtime_Temperature`)'];
    //echo "</br>".$w1Result1['avg(`Realtime_Humidity`)'];
    // printf("%.2f",$w1Result1[1] );
   ?>