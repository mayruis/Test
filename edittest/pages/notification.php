 <?php 
include ("connectSQL.php");
$slstart = "SELECT * FROM  `realtime` ORDER BY  `id` DESC LIMIT 0 , 1";
$objQuery = mysql_query($slstart);
$objResult = mysql_fetch_array($objQuery)or die ("Error Query8 [".$objQuery."]");

if($objResult['Realtime_Status']==on){

?>
<html >

<head>
   
</html>
	   
	
	
	<meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
  
    </head>
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
                <a class="navbar-brand" href="home.php"><?php 
                        include ("connectSQL.php");
                        $allsql1 =" SELECT * FROM `realtime`WHERE `Realtime_Round` = (SELECT MAX( `Realtime_Round` )FROM realtime )
			   					   AND `Realtime_Status` = 'on' order by id desc limit 0, 1 ";
                        $allsql11 = mysql_query($allsql1);
                        $allsql111 = mysql_fetch_array($allsql11)
                        ?>
                         โปรไฟล์: <?php echo $allsql111['Profile_name']?>  </a>
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
                         <a href="home.php"><i class=""></i>หน้าหลัก</a>
                        </li>
                        <li>
                            <a href="dataold.php"><i class=""></i>ตรวจสอบข้อมูลทั้งหมด</a>
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
    <div id="page-wrapper">
 <div class="container-fluid">
            
                <div id="page">
       
            <div class="row ">
            <div class="panel panel-default">
                        
                        
                           
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        
    
    
<?php




$strSort = $_POST["mySort"];

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("chicken");
$BB1 = "SELECT * FROM  realtime ORDER BY id DESC LIMIT 1 ";
$BB2 = mysql_query($BB1) or die ("Error Query [".$BB1."]");
$templast = mysql_fetch_array($BB2);
$Round = $templast['Realtime_Round'];
$strSQL = " SELECT *FROM message where New = 'Yes' and Realtime_Round = '".$Round."' ORDER BY MessageID ASC  ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>

    <div class="panel-body">                             
<table class="table table-striped table-bordered table-hover">
  <tr>
    <th width="30"> <div align="center"><a href="JavaScript:doCallAjax('CustomerID')">เวลา</a></div></th>
    <th width="250"> <div align="center"><a href="JavaScript:doCallAjax('Name')">รายละเอียด</a> </div></th>
    <th width="30"> <div align="center"><a href="JavaScript:doCallAjax('Name')"></a> </div></th>

  </tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
?>
<form name="frmMain" action="savefrom.php" method="post" >
  <tr>
   
    <td><div align="center"><?php echo $objResult["message_time"];?></div></td>
    <td><?php echo $objResult["Description"];?></td>
     <td><input class="hidden" name="aaa" id="<?php echo $objResult["MessageID"];?>"  value="<?php echo $objResult["MessageID"];?>" type="text">
     <input class="btn btn-primary btn-lg btn-block" type="submit" value="ลบ"></td>
  </tr>
  </form>
<?
}
?>
</table>
                   
   </div>                    
                         
  </div>
                                  
                               
                          
                        
                          
<?
mysql_close($objConnect);
?>
 <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>
<?php }
else 
{
	echo "Status is off";
	echo "<script type='text/javascript'>window.location.href = \"Chicken/pages/select.php \";</script>";
	exit();
}
?>
