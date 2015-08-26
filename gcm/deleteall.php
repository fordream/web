<?php
if (isset($_GET["key"]) && $_GET["key"] =="0904785786") {
    include_once './db_functions.php';
    $db = new DB_Functions();
    $res = $db->deleteAllUsers();
    echo "delete all";
}else{
	echo "error";
}
?>