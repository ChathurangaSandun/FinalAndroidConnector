<?php
/**
 * Created by PhpStorm.
 * User: chathuranga
 * Date: 1/11/2016
 * Time: 3:24 PM
 */

require 'connect.php';


$driverId =$_GET['driverid'];







$myquery = "SELECT vehicle_id FROM shedule_table WHERE driver_id = $driverId";

$query = @mysql_query($myquery);

if (!$query) {
    echo mysql_error();
    die;
}else{



   $row = mysql_fetch_array($query, MYSQL_ASSOC);

    if(sizeof($row) == 1){
        echo $row["vehicle_id"];
    }else{
        echo 0;
    }



}




mysql_close($server);