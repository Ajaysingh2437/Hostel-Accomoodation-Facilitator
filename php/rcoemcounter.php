<?php
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
    	$result1 = mysql_query("SELECT roomav FROM girls_hostel WHERE regno ='104'");
	$result2 = mysql_query("SELECT roomav FROM boys_hostel WHERE regno ='110'");
 
        $result1 = mysql_fetch_array($result1);
	$result2 = mysql_fetch_array($result2);
            $response["roomav_girls_hostel"] = $result1["roomav"];
	    $response["roomav_boys_hostel"] = $result2["roomav"];
            // echoing JSON response
            echo json_encode($response);
	    //echo json_encode($response);

?>