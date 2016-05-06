<html>
<head>
    
    <h2 align="center"><?php echo "Load Time : ".date("d-m-Y H:i:s"); ?></h2>

<style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
		
                border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }

	footer { font-family: "Trebuchet MS", Arial;
		position: fixed;
		bottom: 0;
		left: 0;
		right: 0;
		text-align: center;
    		display: block;
	}

    </style>

</head>
<body>
        
<?php 


$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("test");
$strSQL2 = "SELECT * FROM temperature ORDER BY event DESC LIMIT 1";
$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");

?>
</br>
<table align="center" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <th width="98"  class="table_titles"> <div align="center"><a href="JavaScript:doCallAjax('id')">ID</a> </div></th>
    <th width="198" class="table_titles"> <div align="center"><a href="JavaScript:doCallAjax('event')">Date and Time</a> </div></th>
    <th width="198" class="table_titles"> <div align="center"><a href="JavaScript:doCallAjax('sensor')">Sensor Serial</a> </div></th>
    <th width="198" class="table_titles"> <div align="center"><a href="JavaScript:doCallAjax('celsius')">Temperature in Celsius</a> </div></th>
  </tr>
  <?php 
  while($objResult2 = mysql_fetch_array($objQuery2))
{
	?>

  <tr>
    <td class="table_cells_odd"><div align="center"><?php echo $objResult2["id"];?></div></td>
    <td class="table_cells_odd" align="center"><?php echo $objResult2["event"];?></td>
    <td class="table_cells_odd" align="center"><?php echo $objResult2["sensor"];?></td>
    <td class="table_cells_odd" align="center"><?php echo $objResult2["celsius"];?></td>
    
  </tr>
  
  <?php } ?>
</table>

<?
mysql_close($objConnect);
?>
</body>

