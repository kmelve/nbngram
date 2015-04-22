<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NB Ngram Alt</title>

	<link rel="stylesheet" href="bower_components/foundation/css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" text="text/javascript"></script>
    <script src="bower_components/highcharts/highcharts.js"></script>
    <script src="bower_components/highcharts/modules/exporting.js"></script>

    <script src="app.js"></script>

</head>
<body>
<a href="https://github.com/kmelve/nbngram"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
<header>
	 <div class="row">
		        <h1>NB Ngram Alt</h1>
	 	<div class="small-12 medium-6 columns">
		        <p>This is an alternative to the fantastic <a href="http://www.nb.no/sp_tjenester/beta/ngram_1">NB Ngram</a>. I wrote it partly as a coding exercise, but also to generate alternative graphs. Highchars.js provides more export options and possibilities for dymamic rendering. I also plan to add options for <a href="http://xkcdgraphs.com/">XKCD-style graphs</a>, <a href="https://plot.ly/">plot.ly</a> exports and a <a href="http://en.wikipedia.org/wiki/Sparkline">sparkline</a> generator.</p>
	    </div>
	    <div class="small-12 medium-4 columns end">
	    	<ul>
	        	<li>You can merge ngrams with '+' (e.g. <em>eple+epler</em>)</li>
	        	<li>True ngram search now works (e.g. <em>kvinnelig sjåfør</em> or <em>satse på kvalitet</em>)</li>
	        	<li>Wildcards, multiple ngram series doesn't work</li>
	        </ul>

	    </div>
</div>
</header>
<hr />
    <section>
        <div id="container">
            <form id="search">
            	<div class="row">
            		<div class="small-4 columns">
            		<label for="text_input">
                		<input type="text" id="text_input" placeholder="Text goes here!"/>
                	</label>
            		</div>
                	<div class="small-4 columns">
                	<p>
                		<label for="button__bok">Choose corpus:
                		<input type="radio" name="corpus" value="avis" checked> Newspapers
                		<input id="button__bok" type="radio" name="corpus" value="bok"> Books
                		</label>
                	</p>
                	<p>
                		<label for="button__case">Case sensitivity:
                		<input id="button__case" type="radio" name="case_sens" value="0" checked> Aa
                		<input type="radio" name="case_sens" value="1"> A/a
                		</label>
                	</p>
                	</div>
                	<div class="small-4 columns">
                	<label for="search_button">
                		<input type="submit" class="button" id="searh_button" value="Get those Ngrams!" />
                	</label>
                	</div>
                </div>
            </form>

        <div id="highcharts">
        </div>
        <div class="row">
        <div id="results" class="small-12 columns">
        <p>Check <a href="https://developer.chrome.com/devtools/docs/shortcuts">console</a> for raw data.</p>
        	<!-- <ul class="accordion" data-accordion>
  				<li class="accordion-navigation">
    				<a href="#relative">Relative frequencies</a>
    				<div id="panel1a" class="content active">
    				</div>
  				</li>
  				<li class="accordion-navigation">
    				<a href="#absolute">Absolute frequencies</a>
    				<div id="panel2a" class="content">
    				</div>
  				</li>
  				<li class="accordion-navigation">
    				<a href="#years">Years</a>
    				<div id="panel3a" class="content">
    				</div>
  				</li>
  				<li class="accordion-navigation">
    				<a href="#searchdata">Search data</a>
    				<div id="panel3a" class="content">
    				</div>
  				</li>
			</ul> -->
        </div>
    </div>

    </section>
</div>
<div class="row">
<div class="small-12 columns">
    <footer>
        <p>NB Ngram Alt is developed by <a href="mailto:knut.melvaer@gmail.com">Knut Melvær</a> (<a href="https://twitter.com/kmelve">@kmelve</a>). NB Ngram Alt is a free service for education and research.</p>
        <p><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">NB Ngram Alt</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://github.com/kmelve/nbngam" property="cc:attributionName" rel="cc:attributionURL">Knut Melvær</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">CC-BY-NC-4.0</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://github.com/kmelve/nbgraph" rel="dct:source">http://github.com/kmelve/nbngram</a>.</p>
        <p><a href="http://highcharts.com">Highcharts</a> is licensed under <a href="http://creativecommons.org/licenses/by-nc/3.0/">CC-BY-NC-3.0</a>, which means you can use it for free for non-profit and with attribution.</p>
    </footer>
</div>
</div>
</body>

</html>
