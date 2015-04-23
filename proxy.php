<?php
//   error_reporting(-1);
//    ini_set('display_errors', 1);
	if(isset($_GET['searchquery']) && !empty($_GET['searchquery']))
	{
		header('Content-type: application/json');
		$searchstring = $_GET['searchquery'];
		//$searchstring = "http://www.nb.no/sp_tjenester/beta/ngram_1/ngram/query?terms=spirituell&lang=all&corpus=avis&case_sens=0";
		$ngram = explode("=", explode("&", urldecode($searchstring))[0])[1];
		$corpus = explode("=", explode("&", $searchstring)[2])[1];
		$corpus = ($corpus == "avis") ? "newspapers" : "books";

		$json = file_get_contents($searchstring);
		$data = json_decode($json, true);

		$y_axis = array();
		$x_axis = array();
		$z_axis = array();
		$x_axis1 = array();
		$z_axis1 = array();
		$yearspan = array();


		$startYear = $data[0]["values"][0]["x"];
		$endYear = end($data[0]["values"])["x"];

		foreach(range($startYear, $endYear) as $year) {
			$yearspan[$year] = 0;
		}

		foreach($data[0]["values"] as $datapoint) {
			$y_axis[$datapoint["x"]] = $datapoint["y"];
			$z_axis[$datapoint["x"]] = $datapoint["f"];
		}

		foreach($yearspan as $k=>$v)
		{
			$x_axis1[] = $k;

			if(array_key_exists($k, $y_axis))
			{
				$y_axis1[] = $y_axis[$k];
				$z_axis1[] = $z_axis[$k];
			}
			else
			{
				$y_axis1[] = 0;
				$z_axis1[] = 0;
			}
		}

		echo json_encode(
			array("metadata" => array(
							"y_axis" => $y_axis1,
							"x_axis" => $x_axis1,
							"z_axis" => $z_axis1,
							"ngram" => $ngram,
							"corpus" => $corpus
					))
		);
	}
	else
	{
		echo json_encode(
			array("message" => "Didn't work")
		);
	}
?>
