<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 11/2/2015
 * Time: 4:43 PM
 */

require_once 'connect.php';

$vehicleID =  $_GET['vehicleID'];






$myquery = "SELECT reservation_id FROM vehicle_table WHERE vehicle_id = $vehicleID";

$query = mysql_query($myquery);

if (!$query) {
    echo mysql_error();
    die;
}else{
    $reservationID  = mysql_fetch_assoc($query)['reservation_id'];
    if($reservationID != 0){
       // echo $reservationID;

        $myquery = "SELECT reservation_id, pk_address,do_address FROM reservation_table WHERE reservation_id = $reservationID";
        $query = mysql_query($myquery);
        echo json_encode(mysql_fetch_assoc($query));




    }else{
        echo 0;
    }


}

