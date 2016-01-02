<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/11/2015
 * Time: 7:52 PM
 */

require 'connect.php';

$myquery = "SELECT vehicle_id,latitude,longtitude,plate_number FROM vehicle_table WHERE main_status='available'";

$query = mysql_query($myquery);

if (!$query) {
    echo mysql_error();
    die;
}
$data = array();

for ($x = 0; $x < mysql_num_rows($query); $x++) {
    $data[] = mysql_fetch_assoc($query);
}

echo json_encode($data);

mysql_close($server);