<?php 
    include("connectSQL.php");
    $s = "SELECT *FROM `realtime` where `Realtime_Status`='on'  and  `Realtime_Round`=(SELECT MAX(`Realtime_Round`) FROM realtime) ";
    $s1 = mysql_query($s);
    $dayobjResult = mysql_fetch_array($s1)or die ("Error Query dayyyQuery [".$s1."]");
    $day=$dayobjResult['Realtime_DateTime'];
   // echo $day;
    $thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
    $thai_month_arr=array(
    		"0"=>"",
    		"1"=>"มกราคม",
    		"2"=>"กุมภาพันธ์",
    		"3"=>"มีนาคม",
    		"4"=>"เมษายน",
    		"5"=>"พฤษภาคม",
    		"6"=>"มิถุนายน",
    		"7"=>"กรกฎาคม",
    		"8"=>"สิงหาคม",
    		"9"=>"กันยายน",
    		"10"=>"ตุลาคม",
    		"11"=>"พฤศจิกายน",
    		"12"=>"ธันวาคม"
    );
    function thai_date($time){
    	global $thai_day_arr,$thai_month_arr;
    	$thai_date_return="".$thai_day_arr[date("w",$time)];
    	$thai_date_return.= " ".date("j",$time);
    	$thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];
    	$thai_date_return.= " พ.ศ.".(date("Yํ",$time)+543);
    	$thai_date_return.= "  ".date("H:i",$time)." น.";
    	return $thai_date_return;
    }
    $eng_date=strtotime("$day");
    
   // echo "</br>".thai_date($eng_date);
    
    $daycut = thai_date($eng_date);
 //   echo $eng_date;
   // echo "</br>daycut = ";
    
    
    
  //  echo $daycut;
    
    $div1 = explode(" ",$daycut);
    
    //echo "div=".$div1[0];echo "</br>div1=".$div[1];
   // echo "</br>div2=".$div[2];echo "</br>div3=".$div[3];
 //   echo "</br>div4=".$div[4];echo "</br>div5=".$div[5];
 //   echo "</br>div6=".$div[6];echo "</br>div7=".$div[7];
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

 <div id="page-wrapper">
 <div class="container-fluid">
                <div id="page">
        
            <div class="row ">
    <?php 
    include ("connectSQL.php");
    $allsql =" SELECT Profile_name,  `Realtime_DateTime` ,  `Device_id` ,  `Realtime_Temperature` ,  `Realtime_Humidity` , Realtime_Round 
    		FROM  `realtime` WHERE Realtime_Status =  'on' AND Device_id <  '5' ";
    $allqry = mysql_query($allsql);
    $allqry1 = mysql_fetch_array($allqry);
    ?>
     <div class="panel panel-default">
                        <div class="panel-heading">
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           <label > ข้อมูลการทั้งหมด</label>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th>ปี-เดือน-วัน</th>
                                            <th>เวลา</th>
                                            <th>อุปกรณ์</th>
                                            <th>ชื่อโปรไฟล์</th>
                                            <th>อุณหภูมิ</th>
                                            <th>ความชื้น</th>
                                            <th>รอบการเลี้ยง</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                   
                                   while( $allobj = mysql_fetch_array($allqry)){
                                    
                                    ?>
                                        <tr>
                                            <td><?php printf("%s",substr($allobj[1], 0, 10));?></td>
                                            <td> <?php printf("%s",substr($allobj[1], 11, 18) );?></td>
                                            <td>อุปกรณ์ตัวที่<?php printf("%d",$allobj[2] );?></td>
                                            <td><?php printf("%s",$allobj[0] );?></td>
                                            <td> <?php printf("%.2f",$allobj[3] );?>°C</td>
                                            <td> <?php printf("%.2f",$allobj[4] );?>%RH</td>
                                            <td> ครั้งที่<?php echo $allqry1['Device_id'];?></td>
                                        </tr>
                                        
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        
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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    
</body>

</html>


