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
	mysql_select_db("test");
	mysql_query("SET NAMES UTF8");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	$status = $objResult['UserID']
?>

<?php
	
	$str = "off";

	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("test");
	
	$strSQL = "UPDATE start SET ";
	$strSQL .="status = '".$str."' ";
	$strSQL .=",count_date = '0' ";
	$strSQL .="WHERE id = '1' ";
	
	$objQuery = mysql_query($strSQL);
	
	if($objQuery)
		{
			    echo "<script type='text/javascript'> window.open('/Dropbox/EditTest/pages/export.php','_newtab');</script>";
			    
			    $objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
			    $objDB = mysql_select_db("test");
			    
			    
			    //////////////////////////////////////////
			    $slstart = "SELECT * FROM start WHERE id = '1' ";
			    $objQuery0 = mysql_query($slstart) or die ("Error Query [".$slstart."]");
			    $objResult0 = mysql_fetch_array($objQuery0);
			    
			    $DS = $objResult0['start'];
				$DE  = date("Y-m-d");
				$CD = $objResult0['count_date'];
				$MO = $objResult0['mode'];
				//////////////////////////////////////////
				
				$AVG1 = "SELECT    AVG(  `temp` ),AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '1'AND  '7'
							    ";
				
				$AVG11    = mysql_query($AVG1) or die ("Error Query [".$AVG1."]");
				 
				$AVG2 = "SELECT    AVG(  `temp` ),AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '8'AND  '14'
							    ";
				
				$AVG22    = mysql_query($AVG2) or die ("Error Query [".$AVG2."]");
				 
				$AVG3 = "SELECT    AVG(  `temp` ),AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '15'AND  '21'
							    ";
				
				$AVG33    = mysql_query($AVG3) or die ("Error Query [".$AVG3."]");
				 
				$AVG4 = "SELECT   AVG(  `temp` ),AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '22'AND  '28'
							    ";
				
				$AVG44    = mysql_query($AVG4) or die ("Error Query [".$AVG4."]");
				
				$AVG5 = "SELECT   AVG(  `temp` ),AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '29'AND  '35'
							    ";
				
				$AVG55    = mysql_query($AVG5) or die ("Error Query [".$AVG5."]");
				 
				$AVG6  = "SELECT   AVG(  `temp` ), AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '36'AND  '42'
							    ";
				
				$AVG66    = mysql_query($AVG6) or die ("Error Query [".$AVG6."]");
				
				
				$AVGfetch1 = mysql_fetch_array($AVG11);
				$AVG_t1  = $AVGfetch1[0];
				$AVG_h1  = $AVGfetch1[1];
				
				$AVGfetch2 = mysql_fetch_array($AVG22);
				$AVG_t2  = $AVGfetch2[0];
				$AVG_h2  = $AVGfetch2[1];
				
				$AVGfetch3 = mysql_fetch_array($AVG33);
				$AVG_t3  = $AVGfetch3[0];
				$AVG_h3  = $AVGfetch3[1];
				
				$AVGfetch4 = mysql_fetch_array($AVG44);
				$AVG_t4  = $AVGfetch4[0];
				$AVG_h4  = $AVGfetch4[1];
				
				$AVGfetch5 = mysql_fetch_array($AVG55);
				$AVG_t5  = $AVGfetch5[0];
				$AVG_h5  = $AVGfetch5[1];
				
				$AVGfetch6 = mysql_fetch_array($AVG66);
				$AVG_t6  = $AVGfetch6[0];
				$AVG_h6  = $AVGfetch6[1];
				
			
				
				
				
				
				
				
				
			    
			    $strSQL2 = "INSERT INTO history ";
			    $strSQL2 .="(id,Date_start,Date_ent,count_date,mode,t1,t2,t3,t4,t5,t6,h1,h2,h3,h4,h5,h6) ";
			    $strSQL2 .="VALUES ";
			    $strSQL2 .="('NULL','".$DS."','".$DE."','".$CD."','".$MO."' ";
			    $strSQL2 .=",'".$AVG_t1."','".$AVG_t2."','".$AVG_t3."','".$AVG_t4."','".$AVG_t5."','".$AVG_t6."' ";
			    $strSQL2 .=",'".$AVG_h1."','".$AVG_h2."','".$AVG_h3."','".$AVG_h4."','".$AVG_h5."','".$AVG_h6."' ";
				$strSQL2 .=") ";
			    $objQuery2 = mysql_query($strSQL2);
			    if($objQuery2)
			    {
			    	
			    					echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/showdetail.php \";</script>";
	
			    	}
			    		
			    
			    	
			    	
			    }
			    else
			    {
			    
			    	echo "history error";
			    	
			    	
			    }
			    
			    $date = date('Y-m-d H:i:s');
			    
			    $strSQL = "INSERT INTO temp_day ";
			    $strSQL .="(id,count_date,count_time,day,temp,humidity) ";
			    $strSQL .="VALUES ";
			    $strSQL .="('NULL','0','0','".$date."','".$tt."','".$hh."')";
			    
			    $objQuery = mysql_query($strSQL);
			    
			    
				
	

mysql_close($objConnect);
?>

