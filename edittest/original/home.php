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
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Measurement System in Broiler farm</title>

</head>

<body>

<div>
<div><script language="JavaScript">
	   var HttPRequest = false;

	   function doCallAjax(Sort) {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
	
			var url = 'AjaxPHPRealtime2.php';
			var pmeters = 'mySort='+Sort;
			HttPRequest.open('POST',url,true);

			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			
			
			HttPRequest.onreadystatechange = function()
			{

				 if(HttPRequest.readyState == 3)  // Loading Request
				  {
				   document.getElementById("mySpan").innerHTML = "Now is Loading...";
				  }

				 if(HttPRequest.readyState == 4) // Return Request
				  {
				   document.getElementById("mySpan").innerHTML = HttPRequest.responseText;
				  }
				
			}

	   }
	</script>
<body Onload="bodyOnload();">


<form name="frmMain" action="" method="post">
	<script language="JavaScript">

	function bodyOnload()
	{
		doCallAjax('event')
		setTimeout("doLoop();",1000);
	}

	function doLoop()
	{
		bodyOnload();
	}
	</script>

<span id="mySpan"></span>
</form>   </div>


</div>





<div align="center">
  <p>&nbsp;</p>
	
   
    
  <hr />
  <p>โครงงานชิ้นนี้จัดทำโดยนายสุรชัช พรหมจรรย์และนายวีระพงษ์ สิงห์อาจ นักศึกษาคณะวิศวกรรมศาสตร์สาขาคอมพิวเตอร์มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</p>
  <p>โดยมีนายสมรรถชัย จันทรัตน์เป็นอาจารย์ผู้ให้คำปรึกษา<br />
  <br />
    

  </p>
  <p>&nbsp;</p>

    </div>
</body>
</html>
