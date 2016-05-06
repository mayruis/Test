<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	mysql_connect("localhost","root","1234");
	mysql_select_db("test");
	
	if($_POST["txtUsername"] == "")
	{
		header("location:Error.php?value='Username No Data '");
		exit();
	}
			
	$strSQL = "UPDATE member SET UserID = '".trim($_POST['txtUserID'])."' 
						      ,Username = '".trim($_POST['txtUsername'])."'
		       				      ,Name = '".trim($_POST['txtName'])."'
							  ,LastName = '".trim($_POST['txtLastName'])."'
							     ,Email = '".trim($_POST['txtEmail'])."'
							 ,Telephone = '".trim($_POST['txtTelephone'])."'
	                            ,Status = '".($_POST['Status'])."'WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysql_query($strSQL);
	

	if($_SESSION["Status"] == "ADMIN")
	{
		
		header("location:UserProfile.php");
	}
	else
	{
		echo "<br> Go to <a href='user_setting.php'>User page</a>";
	}
	
	mysql_close();
?>