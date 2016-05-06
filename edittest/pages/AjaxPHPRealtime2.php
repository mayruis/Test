       
<?php 

$strSort = $_POST["mySort"];

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("chicken");

$strSQL1 = "SELECT * FROM realtime WHERE  `Device_id` =  '1' ORDER BY  `id` DESC LIMIT 0 , 1";
$objQuery1 = mysql_query($strSQL1) or die ("Error Query1 [".$strSQL2."]");
$objQuery11 = mysql_fetch_array($objQuery1);

$strSQL2 = "SELECT * FROM realtime WHERE  `Device_id` =  '2' ORDER BY  `id` DESC LIMIT 0 , 1";
$objQuery2 = mysql_query($strSQL2) or die ("Error Query2 [".$strSQL2."]");
$objQuery22 = mysql_fetch_array($objQuery2);

$strSQL3 = "SELECT * FROM realtime WHERE  `Device_id` =  '3' ORDER BY  `id` DESC LIMIT 0 , 1";
$objQuery3 = mysql_query($strSQL3) or die ("Error Query3 [".$strSQL2."]");
$objQuery33 = mysql_fetch_array($objQuery3);

$strSQL4 = "SELECT * FROM realtime WHERE  `Device_id` =  '4' ORDER BY  `id` DESC LIMIT 0 , 1";
$objQuery4 = mysql_query($strSQL4) or die ("Error Query4 [".$strSQL2."]");
$objQuery44 = mysql_fetch_array($objQuery4);
?>

  <!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CPE55</title>
    
    <link href="css/jquery.circliful.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.circliful.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

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
<style>
body {
    font-family: arial,verdana, sans-serif;
    font-size: 12px;
}
</style>
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
                 <a class="navbar-brand" href="index.php">RMUTT</a>
             </div>
            <!-- /.navbar-header -->
           <ul class="nav navbar-top-links navbar-right">
              <li class="dropdown">
                   <li><a href="line.php"><i class="fa fa-desktop fa-fw"></i> Graph</a></li>
                    <li><a href="login.php"><i class="fa fa-user fa-fw"></i> Login</a></li>
             </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                   <div align="center"> <img src="<?php echo "image/rmutt.png";?>"> </div>
                   <a align="center" class="navbar-brand" href="index.php">Rajamangala University of Technology Thanyaburi</a>    
                    </ul>
                   
                </div>
               
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

      
        <div id="page">
        
            <div class="row ">
                <div class="col-md-8 col-md-offset-3">
                    <h1 class="h2">ระบบตรวจวัดบรรยากาศภายในโรงเรือนไก่เนื้อ</h1> 
                   
<div class="row show-grid">

<div class="col-md-3">POINT 1</div>
<div class="col-md-3">
<p><strong>อุณหภูมิ(C)</strong><span class="pull-right text-muted"> <?php printf("%.2f",$objQuery11['Realtime_Temperature'] );?> C</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery11['Realtime_Temperature'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>
<div class="col-md-3">
  <p><strong>ความชื้น(%RH)</strong><span class="pull-right text-muted"><?php printf("%.2f",$objQuery11['Realtime_Humidity'] );?>%RH</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery11['Realtime_Humidity'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>
<div class="row show-grid">
<br><br><br><br><br>
<div class="col-md-3">POINT 2</div>
<div class="col-md-3">
<p><strong>อุณหภูมิ(C)</strong><span class="pull-right text-muted"> <?php printf("%.2f",$objQuery22['Realtime_Temperature'] );?> C</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery22['Realtime_Temperature'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>
<div class="col-md-3">
  <p><strong>ความชื้น(%RH)</strong><span class="pull-right text-muted"><?php printf("%.2f",$objQuery22['Realtime_Humidity'] );?>%RH</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery22['Realtime_Humidity'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>
<div class="row show-grid">
<br><br><br><br><br>
<div class="col-md-3">POINT 3</div>
<div class="col-md-3">
<p><strong>อุณหภูมิ(C)</strong><span class="pull-right text-muted"> <?php printf("%.2f",$objQuery33['Realtime_Temperature'] );?> C</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery33['Realtime_Temperature'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>
<div class="col-md-3">
  <p><strong>ความชื้น(%RH)</strong><span class="pull-right text-muted"><?php printf("%.2f",$objQuery33['Realtime_Humidity'] );?>%RH</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery33['Realtime_Humidity'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>
<div class="row show-grid">
<br><br><br><br><br>
<div class="col-md-3">POINT 4</div>
<div class="col-md-3">
<p><strong>อุณหภูมิ(C)</strong><span class="pull-right text-muted"> <?php printf("%.2f",$objQuery44['Realtime_Temperature'] );?> C</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery44['Realtime_Temperature'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>
<div class="col-md-3">
  <p><strong>ความชื้น(%RH)</strong><span class="pull-right text-muted"><?php printf("%.2f",$objQuery44['Realtime_Humidity'] );?>%RH</span>
</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php printf("%.2f",$objQuery44['Realtime_Humidity'] );?>%">
<span class="sr-only">40% Complete (success)</span></div></div></div>

           
          </div></div></div></div></div></div></div></div>

       
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>


                 
                                
                                    
                                    
                                    
                                    
                                
                            