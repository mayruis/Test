<?php
//connect เธ�เธฒเธ�เธ�เน�เธญเธกเธนเธฅ
$strSort = $_POST["mySort"];
include ("connectSQL.php");

  $week = array(); // เธ•เธฑเธงเน�เธ�เธฃเน�เธ�เธ� x
 $temp = array(); //เธ•เธฑเธงเน�เธ�เธฃเน�เธ�เธ� y
 $humi = array(); //เธ•เธฑเธงเน�เธ�เธฃเน�เธ�เธ� y
//sql เธชเธณเธซเธฃเธฑเธ�เธ”เธถเธ�เธ�เน�เธญเธกเธนเธฅ เธ�เธฒเธ� เธ�เธฒเธ�เธ�เน�เธญเธกเธนเธฅ
$sql = "SELECT * FROM realtime WHERE  `Realtime_Status` =  'on'  ";
//เธ�เธ� sql
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)) {
//array_push เธ�เธทเธญเธ�เธฒเธฃเธ�เธณเธ�เน�เธฒเธ—เธตเน�เน�เธ”เน�เธ�เธฒเธ� sql เน�เธชเน�เน€เธ�เน�เธฒเน�เธ�เธ•เธฑเธงเน�เธ�เธฃ array
 array_push($temp,$row[Realtime_Temperature]);
 array_push($humi,$row[Realtime_Humidity]);
 array_push($week,$row[Realtime_W]);
}
?>
<!DOCTYPE HTML>

<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CPE55</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>     
        <script>
 $(function () {
        $('#container').highcharts({
            chart: {
                type: 'line' //เธฃเธนเธ�เน�เธ�เธ�เธ�เธญเธ� เน�เธ�เธ�เธ เธนเธกเธด เน�เธ�เธ—เธตเน�เธ�เธตเน�เน�เธซเน�เน€เธ�เน�เธ� line
            },
            title: {
                text: 'กราฟแสดงอุณหภูมิ' //
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['<?= implode("','", $week); //เธ�เธณเธ•เธฑเธงเน�เธ�เธฃ array เน�เธ�เธ� x เธกเธฒเน�เธชเน� เน�เธ�เธ—เธตเน�เธ�เธตเน�เธ�เธทเธญ เน€เธ”เธทเธญเธ�?>']
            },
            yAxis: {
                title: {
                    text:'องศา(C)'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'เธฃเธฒเธข';
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
                                name: 'อุณหภูมิ',
                                data: [<?= implode(',', $temp) // เธ�เน�เธญเธกเธนเธฅ array เน�เธ�เธ� y ?>]
                                	
                            }]
        });
        
    });
        </script>
         <script>
         $(function () {
        $('#container1').highcharts({
            chart: {
                type: 'line' //เธฃเธนเธ�เน�เธ�เธ�เธ�เธญเธ� เน�เธ�เธ�เธ เธนเธกเธด เน�เธ�เธ—เธตเน�เธ�เธตเน�เน�เธซเน�เน€เธ�เน�เธ� line
            },
            title: {
                text: 'กราฟแสดงความชื้น' //
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['<?= implode("','", $week); //เธ�เธณเธ•เธฑเธงเน�เธ�เธฃ array เน�เธ�เธ� x เธกเธฒเน�เธชเน� เน�เธ�เธ—เธตเน�เธ�เธตเน�เธ�เธทเธญ เน€เธ”เธทเธญเธ�?>']
            },
            yAxis: {
                title: {
                    text:'(%RH)'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'เธฃเธฒเธข';
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
                                name: 'ความชื้น',
                                data: [<?= implode(',', $humi) // เธ�เน�เธญเธกเธนเธฅ array เน�เธ�เธ� y ?>]
                                	
                            }]
        });
        
    });
        </script>
</head>




<body>
<div id="wrapper">
<br>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">RMUTT</a>
            </div>
            
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                
                <li class="dropdown">
                   
                        <li><a href="index.php"><i class="fa fa-home fa-fw"></i> index</a></li>
                        <li><a href="login.php"><i class="fa fa-user fa-fw"></i> Login</a></li>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                   
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

      
        <div id="page">
        
            <div class="row ">
                <div class="col-md-8 col-md-offset-4">
                    <h1 class="h2">กราฟแสงอุณหภูมิและความชื้น</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 <div id="container" style="min-width: 320px; height: 380px; margin: 0 auto"></div>   
 <div id="container1" style="min-width: 320px; height: 380px; margin: 0 auto"></div>   
</body>

</html>


