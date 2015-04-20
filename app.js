$(document).ready(function() {
var chart1; // globally available

function highcharts(data) {
			console.log(data.x_axis,data.y_axis,data.z_axis);
			chart1 = new Highcharts.Chart({
				chart: {
					renderTo: 'highcharts',
					type: 'area',
					zoomType: 'x'
					},
				title: {
					text: 'NB Ngrams for "' + data.searchstring + '"'
					},
				subtitle: {
					text: 'Source: nb.no/ngrams'
					},
				xAxis: [
					{
						categories: data.x_axis,
						crosshair: true
						}
					],
				yAxis: [
					{ // Primary yAxis
						labels: {
							format: '{value} hits'
							},
						title: {
							text: 'Relative frequencies',
							},
						opposite: true
					},
					{ // Secondary yAxis
						gridLineWidth: 0,
						title: {
							text: 'Absolute frequencies'
							},
						labels: {
							format: '{value} %',
							}
						}
					],
				tooltip: {
					shared: true
					},
					legend: {
						title : {
							text: "Click toggle graphs"
							},
						layout: 'vertical',
						align: 'left',
						x: 80,
						verticalAlign: 'top',
						y: 50,
						floating: true,
						backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
					},
				series: [
					{
					name: 'Relative frequencies',
					type: 'area',
					yAxis: 0,
					data: data.y_axis,
					marker: {
						enabled: false
					},
					tooltip: {
						valueSuffix: ' percent'
						}
					},
					{
					name: 'Absolute frequencies',
					type: 'line',
					yAxis: 0,
					data: data.z_axis,
					marker: {
						enabled: false
						},
					dashStyle: 'shortdot',
					tooltip: {
						valueSuffix: ' hits'
					}
				}]
			});
	}
function nbSearch(callback) {
		var searchstring = $.trim($("#search").val()).replace(' ', '+');
		$.ajax({
		url: 'proxy.php',
		type: 'GET',
		dataType: 'json',
		data: {searchstring: searchstring},
		})
		.done(function(data) {
			console.log("success");
			callback(data.metadata);
		})
		.fail(function(xhr, ajaxOptions, thrownError) {
			console.log(xhr.status);
			console.log(thrownError);
		})
		.always(function() {
			console.log("complete");
		});
}
	$( "#search" ).focus();
	$("form").submit(function(e){
		e.preventDefault();
		nbSearch(function(result){
			highcharts(result);
		});
	});

});

			// var searchurl = "http://www.nb.no/services/search/v2/search?q=";
			// var searchparameter = searchstring+data´+searchparameters;
			// $("#parameter").append().html("Search parameter string: <a href="+searchurl+searchparameter+"><code>?q="+searchparameter+"</code></a>");






















/*


function nbSearch(gram){
	$.ajax({
	url: 'proxy.php',
	type: 'GET',
	dataType: 'json',
	data: {searchstring: gram},
	})
	.done(function(data) {
		console.log("success");
		console.log(data);
		gram(data);
	})
	.fail(function(xhr, ajaxOptions, thrownError) {
		console.log(xhr.status);
		console.log(thrownError);
	})
	.always(function() {
		console.log("complete");
	});

*/


