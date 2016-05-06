<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Measurement System in Broiler farm</title>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body><div align="right"><A HREF="home.php">Home</a> &nbsp;<A HREF="setting.php">Setting</a>&nbsp;<A HREF="javascript:history.back()">Back</A></div>
<form id="form1" name="form1" method="post" action="">
  <label>
  <div align="center">
    <p><img src="../../Users/Sjuard/Dropbox/king-chicken-3_thumb.jpg" width="212" height="207" /></p>
    <p>สรุปผลค่าเฉลี่ย</p>
  </div>
  <div align="center">
    <p>
    
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['รอบการเลี้ยง', 'Temp(c)', 'Humi(%)'],
          ['1', 32, 52],
          ['2', 33, 53],
          ['3', 35, 54],
          ['4', 34, 50]
        ]);

        var options = {
          chart: {
            title: 'รอบการเลี้ยงไก่เนื้อ',
            subtitle: 'Average',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
  </body>
  
    <p>&nbsp;</p>
    <p>ผลสรุปของรอบการเลี้ยงล่าสุด</p>
   
   
  
  </label>
   <A HREF="javascript:history.back()">Back</A>
  <label></label>
</form>
</body>
</html>
