<?php
   $searchstring = "eple";
   error_reporting(-1);
//    ini_set('display_errors', 1);
    if(isset($_GET['searchstring']) && !empty($_GET['searchstring'])) {
        header('Content-type: application/json');
        $searchstring = $_GET['searchstring'];


        //terms=eple&lang=all&case_sens=0
        $searchbaseurl = "http://www.nb.no/sp_tjenester/beta/ngram_1/ngram/query?terms=";
        $searchparameters = "&lang=all&case_sens=0&corpus=bok";
        $url = $searchbaseurl.urlencode($searchstring).$searchparameters;
        $json = file_get_contents($url);
        //echo json_encode(json_decode($json));
        $data = json_decode($json, true);
       //var_dump($data);
       //echo json_encode($data);

       $y_axis = array();
       $x_axis = array();
       $z_avis = array();

       //var_dump($data[0]["values"]);

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
