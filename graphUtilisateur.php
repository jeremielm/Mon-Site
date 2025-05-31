<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
	<canvas id="myChart"></canvas>

	<script>
				var ctx = document.getElementById('myChart').getContext('2d');
				var myRadarChart = new Chart(ctx, {
		    type: 'radar',

		    data: {


			    	labels: ['Reading', 'Writing', 'Listening/Watching', 'Speaking', 'Interacting'],

			    	datasets: [{
			    		label: 'My progression',
			    		backgroundColor: 'rgba(92, 116, 172, 0.6)',
			    		borderColor: 'rgb(4, 36, 124)',
			    		data: [250, 400, 350, 760, 200]
			    	}]
			    },
			    options: {
			    	
			    	scale: {
			    		pointLabels:{
			    			fontSize: 15,
			    			fontColor: 'rgb(4, 36, 124)',
			    		},
			    		angleLines: {
			    			display: true
			    		},

			    		gridLines: {
			    			color: ['rgb(178, 26, 26)', 'rgb(178, 97, 26)', 'rgb(178, 178, 26)', 'rgb(45, 178, 26)', 'rgb(26, 121, 178)', 'rgb(124, 26, 178)', 'blue'],
			    			lineWidth: 2,

			    		},
			    		ticks: {
			    			min: 0,
			    			max: 1200,
			    			fontColor: 'rgb(4, 36, 124)',
			    			fontSize: 15,
			    			callback: function(label, index, labels) {
			    				switch (label) {
			    					case 200:
			    						return 'A1';
			    					case 400:
			    						return 'A2';
			    					case 600:
			    						return 'B1';
			    					case 800:
			    						return 'B2';
			    					case 1000:
			    						return 'C1';
			    					case 1200:
			    						return 'C2';
			    				}
			    			}


			    		}
			    		
			    	}
			    }
			});

	</script>



</body>
</html>
