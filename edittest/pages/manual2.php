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
                        <label>โปรไฟล์ : </label><label ><?php
                        
                         $namet = $_POST['mode'];  echo $namet;?></label>
								
                                
                               
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div align="left"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           <img src="<?php echo "image/rmutt.png";?>"></div>
                            <div class="dataTable_wrapper">
                            <form role="form" action="manual1.php" name="frmAdd" method="post">  	
								
                           <select class="col-md-4 col-md-offset-6" name="mode">
                           
                                    <option>  เลือก   </option>
                             <?php 
                 include("connectSQL.php");
                 $namenode= "SELECT * FROM profilename";
                 $objQuery = mysql_query($namenode)or die ("Error Query [".$namenode."]");
                  while($objResult1 = mysql_fetch_array($objQuery))
								{
								?>
                              <option value="<?php echo $objResult1[1] ?>"> <?php echo $objResult1[1];?> </option>
                              <?php	}
								?>
                              </select>
                                  &nbsp; &nbsp; &nbsp;<button type="submit"  class="btn btn-outline btn-primary">เโหลดข้อมูล
                            </button>
                              </form>
                            
                            
                            <?php 
                           
                            $text= "SELECT * FROM profilename where Profile_name = '".$namet."'";
                            $text1 = mysql_query($text)or die ("Error Query [".$text."]");
                            $text11 = mysql_fetch_array($text1);

                            ?>
                         <fieldset disabled>   <div class="col-md-3"><textarea name="txtarea"  cols="60" rows="" placeholder="<?php echo $text11['Profile_comment'];?>"></textarea></div></fieldset>
                          
                            <?php echo "</br>";?>
                             
                            <br><br>
                              <?php 
                              
                              $mode="select * from profile where Profile_name = '".trim($_POST['mode'])."'";
                              $modeQuery = mysql_query($mode)or die ("Error Query [".$mode."]");
                             $modeResult1 = mysql_fetch_array($modeQuery);
                              $name = $_POST['mode'];
                              ?>
                           <form role="form" action="openfarm.php" name="frmAdd" method="get">
                           <input name="namemode" id="namemode" value="<?php echo $name; ?>" class="hidden">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>สัปดาห์</th>
                                            <th>อุณหภูมิ</th>
                                            <th>ความชื้นต่ำสุด</th>
                                            <th>ความชื้นสูงสุด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <fieldset disabled>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td><input type="number" name="temp_w1" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>" disabled></td>
                                            <td><input type="number" name="hmin_w1" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>" disabled></td>
                                            <td><input type="number" name="hmax_w1" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>" disabled></td>
                                        </tr>
                                        <tr class="even gradeC">
                                         <?php 
                              
                              $mode="select * from profile where Profile_name = '".trim($_POST['mode'])."' ";
                              $modeQuery = mysql_query($mode)or die ("Error Query [".$mode."]");
                             $modeResult1 = mysql_fetch_array($modeQuery);
                              
                              ?>
                                            <td>2</td>
                                            <td><input type="number" name="temp_w2" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>" disabled></td>
                                            <td><input type="number" name="hmin_w2" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>" disabled></td>
                                            <td><input type="number" name="hmax_w2" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>" disabled></td>
                                        </tr>
                                        <tr class="odd gradeA">
                                         <?php 
                              
                              $mode="select * from profile where Profile_name = '".trim($_POST['mode'])."' ";
                              $modeQuery = mysql_query($mode)or die ("Error Query [".$mode."]");
                             $modeResult1 = mysql_fetch_array($modeQuery);
                              
                              ?>
                                            <td>3</td>
                                            <td><input type="number" name="temp_w3" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>" disabled></td>
                                            <td><input type="number" name="hmin_w3" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>" disabled></td>
                                            <td><input type="number" name="hmax_w3" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>" disabled></td>
                                        </tr>
                                        <tr class="even gradeA">
                                         <?php 
                              
                              $mode="select * from profile where Profile_name = '".trim($_POST['mode'])."' ";
                              $modeQuery = mysql_query($mode)or die ("Error Query [".$mode."]");
                             $modeResult1 = mysql_fetch_array($modeQuery);
                              
                              ?>
                                            <td>4</td>
                                            <td><input type="number" name="temp_w4" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>" disabled></td>
                                            <td><input type="number" name="hmin_w4" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>" disabled></td>
                                            <td><input type="number" name="hmax_w4" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>" disabled></td>
                                        </tr>
                                        <tr class="odd gradeA">
                                         <?php 
                              
                              $mode="select * from profile where Profile_name = '".trim($_POST['mode'])."' ";
                              $modeQuery = mysql_query($mode)or die ("Error Query [".$mode."]");
                             $modeResult1 = mysql_fetch_array($modeQuery);
                              
                              ?>
                                            <td>5</td>
                                            <td><input type="number" name="temp_w5" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>" disabled></td>
                                            <td><input type="number" name="hmin_w5" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>" disabled></td>
                                            <td><input type="number" name="hmax_w5" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>" disabled></td>
                                        </tr>
                                        <tr class="even gradeA">
                                         <?php 
                              
                              $mode="select * from profile where Profile_name = '".trim($_POST['mode'])."_6' ";
                              $modeQuery = mysql_query($mode)or die ("Error Query [".$mode."]");
                             $modeResult1 = mysql_fetch_array($modeQuery);
                              
                              ?>
                                            <td>6</td>
                                            <td><input type="number" name="temp_w6" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_temperature'];?>" disabled></td>
                                            <td><input type="number" name="hmin_w6" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_min'];?>" disabled></td>
                                            <td><input type="number" name="hmax_w6" id="disabledInput" class="form-control" value="<?php echo $modeResult1['Profile_humidity_max'];?>" disabled></td>
                                        </tr>
                                        </fieldset>
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


