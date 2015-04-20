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
        <h1>NB Ngram Alt</h1>
        <p>This is an alternative to the fantastic <a href="http://nb.no/ngram">NB Ngram</a>, written part as an coding exercise, but in order to generate a large array of graphs.</p>
    </header>
    <section>
        <div id="container">
            <form>
                <input type="text" id="search" placeholder="Text goes here!"/>
                <input type="submit" id="button" value="Get those Ngrams!" />
            </form>
        </div>
        <div id="highcharts"></div>
        <div id="results"></div>
        <div id="parameter"></div>
    </section>
    <footer>
        <p>NB Ngram Alt is developed by <a href="mailto:knut.melvaer@gmail.com">Knut Melvær</a> (<a href="https://twitter.com/kmelve">@kmelve</a>). NB Ngram Alt is a free service for education and research.</p>
        <p><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">NB Ngram Alt</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://github.com/kmelve/nbngam" property="cc:attributionName" rel="cc:attributionURL">Knut Melvær</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">CC-BY-NC-4.0</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://github.com/kmelve/nbgraph" rel="dct:source">http://github.com/kmelve/nbngram</a>.</p>
        <p><a href="http://highcharts.com">Highcharts</a> is licensed under <a href="http://creativecommons.org/licenses/by-nc/3.0/">CC-BY-NC-3.0</a>, which means you can use it for free for non-profit and with attribution.</p>
    </footer>
</body>

</html>
