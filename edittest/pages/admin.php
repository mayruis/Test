<?php
	@session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/login.html \";</script>";
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
<?php 

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");
$slstart = "SELECT * FROM start WHERE id = '1' ";
$objQuery1 = mysql_query($slstart) or die ("Error Query [".$slstart."]");

$objResult1 = mysql_fetch_array($objQuery1);


if ($objResult1['status'] == "off"){

	echo "<script type='text/javascript'>window.location.href = \"/Dropbox/EditTest/pages/Homeadmin.php \";</script>";
	exit();
}

?>

<html >

<head>
	   
	   
	   
	  
        
        <style type="text/css"></style>
   
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
                <a class="navbar-brand" href="admin.php">ADMIN </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->       
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    
<?php 

	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("test");
	$slstart2 = "SELECT * FROM temperature WHERE id = '1' ";
	$objQuery2 = mysql_query($slstart2) or die ("Error Query [".$slstart2."]");

	$objResult2 = mysql_fetch_array($objQuery2);
	
?>
                  
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            
                            <a>
                                <div>
                                    <p>
                                        <strong>temp 1</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['temp1'] ?> Celsius</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['temp1']."%" ?>">
                                            <span class="sr-only">10% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>temp 2</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['temp2'] ?> Celsius</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['temp2']."%" ?>">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>temp 3</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['temp3'] ?> Celsius</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['temp3']."%" ?>">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>temp 4</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['temp4'] ?> Celsius</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['temp4']."%" ?>">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>TEMP</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Humidity</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['humi1'] ?>%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['humi1']."%" ?>">
                                            <span class="sr-only">10% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Humidity 2</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['humi2'] ?>%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['humi2']."%" ?>">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Humidity 3</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['humi3'] ?>%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['humi3']."%" ?>">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Humidity 4</strong>
                                        <span class="pull-right text-muted"><?php echo $objResult2['humi4'] ?>%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $objResult2['humi4']."%" ?>">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Humidity</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                
                
                
               
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $objResult["Name"];?>  <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="UserProfile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="adminsetting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
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
                            <a href="adminview1.php"><i class="fa "><p class="fa fa-calendar"></p></i> สัปดาที่ 1 </a>
                            
                        </li>
                        
                        <li>
                            <a href="adminview2.php"><i class="fa "><p class="fa fa-calendar"></p></i> สัปดาที่ 2</a>
                        </li>
                        
                         <li>
                            <a href="adminview3.php"><i class="fa "><p class="fa fa-calendar"></p></i> สัปดาที่ 3</a>
                        </li>
                        
                         <li>
                            <a href="adminview4.php"><i class="fa "><p class="fa fa-calendar"></p></i> สัปดาที่ 4</a>
                        </li>
                        
                         <li>
                            <a href="adminview5.php"><i class="fa "><p class="fa fa-calendar"></p></i> สัปดาที่ 5</a>
                        </li>
                        
                         <li>
                            <a href="adminview6.php"><i class="fa "><p class="fa fa-calendar"></p></i> สัปดาที่ 6</a>
                        </li>
                        
                        <li>
                            <a href="end.php"><i class=""></i>สิ้นสุดการเลี้ยง</a>
                        </li>
                    
                        
                   
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

            
            <!-- /.navbar-static-side -->
        </nav>




        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div id="page">
        
            <div class="row ">
            
            
                <div class="col-md-10 col-md-offset-2">
                   
                    <h1 class="h2">ยินดีต้อนรับเข้าสู่กระบวนการการเลี้ยงไก่เนื้อของท่าน.</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="panel panel-info">                
             <div class="panel-heading">
                           <h3 class="h2" >  อุณหภูมิ °C(°F)</h3>
                        </div>
                        <div class="panel-body">
                   
                   <?php 
                   
                   $selectHistory = "SELECT id FROM history ORDER BY id DESC  LIMIT 1 ";
                   $queryHistory  = mysql_query($selectHistory) or die ("Error Query [".$selectHistory."]");
                   $History1      = mysql_fetch_array($queryHistory);
                   
                   $Historyid = $History1['id'];
                   
                   $Historyid1  = $Historyid+1;
                   
                   
                   $tempday1 = "SELECT  `count_date` , AVG(  `temp` ) , AVG(  `humidity` ) 
							    FROM  `temp_day` 
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '1'AND  '7'
							    GROUP BY  `count_date` 
							    ORDER BY  `count_date`";
                   			
                   $startday1    = mysql_query($tempday1) or die ("Error Query [".$tempday1."]");
                       
                   $tempday2 = "SELECT  `count_date` , AVG(  `temp` ) , AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '8'AND  '14'
							    GROUP BY  `count_date`
							    ORDER BY  `count_date`";
                   
                   $startday2    = mysql_query($tempday2) or die ("Error Query [".$tempday2."]");
                   
                   $tempday3 = "SELECT  `count_date` , AVG(  `temp` ) , AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '15'AND  '21'
							    GROUP BY  `count_date`
							    ORDER BY  `count_date`";
                   
                   $startday3    = mysql_query($tempday3) or die ("Error Query [".$tempday3."]");
                   
                   $tempday4 = "SELECT  `count_date` , AVG(  `temp` ) , AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '22'AND  '28'
							    GROUP BY  `count_date`
							    ORDER BY  `count_date`";
                   
                   $startday4    = mysql_query($tempday4) or die ("Error Query [".$tempday4."]");
                   
                   $tempday5 = "SELECT  `count_date` , AVG(  `temp` ) , AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '29'AND  '35'
							    GROUP BY  `count_date`
							    ORDER BY  `count_date`";
                   
                   $startday5    = mysql_query($tempday5) or die ("Error Query [".$tempday5."]");
                   
                   $tempday6 = "SELECT  `count_date` , AVG(  `temp` ) , AVG(  `humidity` )
							    FROM  `temp_day`
								WHERE  `cycle` = ( SELECT MAX( cycle ) FROM  `temp_day` ) AND  `count_date`BETWEEN  '36'AND  '42'
							    GROUP BY  `count_date`
							    ORDER BY  `count_date`";
                   
                   $startday6    = mysql_query($tempday6) or die ("Error Query [".$tempday6."]");
                   $startday66    = mysql_query($tempday6) or die ("Error Query [".$tempday6."]");
                   
                   
                   
                   
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
                   
                  
                  
                   
                   		
                   
                   //$Resultempday  = mysql_fetch_array($Querystart);
                   //<pre> <?php printf("count_date:%f  TEMP:%.2f   Humi:%.2f ", $row[0], $row[1],$row[2]);?></pre>
                
               
                   
              
                   
                   
                    <table class="table">
                                    <thead>
                                        <tr>
                                            <th>สัปดาห์</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>เฉลี่ย</th>
                                        </tr>
                                    <tbody>
											
                                        <tr class="success">
                                            <td>สัปดาห์1</td>
                                           <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           			
                                           	$row1 = mysql_fetch_array($startday1);
                                           	$f1[$i] = $row1[2];
                                           	
                                           
                                           	$F = 9/5;
                                           $sum1 = $F * $row1[1] ;
                                           $sum11 = $sum1 + 32;
                                           $sum111 = $A1  ;
                                          
                                           	
                                           	?>
                                            
                                           <td>
                                           <?php printf("%.2f",$row1[1] );?> (<?php if($sum1==0){printf("%.2f", $sum1);}else {printf("%.2f", $sum11); }?>)
                                           </td>
                                           	
                                          
                                           <?php } ?>
                                           
                                           <?php $AVGfetch1 = mysql_fetch_array($AVG11);
                                           		 $A1  = $AVGfetch1[0];
                                           		 $B1  = $AVGfetch1[1];
                                           		 $F = 9/5;
                                           		 $sum111 = $A1 *$F +32 ;
                                           		 
                                           ?>
                                           <td><?php printf("%.2f",$A1)  ?>(<?php if($A1==0){printf("%.2f",$A1);}else  printf("%.2f",$sum111 ) ; ?>)</td>
                                                                                        
                                        </tr>
                                        
                                        
                                        <tr class="info">
                                            <td>สัปดาห์2</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           			
                                           	$row2 = mysql_fetch_array($startday2);
                                           	$f2[$i] = $row2[2];
                                           	$F = 9/5;
                                           	$sum2 = $F * $row1[2] ;
                                           	$sum22 = $sum1 + 32;
                                           	
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$row2[1] ) ?>(<?php if($sum1==0){printf("%.2f", $sum2);}else {printf("%.2f", $sum22); }?>)</td>
                                           
                                          
                                           <?php }
                                          
                                           
                                           ?>
                                           <?php $AVGfetch2 = mysql_fetch_array($AVG22);
                                           		 $A2  = $AVGfetch2[0];
                                           		 $B2  = $AVGfetch2[1];
                                           		 $F = 9/5;
                                           		 $sum222 = $A2 *$F +32 ;
                                           		 ?>
                                           <td><?php printf("%.2f",$A2)  ?>(<?php if($A2==0){printf("%.2f",$A2);}else  printf("%.2f",$sum222 ) ; ?>)</td>
                                        </tr>



									<tr class="warning">
                                            <td>สัปดาห์3</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           			
                                           	$row3 = mysql_fetch_array($startday3);
                                           	$f3[$i] = $row3[2];
                       
                                           	$F = 9/5;
                                           	$sum3 = $F * $row1[3] ;
                                           	$sum33 = $sum1 + 32;
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$row3[1] ) ?>(<?php if($sum1==0){printf("%.2f", $sum3);}else {printf("%.2f", $sum33); }?>)</td>
                                           
                                          
                                          <?php }
                                           //mysql_free_result($startday3);
                                           
                                           ?>
                                           <?php $AVGfetch3 = mysql_fetch_array($AVG33);
                                           		 $A3  = $AVGfetch3[0];
                                           		 $B3  = $AVGfetch3[1];
                                           		 $F = 9/5;
                                           		 $sum333 = $A3 *$F +32 ;
                                           		 ?>
                                           <td><?php printf("%.2f",$A3)  ?>(<?php if($A3==0){printf("%.2f",$A3);}else  printf("%.2f",$sum333 ) ; ?>)</td>
                                        </tr>
                                        
                                        
                                        <tr class="danger">
                                            <td>สัปดาห์4</td>
                                           
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           			
                                           	$row4 = mysql_fetch_array($startday4);
                                           	$f4[$i] = $row4[2];
                                           	$F = 9/5;
                                           	$sum4 = $F * $row1[4] ;
                                           	$sum44 = $sum1 + 32;
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$row4[1] ) ?>(<?php if($sum1==0){printf("%.2f", $sum4);}else {printf("%.2f", $sum44); }?>)</td>
                                           
                                          
                                          <?php }
                                          // mysql_free_result($startday4);
                                           
                                           ?>
                                           <?php $AVGfetch4 = mysql_fetch_array($AVG44);
                                           		 $A4  = $AVGfetch4[0];
                                           		 $B4  = $AVGfetch4[1];
                                           		 $F = 9/5;
                                           		 $sum444 = $A4 *$F +32 ;
                                           		 ?>
                                           <td><?php printf("%.2f",$A4)  ?>(<?php if($A4==0){printf("%.2f",$A4);}else  printf("%.2f",$sum444 ) ; ?>)</td>
                                        </tr>
                                        
                                        
                                        <tr class="success">
                                            <td>สัปดาห์5</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           			
                                           	$row5 = mysql_fetch_array($startday5);
                                           	$f5[$i] = $row5[2];
                                           	$F = 9/5;
                                           	$sum5 = $F * $row1[5] ;
                                           	$sum55 = $sum1 + 32;
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$row5[1] ) ?>(<?php if($sum6==0){printf("%.2f", $sum5);}else {printf("%.2f", $sum55); }?>)</td>
                                           
                                          
                                           <?php }
                                           //mysql_free_result($startday5);
                                           
                                           ?>
                                           <?php $AVGfetch5 = mysql_fetch_array($AVG55);
                                           		 $A5  = $AVGfetch5[0];
                                           		 $B5  = $AVGfetch5[1];
                                           		 $F = 9/5;
                                           		 $sum555 = $A5 *$F +32 ;
                                           		 ?>
                                           <td><?php printf("%.2f",$A5)  ?>(<?php if($A5==0){printf("%.2f",$A5);}else  printf("%.2f",$sum555 ) ; ?>)</td>
                                        </tr>
                                        
                                        
                                        
                                        <tr class="info">
                                            <td>สัปดาห์6</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           			
                                           	$row6 = mysql_fetch_array($startday6);
                                           	$f6[$i] = $row6[2];
                                           	$F = 9/5;
                                           	$sum6 = $F * $row1[6] ;
                                           	$sum66 = $sum1 + 32;
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$row6[1] ) ?>(<?php if($sum1==0){printf("%.2f", $sum6);}else {printf("%.2f", $sum66); }?>)</td>
                                           
                                          
                                           <?php }
                                           //mysql_free_result($startday6);
                                           
                                           ?>
                                           <?php $AVGfetch6 = mysql_fetch_array($AVG66);
                                           		 $A6  = $AVGfetch6[0];
                                           		 $B6  = $AVGfetch6[1];
                                           		 $F = 9/5;
                                           		 $sum666 = $A6 *$F +32 ;
                                           		 ?>
                                           <td><?php printf("%.2f",$A6)  ?>(<?php if($A6==0){printf("%.2f",$A6);}else  printf("%.2f",$sum666 ) ; ?>)</td>
                                        </tr>
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                             </div>
                        </div>
        </div>
                <div class="panel panel-success">                
             <div class="panel-heading">
                           <h3 class="h2" >  ความชื้น %RH</h3>
                        </div>
                        <div class="panel-body">
                    <table class="table">
                                    <thead>
                                        <tr>
                                        <th>สัปดาห์</th>
                                           <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>เฉลี่ย</th>
                                        </tr>
                                    <tbody>
											
                                        <tr class="success">
                                            <td>สัปดาห์1</td>
                                           <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           	
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$f1[$i]); ?></td>
                                           
                                          <?php }?>
                                          
                                          <td><?php printf("%.2f",$B1)?></td>
                                            
                                                                                        
                                        </tr>
                                        
                                        
                                        <tr class="info">
                                            <td>สัปดาห์2</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           	
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$f2[$i]); ?></td>
                                           
                                          <?php }?>
                                          
                                          
                                          <td><?php printf("%.2f",$B2)?></td>
                                        </tr>
                                        
                                        
                                        <tr class="warning">
                                            <td>สัปดาห์3</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           	
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$f3[$i]); ?></td>
                                           
                                          <?php }?>
                                          
                                          <td><?php printf("%.2f",$B3)?></td>
                                        </tr>
                                        
                                        
                                        <tr class="danger">
                                            <td>สัปดาห์4</td>
                                           
                                           <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           	
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$f4[$i]); ?></td>
                                           
                                          <?php }?>
                                          
                                          <td><?php printf("%.2f",$B4)?></td>
                                        </tr>
                                        
                                        
                                        <tr class="success">
                                            <td>สัปดาห์5</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           	
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$f5[$i]); ?></td>
                                           
                                          <?php }?>
                                          <td><?php printf("%.2f",$B5)?></td>
                                        </tr>
                                        
                                        
                                        
                                        <tr class="info">
                                            <td>สัปดาห์6</td>
                                            <?php 
                                           
                                           for ($i=1;$i<=7;$i++){
                                           	
                                           	?>
                                           	
                                           <td><?php printf("%.2f",$f6[$i]); ?></td>
                                           
                                          <?php }?>
                                          <td><?php printf("%.2f",$B6)?></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                               
                             </div>
                        </div>
                <!-- /.col-lg-12 -->
            </div>    
            </div>
          
	                    
            </div>
            <!-- /.container-fluid -->
      
        <!-- /#page-wrapper -->

    
    <!-- /#wrapper -->






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


