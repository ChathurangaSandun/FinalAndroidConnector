<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_GET["regId"]) && isset($_GET["pickup"]) && isset($_GET['dropoff'])) {
    $regId = $_GET["regId"];
    $pickup = $_GET["pickup"];
    $dropoff = $_GET['dropoff'];
    
    include_once './GCM.php';
    
    $gcm = new GCM();

    $registatoin_ids = array($regId);
    $message = array("pickup" => $pickup,"dropoff"=>$dropoff);

    $result = $gcm->send_notification($registatoin_ids, $message);

    echo $result;
}
?>
