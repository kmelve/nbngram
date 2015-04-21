$(document).ready(function() {
var chart1; // globally available

function highcharts(data) {
			console.log(data.x_axis,data.y_axis,data.z_axis);
			searchstring = $.trim($("#search__button").val());
			$('#highcharts').append('<small>You can toggle the graphs by cliking their names in the legend.</small>');
			chart1 = new Highcharts.Chart({
				chart: {
					renderTo: 'highcharts',
					type: 'area',
					zoomType: 'x'
					},
				title: {
					text: 'NB Ngrams for "' + searchstring + '"'
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
						floor: 0,
						labels: {
							format: '{value} hits'
							},
						title: {
							text: 'Absolute frequencies',
							},
							opposite: true,
							showEmpty: false

					},
					{ // Secondary yAxis
						floor: 0,

						title: {
							text: 'Relative frequencies'
							},
						labels: {
							format: '{value} %',
							},
							opposite: false,
							showEmpty: false
						}
					],
				tooltip: {
					shared: true
					},
					legend: {

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
					yAxis: 1,
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
function rawData(data) {
	var str_metadata = JSON.stringify(data, null, 2);
	//$("#results").show("fast");
	$("#results").append(str);

}
function nbSearch(callback) {
		var searchUrl = 'http://www.nb.no/sp_tjenester/beta/ngram_1/ngram/query?terms=';
		var searchParameter = '&lang=all&' + $("#search").serialize();
		var searchString = $.trim($("#search__button").val());
		var searchQuery = searchUrl+searchString+searchParameter;
		$.ajax({
		url: 'proxy.php',
		type: 'GET',
		dataType: 'json',
		data: {searchquery: searchQuery}
		})
		.done(function(data) {
			callback(data.metadata);
		})
		.fail(function(xhr, ajaxOptions, thrownError) {
			console.log(xhr.status);
			console.log(thrownError);
			console.log(searchquery);
			$("results").append("Something went wrong. Sorry!");
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
			//rawData(result);
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


