<?php
/**
 * Created by PhpStorm.
 * User: Chathuranga-Pamba
 * Date: 15/11/20
 * Time: 9:55 AM
 */


require 'connect.php';


$reservationID = $_GET['reservationID'];
$myquery = "SELECT *  FROM customer_table,reservation_table WHERE customer_table.customer_id = reservation_table.customer_id and reservation_table.reservation_id = '$reservationID'";

$query = mysql_query($myquery);

if (!$query) {
    echo mysql_error();
    die;
}else{


    $data = mysql_fetch_assoc($query);

    $name = $data['first_name'];


    $telephone =  $data['telephone_number'];


    $pickupLocation = $data['pk_address'];
    $dropOffLocation = $data['do_address'];
    $note =   $data['note'];
    $noOfPassengers =  $data['no_of_passengers'];
    $distance = $data['distance'];


    $details = array(
        'name' => $name,
        'telephone'=> $telephone,
        'pickup' => $pickupLocation,
        'dropOff' =>$dropOffLocation,
        'note' => $note,
        'numOfPassengers' => $noOfPassengers
     );

    echo json_encode($details);



}
mysql_close($server);