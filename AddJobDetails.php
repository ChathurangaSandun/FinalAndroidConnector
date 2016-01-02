<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 11/3/2015
 * Time: 3:58 AM
 */

require_once 'connect.php';
require 'functions.php';

$reservationID = $_GET['reservationID'];






$myquery = "SELECT vehicle_id FROM vehicle_table WHERE reservation_id = $reservationID";

$query = mysql_query($myquery);




$data = mysql_fetch_array($query);
//print_r($data);
$vehicleID = $data['vehicle_id'];

$myquery = "UPDATE vehicle_table SET main_status = 'Busy',reservation_id=0  WHERE vehicle_id = $vehicleID";
$query = mysql_query($myquery);

//echo $vehicleID.'<br>';


$myquery ="SELECT customer_id FROM reservation_table WHERE reservation_id= $reservationID";
$query = mysql_query($myquery);

$data = mysql_fetch_array($query);
//print_r($data);
$customerID = $data['customer_id'];

$jobID = getLastID('job_table','job_id');
$jobID++;

$myquery = "INSERT INTO job_table(job_id,customerid, vehicle_id,reservation_id, ride_status,fees)
    VALUES ($jobID,$customerID,$vehicleID,$reservationID,'Start',0)";

$query = mysql_query($myquery);

echo $jobID;






