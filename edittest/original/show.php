<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center"><a href="JavaScript:doCallAjax('id_sensor')">id_sensor</a></div></th>
    <th width="98"> <div align="center"><a href="JavaScript:doCallAjax('temperature')">temperature</a> </div></th>
    <th width="198"> <div align="center"><a href="JavaScript:doCallAjax('humidity')">humidity</a> </div></th>
    <th width="198"> <div align="center"><a href="JavaScript:doCallAjax('st atus')">status</a> </div></th>
   
  </tr>

<?
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["id_sensor"];?></div></td>
    <td><?php echo $objResult["temperature"];?></td>
    <td><?php echo $objResult["humidity"];?></td>
    <td><?php echo $objResult["status"];?></td>
  </tr>
<?
}
?>
</table>