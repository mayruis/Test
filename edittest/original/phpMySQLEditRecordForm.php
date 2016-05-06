<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form action="phpMySQLEditRecordSave.php?id_time=<?php echo $_GET["id_time"];?>" name="frmEdit" method="post">
<?php
$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");
$strSQL = "SELECT * FROM manual_temp WHERE id_time = '".$_GET["id_time"]."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
	echo "Not found CustomerID=".$_GET["id_time"];
}
else
{
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">week </div></th>
    <th width="160"> <div align="center">temp </div></th>
    <th width="198"> <div align="center">humidity </div></th>
    
  </tr>
  <tr>
    <td><div align="center"><?php echo $objResult["week"];?> </div>												</td>
    <td><input type="text" name="txttemp" size="20" value="<?php echo $objResult["temp"];?>"></td>
    <td><input type="text" name="txthumidity" size="20" value="<?php echo $objResult["humidity"];?>"></td>
    
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  <?php
  }
  mysql_close($objConnect);
  ?>
  </form>
</body>
</html>