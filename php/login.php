
<?php
 
/*
 * Following code will GET single product details
 * A product is identified by product id (regno)
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// check for GET data
if (isset($_GET["regno"])&&isset($_GET["passwd"])) {
    $regno = $_GET['regno'];
	$passwd1 = $_GET['passwd'];
	
 
    // GET a product from products table
    $result = mysql_query("SELECT passwd FROM girls_hostel WHERE regno = $regno UNION SELECT passwd FROM boys_hostel WHERE regno = $regno");
 
    //if (!empty($result)) {
 if (mysql_num_rows($result) > 0) {
            $result = mysql_fetch_array($result);
            $passwd = $result["passwd"];
            // success
		if ($passwd==$passwd1)
		{
            	$response["success"] = 1;
 		$response["message"] = "Login Sucessful";
            	// user node
            	//$response["product"] = $passwd;
            	// echoing JSON response
            	echo json_encode($response);
		
        	}
		else
		{
            	$response["success"] = 0;
 		$response["message"] = "Login Unsucessful";
		echo json_encode($response);
		}
} 
	else {
            // no product found
            $response["success"] = 0;
            $response["message"] = "No registration found";
 
            // echo no users JSON
            echo json_encode($response);
        	}
    } 
 else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>