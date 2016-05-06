<?php




$strSort = $_POST["mySort"];

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("chicken");
$strSQL = " SELECT *FROM message ORDER BY MessageID DESC LIMIT 0 , 1 ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);
$strSQL1 = " SELECT * FROM `realtime`WHERE `Realtime_Round` = (SELECT MAX( `Realtime_Round` )FROM realtime )AND `Realtime_Status` = 'on' order by id desc limit 0, 1 ";
$objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
$objResult1 = mysql_fetch_array($objQuery1);
?>

                       <?php 
                       if ($objResult['New'] == Yes && $objResult1['Realtime_Round'] == $objResult['Realtime_Round']){
                       	
                       ?>          
                                 
                    
                        
                   
                       
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo "</br>".$objResult["message_time"];?>  <?php  echo ": ".$objResult["Subject"];?>  <a href="notification.php" class="alert-link" target ="_blank">  อ่าน  </a>.
                            </div>
                           
                <?php 
                       }
                ?>
                         
   

</table>
<?
mysql_close($objConnect);
?>