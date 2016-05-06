<?php
	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("test");
	
	
		
	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("test");
	$strSQL2 = "SELECT * FROM temperature ORDER BY event DESC LIMIT 1";
	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
	
	
    $newTime = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +30 minutes"));

    //$date = "04-15-2015";
    //$date = strtotime($date);
    //$date = strtotime("+1 day", $date);
    //echo date('m-d-Y', $date);

    mysql_close($objConnect);
?>
<<!DOCTYPE link PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<link rel="stylesheet" media="all" type="text/css" href="css/jquery-ui.css" />
<link rel="stylesheet" media="all" type="text/css" href="css/jquery-ui-timepicker-addon.css" />

<script type="text/javascript" src="css/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="css/jquery-ui.min.js"></script>

<script type="text/javascript" src="css/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="css/jquery-ui-sliderAccess.js"></script>
</head>


<body>

<script type="text/javascript">

$(function(){

	var startDateTextBox = $('#dateStart');
	var endDateTextBox = $('#dateEnd');

	startDateTextBox.datepicker({ 
		dateFormat: 'dd-M-yy',
		onClose: function(dateText, inst) {
			if (endDateTextBox.val() != '') {
				var testStartDate = startDateTextBox.datetimepicker('getDate');
				var testEndDate = endDateTextBox.datetimepicker('getDate');
				if (testStartDate > testEndDate)
					endDateTextBox.datetimepicker('setDate', testStartDate);
			}
			else {
				endDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
			endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
		}
	});
	endDateTextBox.datepicker({ 
		dateFormat: 'dd-M-yy',
		onClose: function(dateText, inst) {
			if (startDateTextBox.val() != '') {
				var testStartDate = startDateTextBox.datetimepicker('getDate');
				var testEndDate = endDateTextBox.datetimepicker('getDate');
				if (testStartDate > testEndDate)
					startDateTextBox.datetimepicker('setDate', testEndDate);
			}
			else {
				startDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
			startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
		}
	});

});

</script>

Start Date : <input type="text" name="dateStart" id="dateStart" value="" /> 
End Date :   <input type="text" name="dateEnd" id="dateEnd" value="" /> 




</body>
</html>