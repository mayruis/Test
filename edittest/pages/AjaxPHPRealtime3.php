<?php
$strSort = $_POST["mySort1"];
//connect �ҹ������
include ("connectSQL.php");

  $monthx = array(); // �����᡹ x
 $y2556 = array(); //�����᡹ y
 $y2557 = array(); //�����᡹ y
//sql ����Ѻ�֧������ �ҡ �ҹ������
$sql = "SELECT * FROM realtime WHERE  `Realtime_Status` =  'on' ORDER BY  `id` DESC ";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)) {
//array_push ��͡�ùӤ�ҷ����ҡ sql ������仵���� array
 array_push($y2556,$row['Realtime_Temperature']);
 array_push($y2557,$row['Realtime_Humidity']);
 array_push($monthx,$row['Realtime_D']);
}

?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Language" content="th"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Highcharts Example</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>     
        <script>
 $(function () {
        $('#container').highcharts({
            chart: {
                type: 'line' //�ٻẺ�ͧ Ἱ���� 㹷��������� line
            },
            title: {
                text: '��ҿ�ʴ��س�������Ф�����鹵�ʹ��������' //
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['<?= implode("','", $monthx); //�ӵ���� array ᡹ x ����� 㹷������ ��͹?>']
            },
            yAxis: {
                title: {
                    text: '(C)'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'���';
                }
            },
   legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -10,
                            y: 100,
                            borderWidth: 0
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                                name: '�س�����',
                                data: [<?= implode(',', $y2556) // ������ array ᡹ y ?>]
                            
                            }]
                                  
        });
    });
        </script>
           <script>
 $(function () {
        $('#container1').highcharts({
            chart: {
                type: 'line' //�ٻẺ�ͧ Ἱ���� 㹷��������� line
            },
            title: {
                text: '��ҿ�ʴ��س�������Ф�����鹵�ʹ��������' //
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['<?= implode("','", $monthx); //�ӵ���� array ᡹ x ����� 㹷������ ��͹?>']
            },
            yAxis: {
                title: {
                    text: '(%RH)'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'���';
                }
            },
   legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -10,
                            y: 100,
                            borderWidth: 0
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                            name: '�������',
                            data: [<?= implode(',', $y2556) // ������ array ᡹ y ?>]
                            } ]
                                  
        });
    });
        </script>
    </head> 
    <body> 
      <div id="container" style="min-width: 320px; height: 380px; margin: 0 auto"></div>       
       <div id="container1" style="min-width: 320px; height: 380px; margin: 0 auto"></div>       
    </body>
</html>