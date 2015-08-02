<?php
 
/*
 * Following code will list all the hostels
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// get all hostels from hostels table
$result = mysql_query("SELECT * FROM girls_hostel where regno!='104'") or die(mysql_error());
    $response["hostels"] = array();
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $hostel= array();
        $hostel["regno"] = $row["regno"];
	$hostel["name"] = $row["name"];
        // push single hostelinto final response array
        array_push($response["hostels"], $hostel);
    }
     echo json_encode($response);
?>