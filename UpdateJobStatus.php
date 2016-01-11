<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/31/2015
 * Time: 2:19 PM
 */

require_once 'connect.php';

$jobId = $_GET['jobnumber'];
$status = $_GET['ridestatus'];


$jobId = (int)$jobId;




$query = "UPDATE job_table SET ride_status='$status'  WHERE  job_id= $jobId";
echo $query;
$result = mysql_query($query);

if (!$result) {
    echo mysql_error();
    die;
}else{

    echo $result;
    echo "ok";
}



mysql_close($server);