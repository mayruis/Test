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

<?php
$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");

//*** Update Condition ***//
if($_GET["Action"] == "Save")
{
	$Table = $_GET["Table"];
	
	for($i=1;$i<=$_POST["hdnLine"];$i++)
	{
		$strSQL = "UPDATE $Table SET ";
		$strSQL .="id_time = '".$_POST["hidden11$i"]."' ";
		$strSQL .=",temp = '".$_POST["11$i"]."' ";
		$strSQL .=",humidity_min = '".$_POST["12$i"]."' ";
		$strSQL .=",humidity_max = '".$_POST["13$i"]."' ";
		
		$strSQL .="WHERE id_time = '".$_POST["hidden11$i"]."' ";
		$objQuery = mysql_query($strSQL);
	}
	
	
	if($objQuery)
	{
		$redirectUrl = 'adminconfig.php';
		
		echo '<script type="application/javascript">alert("Success"); window.location.href = "'.$redirectUrl.'";</script>';
		
	}
	else
	{
		$redirectUrl = 'adminconfig.php';
		
		echo '<script type="application/javascript">alert("Not Save"); window.location.href = "'.$redirectUrl.'";</script>';
	}
	
	
}
