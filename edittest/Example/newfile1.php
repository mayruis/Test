<?php

	 function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	 function TimeDiff($strTime1,$strTime2)
	 {
				return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }
	 function DateTimeDiff($strDateTime1,$strDateTime2)
	 {
				return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }


	 $date1 = date('Y-m-d');
	 $date2 = date('Y-m-d');
	 
	 echo $date1."<br>";
	 echo $date2."<br>";
	
	 
	 echo "Date Diff = ".DateDiff("2008-08-01","2008-08-31")."<br>";
	 echo "Time Diff = ".TimeDiff("00:00","19:00")."<br>";
	 echo "Date Time Diff = ".DateTimeDiff("2008-08-01 00:00","2008-08-01 19:59")."<br>";
?>