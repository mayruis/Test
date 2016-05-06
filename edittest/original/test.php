<form action="index.php" method="post" name="form1">
  Name
  <input name="txtName" type="text">
  SiteName
  <input name="txtSiteName" type="text">
  Password
  <input name="pass" type="password">
  
  <input type="submit" name="Submit" value="Submit">
</form>

<?php
echo $_POST["txtName"]."<br>"; // txtName
echo $_POST["txtSiteName"]."<br>"; // txtSiteName
echo "<hr>";
echo "Received";
echo $_POST["Val"]."<br>";
echo "<hr>";

foreach($_POST as $key => $val) // All Key & Value
{
	echo $key . " : " . $val . "<br>";
}
?>