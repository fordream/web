<?php
	include '../connectdb.php';
	header("Content-type:application/json"); 
	querryContentTable('gallery', null);
?>