
<?php
 
/*
 * Following code will get single hostel details
 * A hostel is identified by hostel id (regno)
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// check for post data
    $regno = $_GET['regno'];
 
    // get a hostel from hostels table
    $result = mysql_query("SELECT *FROM girls_hostel WHERE regno=$regno UNION SELECT *FROM boys_hostel WHERE regno=$regno");
 
            $result = mysql_fetch_array($result);
            $response["regno"] = $result["regno"];
            $response["name"] = $result["name"];
            $response["contact"] = $result["contact"];
            $response["roomav"] = $result["roomav"];
            $response["rent"] = $result["rent"];
            $response["passwd"] = $result["passwd"];
		$response["lat"] = $result["lat"];
	    $response["lang"] = $result["lang"];
            echo json_encode($response);
     
?>