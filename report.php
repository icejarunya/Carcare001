<?PHP include"header2.php";?>
<!DOCTYPE HTML>
<html>
<head>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "รายได้รายปี"
	},
	axisY: {
		title: "จำนวนเงิน"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "เดือน",
		dataPoints: [      
			{ y: 300878, label: "มกราคม" },
			{ y: 266455,  label: "กุมภาพันธ์" },
			{ y: 169709,  label: "มีนาคม" },
			{ y: 158400,  label: "เมษายน" },
			{ y: 142503,  label: "พฤษพาคม" },
			{ y: 101500, label: "มิถุนายน" },
			{ y: 97800,  label: "สิงหาคม" },
			{ y: 80000,  label: "กันยายน" },
			{ y: 11111,  label: "กันยายน" }
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>