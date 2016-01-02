<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/11/2015
 * Time: 11:58 PM
 */

require_once 'connect.php';



$customerID = $_GET['customerID'];
$date = $_GET['date'];
$time =  date("H:i", time());
$pkx = $_GET['pkx'];
$pky = $_GET['pky'];
$pkAddress = $_GET['pkAddress'];
$dox = $_GET['dox'];
$doy =$_GET['doy'];
$doAddress = $_GET['doAddress'];



$pkx = floatval($pkx);
$pky = floatval($pky);
$dox = floatval($dox);
$doy = floatval($doy);


$customerID = (int)$customerID;







$myquery = "INSERT INTO reservation_table(customer_id, pkx, pky,pk_address, dox, doy,do_address)
VALUES ($customerID,$pkx,$pky,'$pkAddress',$dox,$doy,'$doAddress')";

$query = mysql_query($myquery);



if (!$query) {
    echo mysql_error();
    die;
}else {
    $id = mysql_insert_id();
    echo (string)$id;
    //echo 1;
	//haversine formular
        $myquery = "SELECT vehicle_id, ( 3959 * acos( cos( radians($pkx) ) * cos( radians( latitude ) ) * cos( radians( longtitude ) - radians($pky) ) + sin( radians($pkx) ) * sin( radians( latitude ) ) ) ) AS distance FROM vehicle_table WHERE main_status = 'available'  HAVING distance < 10000000 ORDER BY distance LIMIT 0 , 1";
        $query = mysql_query($myquery);
        //echo 2;

        if (!$query) {
            echo mysql_error();
            die;
        }else {
            $vehicleID = mysql_fetch_assoc($query)['vehicle_id'];

            $myquery = "UPDATE vehicle_table SET reservation_id = $id WHERE vehicle_id = $vehicleID";
            $query = mysql_query($myquery);

            //echo $query;



        }










}

