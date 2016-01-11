<?php
/**
 * Created by PhpStorm.
 * User: chathuranga
 * Date: 1/11/2016
 * Time: 3:24 PM
 */

require 'connect.php';


$driverId = 2;//$_GET['driverid'];






$myquery = "SELECT vehicle_id FROM shedule_table WHERE driver_id = $driverId";

$query = @mysql_query($myquery);

if (!$query) {
    echo mysql_error();
    die;
}

$data = array();

for ($x = 0; $x < mysql_num_rows($query); $x++) {
    $data[] = mysql_fetch_assoc($query);
}
if(arr){

}



mysql_close($server);