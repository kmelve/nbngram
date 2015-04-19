$(document).ready(function() {
	$( "#search" ).focus();
	$("form").submit(function(e){
		e.preventDefault();
		search();

	});
	var chart1; // globally available
});
function search(){
	var gram = $.trim($("#search").val()).replace(' ', '+');
	$.ajax({
	url: 'proxy.php',
	type: 'GET',
	dataType: 'json',
	data: {searchstring: gram},
	})
	.done(function(data) {
		console.log("success");
		console.log(data);
		//highcharts(data);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
function highcharts(data) {
		chart1 = new Highcharts.Chart({
			chart: {
				renderTo: 'highcharts',
				type: 'line'
			},
				title: {
					text: 'Hits pr. year for “<em>'+searchstring+'</em>” in nb.no'
				},
				xAxis: {
					categories: output.x
				},
				yAxis: {
					title: {
						text: 'Search results frequency'
					}
				},
				series: [{
					name: 'Search results',
					data: output.metadata.yearcount
				}]
			});
		var searchurl = "http://www.nb.no/services/search/v2/search?q=";
		var searchparameter = searchstring+output.metadata.searchparameters;
		$("#parameter").append().html("Search parameter string: <a href="+searchurl+searchparameter+"><code>?q="+searchparameter+"</code></a>");

}





}
