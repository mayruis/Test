$(function() {
	 Morris.Bar({
	        element: 'morris-bar-chart',
	        data: [{
	            y: 'week1',
	            a: 100,
	            b: 50
	        }, {
	            y: 'week2',
	            a: 75,
	            b: 65
	        }, {
	            y: 'week3',
	            a: 50,
	            b: 40
	        }, {
	            y: 'week4',
	            a: 75,
	            b: 65
	        }, {
	            y: 'week5',
	            a: 50,
	            b: 40
	        }, {
	            y: 'week6',
	            a: 75,
	            b: 65
	        
	        }],
	        xkey: 'y',
	        ykeys: ['a', 'b'],
	        labels: ['Temperature A', 'Humidity B'],
	        hideHover: 'auto',
	        resize: true
	    });
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
        	week: '1 week1',
        	Temp: 32,
            Humi: 35
           
        }, {
        	week: '2 week2',
        	Temp: 27,
            Humi: 40
           
        }, {
        	week: '3 week3',
        	Temp: 24,
            Humi: 45
            
        }, {
        	week: '4 week4',
        	Temp: 21,
            Humi: 50
            
        }, {
        	week: '5 week5',
        	Temp: 19,
            Humi: 55
           
        }, {
        	week: '6 week6',
        	Temp: 18,
            Humi: 60
            
          }],
        xkey: 'week',
        ykeys: ['Temp', 'Humi'],
        labels: ['Temp', 'Humi'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
        
        
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

   

});
