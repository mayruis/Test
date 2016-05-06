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
<html lang="en">

<head>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="th">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
                <a class="navbar-brand" href="###.php">ADMIN SETTING</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $objResult["Name"];?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="UserProfile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
           
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="adminsetting.php"><i class="fa "><p class="fa fa-calendar"></p></i>ดูข้อมูย้อนหลัง</a>
                            
                        </li>
                        <li>
                            <a href="detail.php"><i class="fa "><p class="fa fa-calendar"></p></i>แสดงรายละเอียด</a>
                            
                        </li>
                        
                        <li>
                            <a href="adminconfig.php"><i class="fa "><p class="fa fa-calendar"></p></i>แก้ไข</a>
                        </li>
                        
                         <li>
                            <a href="notification.php"><i class="fa "><p class="fa fa-calendar"></p></i> การแจ้งเตือน</a>
                        </li>
                        
                      
                        
                   
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>
         <!-- Page Content -->
        <div id="page-wrapper">
        	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">รายละเอียดการเลี้ยง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                   
                        <?php 
                        	
                        $objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
                        $objDB = mysql_select_db("test");
                         
                        $strSQL = "SELECT start.mode,start.start,start.end,start.count_date,profile.mode,profile.name,profile.status  FROM start INNER JOIN profile  ON   start.mode = profile.mode   WHERE  start.id = '1'";;
                        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                        $objResult = mysql_fetch_array($objQuery);
                        
                        $strSQL1 = "SELECT id FROM history ORDER BY id DESC LIMIT 1";  
                        $objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
                        $objResult1 = mysql_fetch_array($objQuery1)
                        
                        
                        ?>                        
                        
                        <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Green Panel
                        </div>
                        <div class="panel-body">
                        <div><label></label></div>
                      	<div>
                        	<dl class="dl-horizontal">
                           		<dt>วันที่เริ่มงาน</dt>
                           		<dd>    <?php echo  $objResult['start'] ?> </dd>
                           		<dt>วันสิ้นสุด</dt>
                           		<dd>    <?php echo  $objResult['end'] ?> </dd>
                           		<dt>จำนวนวันที่เลี้ยงไปแล้ว</dt>
                           		<dd>    <?php echo  $objResult['count_date']."    วัน" ?> </dd>
                           		<dt>รูปบบของการควบคุม </dt>
                           		<dd>    <?php echo  $objResult['status']."    แบบที่ :".$objResult['mode']; ?> </dd>
                           		<dt>รุ่นที่</dt>
                           		<dd>    <?php $T=$objResult1['id']+=1; echo $T  ?> </dd>
                           		
                           		
                         	</dl>
                            
                            
                        </div>   
                        
                            
                            
                            
                            
                        </div>
                        
                        
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
</div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

   <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
</body>

</html>
