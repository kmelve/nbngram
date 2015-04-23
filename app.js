$(document).ready(function() {
var chart1; // globally available
$( "#text_input" ).focus();

function highcharts(data) {
			console.log(data.x_axis,data.y_axis,data.z_axis,data.ngram,data.corpus);
			var date = getDate();
			var exportname = data.ngram + '-' + data.corpus + '-' + date;

			$('#highcharts').append('<small>You can toggle the graphs by cliking their names in the legend.</small>');
			chart1 = new Highcharts.Chart({
				chart: {
					renderTo: 'highcharts',
					type: 'area',
					zoomType: 'x'
					},
				title: {
					text: 'NB Ngrams for "' + data.ngram + '" in ' + data.corpus
					},
				subtitle: {
					text: 'Source: nb.no/ngrams'
					},
				xAxis: [
					{
						categories: data.x_axis,
						type: 'datetime',
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
						},
					connectNulls: true

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
					},
					connectNulls: true
				}],
				exporting: {
            			filename: exportname
        			}
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
		var searchString = encodeURIComponent($("#text_input").val());
		var searchQuery = searchUrl+searchString+searchParameter;
		console.log(searchQuery);
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
			$( "#text_input" ).focus();
		});
}
function getDate() {
		var d = new Date();
		var day = d.getDate();
		var month = d.getMonth()+1;
		var year = d.getFullYear();
		return day + '-' + month + '-' + year;
}

	$("form").submit(function(e){
		e.preventDefault();
		nbSearch(function(result){
			highcharts(result);
			//rawData(result);
			//sparklines(result);
		});
	});
});
