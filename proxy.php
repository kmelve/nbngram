<?php
//   error_reporting(-1);
//    ini_set('display_errors', 1);
	if(isset($_GET['searchquery']) && !empty($_GET['searchquery'])) {
		header('Content-type: application/json');
		$searchstring = $_GET['searchquery'];


		$json = file_get_contents($searchstring);
		$data = json_decode($json, true);

		$y_axis = array();
		$x_axis = array();
		$z_avis = array();

		foreach($data[0]["values"] as $datapoint) {
				$y_axis[] = $datapoint["y"];
				$x_axis[] = $datapoint["x"];
				$z_axis[] = $datapoint["f"];

		}


		echo json_encode(
			 array("metadata" => array(
							"y_axis" => $y_axis,
							"x_axis" => $x_axis,
							"z_axis" => $z_axis,
							"searchstring" => $searchstring,
							"searchparameters" => $searchparameters
							))
			 );
	} else {
		echo json_encode(
			array("message" => "Didn't work")
		);
}
?>
