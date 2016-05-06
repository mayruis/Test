 <?php 
include ("connectSQL.php");
$slstart = "SELECT * FROM  `realtime` ORDER BY  `id` DESC LIMIT 0 , 1";
$objQuery = mysql_query($slstart);
$objResult = mysql_fetch_array($objQuery)or die ("Error Query8 [".$objQuery."]");

if($objResult['Realtime_Status']==on){

?>

<head>
   <style type="text/css"></style>
   
</html>
	   
	   
	
	<meta http-equiv="Content-Language" content="th"> 
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
   
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
                <a class="navbar-brand" href="home.php">CPE55 </a>
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
            
            
            
            
            <!-- /.navbar-static-side -->
        </nav>

 <div id="page-wrapper">
            <div class="container-fluid">
                <div id="page">
        
            <div class="row ">
             
                        
                   <div class="panel-body">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                             
                                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <?php 
                        include ("connectSQL.php");
                        $allsql =" SELECT * FROM `realtime`WHERE `Realtime_Round` = (SELECT MAX( `Realtime_Round` )FROM realtime )
			   					   AND `Realtime_Status` = 'on' order by id desc limit 0, 1 ";
                        $allqry = mysql_query($allsql);
                        $allobj = mysql_fetch_array($allqry)
                        ?>
                         โปรไฟล์: <?php echo $allobj['Profile_name']?>     
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <label>บันทึกการเลี้ยง</label>                        
                      <div class="dataTable_wrapper">
                            <form action="save.php" method="post" name="form1">
						<textarea name="txtarea" cols="138" rows="15" placeholder="หมายเหตุ"></textarea>
						<br><br>
						<input type="text" name="name" value="<?php echo $allobj['Profile_name']?>"  class="hidden">
						<input class="btn btn-primary btn-lg btn-block" name="btnSubmit" type="submit" value="บันทึก">
						</form>
                            </div>
                          </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

                                       
                                  
                            
                                
                                </div>
                                
 
                            </div>
                            <!-- /.row (nested) -->
                            
                            
                            
                            
                            
                            
                        </div>
               
               
               
               
               
                    </div> 


</div>
</div>
</div>
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

