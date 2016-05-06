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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="th">
<link rel="stylesheet" type="text/css" href="style.css" />

<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
  <br>
  <a href="logout.php"></a>
<table width="100%" height="150" border="0" align="center">
    <tr>
      <th width="709" height="132" rowspan="3" bgcolor="#00FF99" scope="col"><h1>Manual</h1>&nbsp;</th>
      <th height="34" colspan="2" bgcolor="#00FF99" scope="col">Welcome</th>
  </tr>
    <tr>
      <th height="43" colspan="2" scope="col"><table width="229" height="58" border="1" style="width: 300px">
        <tr>
          <td width="87">&nbsp;Username</td>
          <td width="197"><?php echo $objResult["Username"];?></td>
        </tr>
        <tr>
          <td>&nbsp;Name</td>
          <td><?php echo $objResult["Name"];?></td>
        </tr>
      </table></th>
    </tr>
    <tr>
      <th width="135" height="24" scope="col"><a href="edit_profile.php">Edit</a></th>
      <th width="163" scope="col"><a href="logout.php">Logout</a></th>
    </tr>
</table>
<p>&nbsp;</p>


<?php
$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");
$strSQL = "SELECT * FROM manual_temp ";

$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91">  <div align="center"> Week</div></th>
    <th width="30"> <div align="center"> Temp_manual </div></th>          
    <th width="59"> <div align="center"> humidaty_manual</div></th>
    <th width="30"> <div align="center"> Edit </div></th>
    
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["week"];?></div></td>
    <td><?php echo $objResult["temp"];?></td>  
    <td><?php echo $objResult["humidity"];?></div></td>
    <td align="center"><a href="phpMySQLEditRecordForm.php?id_time=<?php echo $objResult["id_time"];?>">Edit</a></td>
   
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
<table>





</table>

</body>
</html>