<?php
/**
 * Created by PhpStorm.
 * User: chathuranga
 * Date: 1/10/2016
 * Time: 10:32 PM
 */

require_once 'connect.php';
require 'functions.php';

$reservationID = $_GET['reservationid'];
$vehicleID = $_GET['vehicleid'];







$myquery = "UPDATE vehicle_table SET reservation_id = 0,main_status = 'available'  WHERE vehicle_id = $vehicleID";

$query = mysql_query($myquery);

echo $query;
if($query){
    $myquery = "INSERT INTO unassignedjob (reservation_id,vehicle_id,reservation_time) VALUE ($reservationID,$vehicleID,now())";

    $query = mysql_query($myquery);

    if($query){
        echo 'ok';

    }
}else{

    echo 0;
}


mysql_close();