<html >

<head>
 <style type="text/css"></style>
</html>
    <meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CPE55</title>

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
                <a class="navbar-brand" href="#.php">ADMIN </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                     <li><a href="UserProfile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                                               
                       <li>
                            <a href="select.php"><i class="fa "><p class="fa fa-gears"></p></i> ปรับค่าเอง</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-wrench fa-fw"></i> ค่ามาตรฐาน<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                            <a href="selectSD.php"><i class="fa "><p class="fa fa-home"></p></i> Hubbard</a>
                            </li>
                            <li>
                            <a href="selectSD2.php"><i class="fa "><p class="fa fa-home"></p></i> Arbor Acres</a>
                            </li>
                            <li>
                            <a href="selectSD3.php"><i class="fa "><p class="fa fa-home"></p></i> Indian River</a>
                            </li>
                            <li>
                            <a href="selectSD4.php"><i class="fa "><p class="fa fa-home"></p></i> Ross 308</a>
                            </li>
                            <li>
                            <a href="selectSD5.php"><i class="fa "><p class="fa fa-home"></p></i> Cobb</a>
                            </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="dataold.php"><i class=""></i>ตรวจสอบข้อมูลทั้งหมด</a>
                        </li>
                        
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
    
        </nav>
        
       <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div id="page">
        
                    <div class="row "> 
                        <div class="col-md-4 col-md-offset-3">
                   
                         <h1 class="h2">ยินดีต้อนรับ</h1>
                        </div>
                   <div class="panel-body">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                             
                                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         <?php 
                              include("connectSQL.php");
                              $mode1="select * from profile where Profile_name = 'Cobb'and profile_W = '1' ";
                              $modeQuery1 = mysql_query($mode1)or die ("Error Query [".$mode1."]");
                              $modeResult1 = mysql_fetch_array($modeQuery1);
                              
                             
                              ?>
                        <label>โปรไฟล์ : </label><label ><?php echo $modeResult1['Profile_name'];?></label>
								
                                
                               
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <img alt="เธฃเธนเธ�" src="http://www.lib.ru.ac.th/journal/images/cock-1.jpg">
                            <div class="dataTable_wrapper">
                          <br><br>
                             
                           <form role="form" action="openfarm1.php" name="frmAdd" method="post">
                           <input name="namemode" id="namemode" value="Cobb" class="hidden">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th>สัปดาห์</th>
                                            <th>อุณหภูมิ</th>
                                            <th>ความชื้นต่ำสุด</th>
                                            <th>ความชื้นสูงสุด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td><input type="number" name="temp_w1" id="temp_w1" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>" ></td>
                                            <td><input type="number" name="hmin_w1" id="hmin_w1" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>"></td>
                                            <td><input type="number" name="hmax_w1" id="hmax_w1" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>"></td>
                                        </tr>
                                        <tr class="even gradeC">
                                         <?php 
                              
                              $mode2="select * from profile where Profile_name = 'Cobb' and profile_W = '2' ";
                              $modeQuery2 = mysql_query($mode2)or die ("Error Query2 [".$mode2."]");
                             $modeResult2 = mysql_fetch_array($modeQuery2);
                              
                              ?>
                                            <td>2</td>
                                            <td><input type="number" name="temp_w2" id="temp_w2" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>"></td>
                                            <td><input type="number" name="hmin_w2" id="hmin_w2" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>"></td>
                                            <td><input type="number" name="hmax_w2" id="hmax_w2" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>"></td>
                                        </tr>
                                        <tr class="odd gradeA">
                                         <?php 
                              
                              $mode3="select * from profile where Profile_name = 'Ross 308' and profile_W = '3'";
                              $modeQuery3 = mysql_query($mode3)or die ("Error Query3 [".$mode3."]");
                             $modeResult3 = mysql_fetch_array($modeQuery3);
                              
                              ?>
                                            <td>3</td>
                                            <td><input type="text" name="temp_w3" id="temp_w3" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>"></td>
                                            <td><input type="text" name="hmin_w3" id="hmin_w3" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>"></td>
                                            <td><input type="text" name="hmax_w3" id="hmax_w3" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>"></td>
                                        </tr>
                                        <tr class="even gradeA">
                                         <?php 
                              
                              $mode4 ="select * from profile where Profile_name = 'Cobb' and profile_W = '4'";
                              $modeQuery4 = mysql_query($mode4)or die ("Error Query [".$mode4."]");
                             $modeResult4 = mysql_fetch_array($modeQuery4);
                              
                              ?>
                                            <td>4</td>
                                            <td><input type="text" name="temp_w4" id="temp_w4" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>"></td>
                                            <td><input type="text" name="hmin_w4" id="temp_w4" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>"></td>
                                            <td><input type="text" name="hmax_w4" id="temp_w4" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>"></td>
                                        </tr>
                                        <tr class="odd gradeA">
                                         <?php 
                              
                              $mode5="select * from profile where Profile_name = 'Cobb' and profile_W = '5'";
                              $modeQuery5 = mysql_query($mode5)or die ("Error Query5 [".$mode5."]");
                             $modeResult5 = mysql_fetch_array($modeQuery5);
                              
                              ?>
                                            <td>5</td>
                                            <td><input type="text" name="temp_w5" id="temp_w5" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>"></td>
                                            <td><input type="text" name="hmin_w5" id="temp_w5" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>"></td>
                                            <td><input type="text" name="hmax_w5" id="temp_w5" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>"></td>
                                        </tr>
                                        <tr class="even gradeA">
                                         <?php 
                              
                              $mode6="select * from profile where Profile_name = 'Cobb' and profile_W = '6'";
                              $modeQuery6 = mysql_query($mode6)or die ("Error Query6 [".$mode6."]");
                             $modeResult6 = mysql_fetch_array($modeQuery6);
                              
                              ?>
                                            <td>6</td>
                                            <td><input type="text" name="temp_w6" id="temp_w6" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>"></td>
                                            <td><input type="text" name="hmin_w6" id="temp_w6" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>"></td>
                                            <td><input type="text" name="hmax_w6" id="temp_w6" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>"></td>
                                        </tr>
                                       </tbody>
                                </table>
                            </div>
                          </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

                                        <button type="submit" class="btn btn-primary btn-lg btn-block">บันทึก</button>
                                  
                                    </form>
                                
                                </div>
                                
 
                            </div>
                            <!-- /.row (nested) -->
                            
                            
                            
                            
                            
                            
                        </div>
               
               
               
               
               
                    </div> 
                </div>
			</div>
        </div>
        <!-- /#page-wrapper -->

    </div>
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    

</body>

</html>


