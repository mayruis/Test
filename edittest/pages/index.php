
<html>
<head>
<title>CPE55</title>
</head>
<script language="JavaScript">
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
<h1></h1>

<form name="frmMain" action="" method="post">
    <script language="JavaScript">

	function bodyOnload()
	{
		doCallAjax('CustomerID')
		setTimeout("doLoop();",1000);
	}

	function doLoop()
	{
		bodyOnload();
	}
	</script>
<script>
$( document ).ready(function() {
       
		$('#myStathalf1').circliful();
		$('#myStathalf2').circliful();
		$('#myStathalf3').circliful();
		$('#myStathalf4').circliful();
		$('#myStathalf5').circliful();
		$('#myStathalf6').circliful();
		$('#myStathalf7').circliful();
		$('#myStathalf8').circliful();
		
    });
</script>
</form>
<span id="mySpan"></span>

</body>
</html>