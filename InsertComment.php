<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/31/2015
 * Time: 2:13 AM
 */

require 'connect.php';
require 'functions.php';

$customerId = $_GET['customer_id'];
$subject =  $_GET['subject'];
$comment =  $_GET['comment'];

$customerId = (int) $customerId;


$feedbackId = getLastID("feedback_table","feedback_id");

$feedbackId++;


$myquery = "INSERT INTO feedback_table(feedback_id,customer_id, subject_name, comment)
    VALUES ($feedbackId,$customerId,'$subject','$comment')";

echo $myquery;

$query = mysql_query($myquery);

if (!$query) {
    echo mysql_error();
    die;
}else{
    echo 1;
}