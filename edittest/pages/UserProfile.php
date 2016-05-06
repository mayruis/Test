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
                <a class="navbar-brand" href="admin.php">ADMIN SETTING</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $objResult["Name"];?>  <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-user">
                        
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
                            <a href="UserProfile.php"><i class="fa fa-edit fa-fw"></i> Edit Profile</a>
                        </li>
                        
                        <li>
                            <a href="password.php"><i class="fa fa-table fa-fw"></i> Change Password</a>
                        </li>
                                                
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        
                   
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
   




        <!-- Page Content -->
        <div id="page-wrapper">
        	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        
                       <div class="panel-body">
                            <div class="row">
                            	<form role="form" method="post" action="save_edit_profile.php" >
                                <div class="col-lg-6">
                                   
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="txtName" value="<?php echo $objResult["Name"];?>">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>LastName</label>
                                            <input class="form-control" name="txtLastName" value="<?php echo $objResult["LastName"];?>">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="txtEmail" value="<?php echo $objResult["Email"];?>">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>   
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" name="txtTelephone" value="<?php echo $objResult["Telephone"];?>" >
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        
                                        <div class="form-group ">
                                                <label>Status</label>
                                                <input class="form-control" id="disabledInput" type="text" value="<?php echo $objResult["Status"];?>" disabled>
                                                <input class="form-control" type="hidden" name="Status" value="<?php echo $objResult["Status"];?>"  >
                                        		
                                        </div>
  
                               </div>
                               
                               
                               <div class="col-lg-6">
                                   
                                    
                                        <div class="form-group">
                                            <label>USERNAME</label>
                                            <input class="form-control" name="txtUsername"  value="<?php echo $objResult["Username"];?>">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>USER-ID</label>
                                            <input class="form-control"   id="disabledInput" type="text" value="<?php echo $objResult["UserID"];?>" disabled>
                                            <input class="form-control" type="hidden" name="txtUserID" value="<?php echo $objResult["UserID"];?>" >
                                            
                                            
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>C</label>
                                            <input class="form-control" name="txtStatus">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>   
                                        <div class="form-group">
                                            <label>D</label>
                                            <input class="form-control" name="txtStatus">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        
                                        <div class="form-group ">
                                                <label for="disabledSelect">E</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                        </div>

                               </div>
                               
                                <div class="col-lg-6">
                               <br>
                               			<button type="submit" class="btn btn-success ">Submit Button</button> 
                               	</div>
                               			
                             </form>
                             
                           </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>


