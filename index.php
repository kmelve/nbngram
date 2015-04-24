<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="author" content="Knut Melvær">
	<meta name="description" content="This is an alternative viewer for NB N-gram (nb.no/ngram)">
	<meta property="og:title" content="NB N-gram Alt">
	<meta property="og:site_name" content="NB N-gram Alt">
	<link rel="canonical" href="http://jekyll-hyde.no/nbngram">
	<meta property="og:description" content="This is an alternative viewer for NB N-gram (nb.no/ngram)">
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://jekyll-hyde.no/nbngram/logo.png">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@kmelve">
	<meta name="twitter:title" content="NB N-gram Alt">
	<meta name="twitter:description" content="This is an alternative viewer for NB N-gram (nb.no/ngram)">
	<meta name="twitter:image:src" content="http://jekyll-hyde.no/nbngram/logo.png">


	<title>NB N-gram Alt</title>

	<link rel="stylesheet" href="bower_components/foundation/css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" text="text/javascript"></script>
    <script src="bower_components/highcharts/highcharts.js"></script>
    <script src="bower_components/highcharts/modules/exporting.js"></script>
    <script src="app.js"></script>

</head>
<body>

<nav class="top-bar" data-topbar role="navigation">


  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="left">
      <li><a href="http://jekyll-hyde.no/nbgraph/">NB Graph</a></li>
      <li><a href="http://jekyll-hyde.no/nbsearch/">NB Search</a></li>

    </ul>
  </section>
</nav>
<a href="https://github.com/kmelve/nbngram"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>


<header>
	 <div class="row">
	 	<div class="small-12 medium-3 columns">
		        <a href="./"><img class="logo" src="logo.png" title"NB&nbsp;N-gram&nbsp;Alt" /></a>
		</div>
		<div class="small-12 medium-6 columns end">
		        <h3>Explore words in time…</h3>
		        <p>This is an alternative to the fantastic <a href="http://www.nb.no/sp_tjenester/beta/ngram_1">NB N-gram</a>. It's a lot like <a href="https://books.google.com/ngrams">Goolge N-gram Viewer</a>, but for Norwegian. I wrote it partly as a coding exercise, but also to generate alternative graphs. <a href="http://www.highcharts.com/">Highcharts.js</a> provides more export options and possibilities for dymamic rendering. I also plan to add options for <a href="http://xkcdgraphs.com/">XKCD-style graphs</a>, <a href="https://plot.ly/">plot.ly</a> exports and a <a href="http://en.wikipedia.org/wiki/Sparkline">sparkline</a> generator.</p>
		        <p class="label secondary">What is an <a href="http://en.wikipedia.org/wiki/Ngram">N-gram</a>?</p>
	    </div>

</div>
</header>
    <section>
        <div id="container">
            <form id="search">
            	<div class="row">
            		<div class="small-4 columns">
            			<label>Search</label>
                		<input type="text" id="text_input" placeholder="Trust your instincts…" />

            		</div>
                	<div class="small-4 columns">
                	<p>
                		<label>Choose corpus:</label>
                		<input type="radio" name="corpus" value="avis" checked>Newspapers
                		<input id="button__bok" type="radio" name="corpus" value="bok"> Books
                		</label>
                	</p>
                	<p>
                		<label>Case sensitivity:</label>
                		<input id="button__case" type="radio" name="case_sens" value="0" checked> Aa
                		<input type="radio" name="case_sens" value="1"> A/a

                	</p>
                	</div>
                	<div class="small-4 columns">
                	<label>Generate graph</label>
                		<input type="submit" class="button" id="searh_button" value="Get those N-grams!" />

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
<hr />
<div class="row">
<div class="small-12 medium-6 columns">
	    	<ul><h3>Updates</h3>
	    		<li>Years with no hits are also displayed in the graphs. (23/04/2015)</li>
	        	<li>You can merge ngrams with '+' (e.g. <em>eple+epler</em>) (22/04/2015)</li>
	        	<li>True ngram search now works (e.g. <em>kvinnelig sjåfør</em> or <em>satse på kvalitet</em>) (22/04/2015)</li>
	        	<li>Wildcards, multiple ngram series doesn't work. (22/04/2015)</li>
	        </ul>

	    </div>
<div class="small-12 medium-6 columns">
    <footer>
		<h3>About</h3>
        <p>NB&nbsp;N-gram&nbsp;Alt is developed by <a href="mailto:knut.melvaer@gmail.com">Knut Melvær</a> (<a href="https://twitter.com/kmelve">@kmelve</a>). NB&nbsp;N-gram&nbsp;Alt is a free service for education and research.</p>
        <p>Thanks to Språkbanken @ Nasjonalbiblioteket for all their help!</p>
        <p><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">NB&nbsp;N-gram&nbsp;Alt</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://github.com/kmelve/nbngam" property="cc:attributionName" rel="cc:attributionURL">Knut Melvær</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">CC-BY-NC-4.0</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://github.com/kmelve/nbgraph" rel="dct:source">http://github.com/kmelve/nbngram</a>.</p>
        <p><a href="http://highcharts.com">Highcharts</a> is licensed under <a href="http://creativecommons.org/licenses/by-nc/3.0/">CC-BY-NC-3.0</a>, which means you can use it for free for non-profit and with attribution.</p>
    </footer>
</div>
</div>
</body>

</html>
