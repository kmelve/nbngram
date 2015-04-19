<?php
//    $searchstring = "eple";
//    error_reporting(-1);
//    ini_set('display_errors', 1);
//    if(isset($_GET['searchstring']) && !empty($_GET['searchstring'])) {
        header('Content-type: application/json');
        $searchstring = $_GET['searchstring'];


        //terms=eple&lang=all&case_sens=0
        $searchbaseurl = "http://www.nb.no/sp_tjenester/beta/ngram_1/ngram/query?terms=";
        $searchparameters = "&lang=all&case_sens=0&corpus=bok";
        $url = $searchbaseurl.$searchstring.$searchparameters;
        $json = file_get_contents($url);
        echo json_encode(json_decode($json));        
        
//        $data = json_decode($json);
//        $data = (array) $data;
//
//
//        echo json_encode(
//            array("metadata" => array(
//                             "yearlabels" => $json_labels,
//                             "yearcount" => $json_data,
//                             "seachstring" => $searchstring,
//                             "searchparameters" => $searchparameters
//                             ))
//             );
//    } else {
//        echo json_encode(
// 		    array("message" => "Didn't work")
// 		);
//}
?>