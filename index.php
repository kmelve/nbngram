<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NB Ngram ---> plotly</title>
	<!-- <link rel="stylesheet" href=""> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" text="text/javascript"></script>
    <script src="bower_components/highcharts/highcharts.js"></script>
    <script src="bower_components/highcharts/modules/exporting.js"></script>
    <script src="app.js"></script>
</head>
<body>
    <header>
        <h1>NB Graph</h1>
        <p>The problem: <a href="http://nb.no">nb.no</a> doesn't give you an overview of search results / year</p>
        <p>The solution: Use the <a href="http://www.nb.no/services/bibsok/search/v2/">API</a> and the nb:facet fields and deploy the data in a javascript graph</p>
        <p>The disclaimer: The API request isn't fine tuned. Use these numbers with some metaphorical grains of salt.</p>
    </header>
    <section>
        <div id="container">
            <form>
                <input type="text" id="search" placeholder="Text goes here!"/>
                <input type="button" id="button" value="Lies, damned lies and statistics!" />
            </form>
        </div>
        <div id="highcharts"></div>
        <div id="results"></div>
        <div id="parameter"></div>
    </section>
    <footer>
        <p>NB Graph is developed by <a href="mailto:knut.melvaer@gmail.com">Knut Melvær</a> (<a href="https://twitter.com/kmelve">@kmelve</a>). NB Graph is a free service for education and research.</p>
        <p><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">NB Graph</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://github.com/kmelve/nbgraph" property="cc:attributionName" rel="cc:attributionURL">Knut Melvær</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">CC-BY-NC-4.0</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://github.com/kmelve/nbgraph" rel="dct:source">http://github.com/kmelve/nbgraph</a>.</p>
        <p><a href="http://highcharts.com">Highcharts</a> is licensed under <a href="http://creativecommons.org/licenses/by-nc/3.0/">CC-BY-NC-3.0</a>, which means you can use it for free for non-profit and with attribution.</p>
    </footer>
</body>

</html>
