$(document).ready(function(){
	$.ajax({
		url: "http://localhost/pp1/chartjs/js/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var name = [];
			var score = [];

			for(var i in data) {
				name.push(data[i].name);
				score.push(data[i].score);
			}

			var chartdata = {
				labels: name,
				datasets : [
					{
						label: 'Student Marks',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});