
<?php
if (isset($_GET["regId"]) && isset($_GET["message"])) {
    $regId = $_GET["regId"];
    $message1 = $_GET["message"];
    $name =   $_GET["doctor"];
    $messageForSend = sprintf('{"message":"%s","name":"%s","time":"%s"}'
        , $message1
        ,$name
        ,gmdate('Y-m-d', time()));
    //gmdate('Y-m-d h:i:s \G\M\T', time())
    include_once './GCM.php';
     
    $gcm = new GCM();
	$id = "0";
    $registatoin_ids = array($regId);
   // $message = array( "id" => $id,"message" => $message1 );
    $message = array( "id" => $id,"message" => base64_encode($messageForSend) );
    $result = $gcm->send_notification($registatoin_ids, $message);
 
    echo $result;
}
?>