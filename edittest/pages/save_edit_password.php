<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	mysql_connect("localhost","root","1234");
	mysql_select_db("test");
	
	$strSQL = "SELECT Password FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuerySE = mysql_query($strSQL);
	$objResultSE = mysql_fetch_array($objQuerySE);
	
	if ($objResultSE["Password"] != $_POST["passold"])
	{
		header("location:Error.php?value='Password old not Match'");
		
		exit();
	}
	
	if($_POST["passnew"] != $_POST["conpass"])
	{
		header("location:Error.php?value='Password not Match'");
		exit();
	}
	
	$strSQL = "UPDATE member SET Password = '".trim($_POST['passnew'])."'WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysql_query($strSQL);
	
	
	
	if($_SESSION["Status"] == "ADMIN")
	{
		header("location:Completed.php");
	}
	else
	{
		header("location:User");
	}
	
	mysql_close();
?>