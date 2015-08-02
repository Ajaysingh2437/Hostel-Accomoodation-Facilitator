<?php
 
/*
 * Following code will update a hostel information
 * A hostel is identified by hostel(regno)
 */
 
// array for JSON response
$response = array();
 
    $regno = $_GET['regno'];
    $name = $_GET['name'];
   // $contact = $_GET['contact'];
    //$roomav = $_GET['roomav'];
    //$rent = $_GET['rent'];
    //$passwd = $_GET['passwd'];
  //  $lat = $_GET['lat'];
//    $lang = $_GET['lang'];

 
    // include db connect class
    require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 //, contact = '$contact', roomav = '$roomav', rent = '$rent', passwd = '$passwd'
//, contact = '$contact', roomav = '$roomav', rent = '$rent', passwd = '$passwd' 
//UPDATE boys_hostel SET name = '$name' WHERE regno = $regno
   // mysql update row with matched regno
    
	$result = mysql_query("UPDATE boys_hostel SET name = '$name' WHERE regno = $regno");
 $res = mysql_query("UPDATE girls_hostel SET name = '$name' WHERE regno = $regno");
    // check if row inserted or not
    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Hostel successfully updated.";
 
        // echoing JSON response
     //   echo json_encode($response);
    } 
    else {
        // successfully updated
        $response["success"] = 0;
        $response["message"] = "not Hostel successfully updated.";
 
        // echoing JSON response
//        echo json_encode($response);
    } 

if ($res) {
        // successfully updated
        $response["success1"] = 1;
        $response["message1"] = "Hostel successfully updated.";
 
        // echoing JSON response
        echo json_encode($response);
    } 
    else {
        // successfully updated
        $response["success1"] = 0;
        $response["message1"] = "not Hostel successfully updated.";
 
        // echoing JSON response
        echo json_encode($response);
    } 

?>