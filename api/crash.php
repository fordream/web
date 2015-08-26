<?php
	$appname = htmlspecialchars($_POST["appname"]);
    $time = htmlspecialchars($_POST["time"]);
	$log = htmlspecialchars($_POST["log"]);
    
    //add new data
    $devicename  = htmlspecialchars($_POST["devicename"]);
    $androidversion = htmlspecialchars($_POST["androidversion"]);
	$versionapp= htmlspecialchars($_POST["versionapp"]);
	$apppackage= htmlspecialchars($_POST["apppackage"]);

	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");		
	
	$resultStr = "{'status':'0'}";
	// Create connection
	
	// Check connection
	if (mysqli_connect_errno()) {
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
		$m = "INSERT INTO `crash`(`appname`, `time`,`log`,`devicename`,`androidversion`,`versionapp`,`apppackage`)VALUES ('".$appname ."','" . $time."','".$log."','".$devicename."','".$androidversion."','".$versionapp."','".$apppackage. "')";
	
		$result = mysqli_query($con,$m);
                if($result){
                    $resultStr = "{'status':'1'}";
                }
	}

	mysqli_close($con);
	echo $resultStr;
?>