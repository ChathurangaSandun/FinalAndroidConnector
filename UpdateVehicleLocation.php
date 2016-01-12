<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/19/2015
 * Time: 3:51 AM
 */

require_once 'connect.php';

$id = $_GET['vehicleid'];
$lat = $_GET['lat'];
$lon = $_GET['lon'];

$id = (int)$id;
$lat = floatval($lat);
$lon = floatval($lon);

$query = "UPDATE vehicle_table SET latitude=$lat, longtitude=$lon,main_status = 'available'  WHERE vehicle_id = $id";
$result = mysql_query($query);

if (!$query) {
    echo mysql_error();
    die;
}else{

    echo $result;
    echo "ok";
}



mysql_close($server);
