<?php
// response json
$json = array();
 
/**
 * Registering a user device
 * Store reg id in users table
 */
if (isset($_GET["name"]) && isset($_GET["regId"])) {
    $name = $_GET["name"];
    //$email = $_GET["email"];
    $gcm_regid = $_GET["regId"]; // GCM Registration ID
    // Store user details in db
    include_once './db_functions.php';
    include_once './GCM.php';
 
    $db = new DB_Functions();
    $gcm = new GCM();
 
    $res = $db->storeUser2($name,$gcm_regid);
 
    //$registatoin_ids = array($gcm_regid);
    //$message = array("product" => "shirt");
 
    //$result = $gcm->send_notification($registatoin_ids, $message);
 
    echo "200";
} else if (isset($_POST["name"]) && isset($_POST["regId"])) {
    $name = $_POST["name"];
    $gcm_regid = $_POST["regId"]; // GCM Registration ID
    // Store user details in db
    include_once './db_functions.php';
    include_once './GCM.php';
 
    $db = new DB_Functions();
    $gcm = new GCM();
 
    $res = $db->storeUser2($name,$gcm_regid);
 
    //$registatoin_ids = array($gcm_regid);
    //$message = array("product" => "shirt");
 
    //$result = $gcm->send_notification($registatoin_ids, $message);
 
    //echo $result;
	echo "200";
}else{
	echo "401";
}
?>