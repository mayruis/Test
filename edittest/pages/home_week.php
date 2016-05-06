<?php 
    include("connectSQL.php");
?>
<html >
<head>
</html>
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>CPE55</title>
    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	<!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
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
	<!-- ideally at the bottom of the page -->
	<!-- also works in the <head> -->
	<script src="PATH_TO_FILE/alertify.min.js"></script>
	<!-- include the core styles -->
	<link rel="stylesheet" href="PATH_TO_FILE/alertify.css" />
	<!-- include a theme, can be included into the core instead of 2 separate files -->
	<link rel="stylesheet" href="PATH_TO_FILE/alertify.default.css" />
   
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
	
			var url = 'gdata.php';
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
</head>
<body Onload="bodyOnload();">
    <form name="frmMain" action="" method="post">
	<script language="JavaScript">

	function bodyOnload()
	{
		doCallAjax('MessageID')
		setTimeout("doLoop();",1000);
	}

	function doLoop()
	{
		bodyOnload();
	}
	</script>
</form>
</body>
<body>
<span id="mySpan"></span>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php 
                        include ("connectSQL.php");
                        $allsql1 =" SELECT * FROM `realtime`WHERE `Realtime_Round` = (SELECT MAX( `Realtime_Round` )FROM realtime )
			   					   AND `Realtime_Status` = 'on' and Device_id != '6' order by id desc limit 0, 1 ";
                        $allsql11 = mysql_query($allsql1);
                        $allsql111 = mysql_fetch_array($allsql11)
                        ?>
                        โปรไฟล์: <?php echo $allsql111['Profile_name']?>   </a>
            </div>
            <!-- /.navbar-header -->
			
            <ul class="nav navbar-top-links navbar-right">  
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>   <i class="fa fa-caret-down"></i>
                    </a>
                 
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                </ul>
            <!-- /.navbar-top-links -->
            
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home_hour.php"><i class=""></i>รายชั่วโมง</a>
                        </li>
                        <li>
                            <a href="home_day.php"><i class=""></i>รายวัน</a>
                        </li>
                        <li>
                            <a href="home_week.php"><i class=""></i>รายสัปดาห์</a>
                        </li>
                        <li>
                            <a href="dataold.php"><i class=""></i>ตรวจสอบข้อมูลทั้งหมด</a>
                        </li>
                        <li>
                            <a href="notification.php"><i class=""></i>การแจ้งเตือน</a>
                        </li>
                        <li>
                            <a href="finish.php"><i class=""></i>สิ้นสุดการเลี้ยง</a>
                        </li>   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

            
            <!-- /.navbar-static-side -->
        </nav>
<div id="page">
        
            <div class="row ">
                <div class="col-md-8 col-md-offset-3">
                    <h1 class="h2">รายสัปดาห์</h1> 
                    
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>09:00 น.</td>
                                            <td>33C</td>
                                            <td>78%</td>                                           
                                        </tr>            
                                        <tr class="odd gradeX">
                                            <td>09:00 น.</td>
                                            <td>33C</td>
                                            <td>78%</td>                                           
                                        </tr>  
                                        <tr class="odd gradeX">
                                            <td>09:00 น.</td>
                                            <td>33C</td>
                                            <td>78%</td>                                           
                                        </tr>  
                                        <tr class="odd gradeX">
                                            <td>09:00 น.</td>
                                            <td>33C</td>
                                            <td>78%</td>                                           
                                        </tr>  
                                        <tr class="odd gradeX">
                                            <td>09:00 น.</td>
                                            <td>33C</td>
                                            <td>78%</td>                                           
                                        </tr>                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>TEST</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                    </div></div></div>
 
</body>

</html>

