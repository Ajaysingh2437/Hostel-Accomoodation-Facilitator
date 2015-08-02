<?php
 
/*
 * Following code will get single product details
 * A product is identified by product id (pid)
 */
 
// array for JSON response
$response = array(); 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 

 $regno = $_GET['regno'];

    // get a product from products table
    $result = mysql_query("SELECT * FROM login WHERE regno = $regno");
 
    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {
 
            		$result = mysql_fetch_array($result);
			$passwd1=$row['passwd'];
			if($passwd1==$passwd)
			{
            		// success
            		$response["success"] = 1;
			}
 			$response["message"] = "Login Successful";
            		// echoing JSON response
            		echo json_encode($response);
		}
}

?>