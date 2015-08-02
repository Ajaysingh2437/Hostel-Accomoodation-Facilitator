<?php
 
/*
 * Following code will list all the hostels
 */
 
// array for JSON response
$response = array();
 
$con = mysql_connect("mysql2.000webhost.com","a4243563_admin", "Ajay@2437") or die(mysql_error());
 
        // Selecing database
        $db = mysql_select_db("a4243563_hostel") or die(mysql_error()) or die(mysql_error());
 
// get all hostels from hostels table
$result = mysql_query("SELECT * FROM boys_hostel where regno!='110'") or die(mysql_error());
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
/*
$mysql_host = "mysql2.000webhost.com";
$mysql_database = "a4243563_hostel";
$mysql_user = "a4243563_admin";
$mysql_password = "Ajay@2437";*/