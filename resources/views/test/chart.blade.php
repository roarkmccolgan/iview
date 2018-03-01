<!DOCTYPE html>
<html>
<body>
	<script src={{ asset('js/vendor/Chart.min.js') }} charset=utf-8></script>

	<canvas id="myChart" width="400" height="400"></canvas>
	<script>
		var barData = {
			labels : ["Stage 1","Stage 2","Stage 3","Stage 4","Stage 5"],
			datasets : [
				{
					fillColor : "#6BABDB",
					strokeColor : "#6BABDB",
					data : [20,34,54,12,18]
				}
			]
		}

	// get bar chart canvas
	var income = document.getElementById("myChart").getContext("2d");

		// draw bar chart
		incomeChart = new Chart(income).Bar(barData,{
			animation: false,
			barShowStroke: false,
			scaleShowHorizontalLines: false,
			scaleShowVerticalLines: false,
			showScale: true,
			onAnimationComplete: function () {
				var that = this;
				var ctx = this.chart.ctx;
				ctx.font = "bold 14px 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif";
				ctx.fillStyle = 'grey',
				ctx.textAlign = "center";
				ctx.textBaseline = "bottom";

				this.datasets.forEach(function (dataset) {
					dataset.bars.forEach(function (bar) {
						ctx.fillText(bar.value+"%", bar.x, bar.y - 8);
						//ctx.fillText(bar.label, bar.x, that.chart.height -2);
					});
				})
			}
		});
		console.log(incomeChart.datasets);
		incomeChart.datasets[0].bars[0].fillColor = "#00B7E7"; //bar 1
		incomeChart.update();

	</script>
</body>
</html>