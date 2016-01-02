<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/31/2015
 * Time: 12:45 AM
 */

require 'connect.php';
require 'functions.php';

$firstname =$_GET['firstname'];
$lastname = $_GET['lastname'];
$telephone = $_GET['telephone'];
$username =  $_GET['username'];
$password =  $_GET['password'];

$telephone = (int)$telephone;




$userid = getLastID('user_table','user_id');

$userid += 1;


$myquery = "INSERT  INTO user_table(user_id, user_name, password, privilege_number, user_type)
VALUES ($userid,'$username','$password','5','passenger')";



$query = mysql_query($myquery);

if (!$query) {
    echo mysql_error();
    die;
}else{

    $customerID = getLastID("customer_table","customer_id");
    $customerID++;

    $myquery = "INSERT  INTO customer_table(customer_id, user_id, first_name, last_name, telephone_number) VALUES ($customerID,$userid,'$firstname','$lastname',$telephone)";

    //echo $myquery;
    $query = mysql_query($myquery);


    if (!$query) {
        echo mysql_error();
        die;
    }else {
        echo 1;


    }




}











mysql_close($server);