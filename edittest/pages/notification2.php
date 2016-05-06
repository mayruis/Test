
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
<?php




$strSort = $_POST["mySort"];

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("chicken");
$strSQL = " SELECT *FROM message where New = 'Yes' ORDER BY MessageID ASC  ";
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