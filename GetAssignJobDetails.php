<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 11/2/2015
 * Time: 6:05 PM
 */


require_once 'connect.php';








$reservationID =46;// $_GET['reservationID'];






$myquery = "SELECT job_id,vehicle_id FROM job_table WHERE reservation_id = $reservationID";

$query = mysql_query($myquery);



if (!$query) {
    echo mysql_error();
    die;
}