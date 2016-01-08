<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$username = "root";
$password = "";
$host = "localhost";
$database = "taxi_system";

/*
error_reporting(E_ALL ^ E_DEPRECATED);

$username = "u890863868_clive";
$password = "0718256773";
$host = "mysql.hostinger.in";
$database = "u890863868_taxi";*/

@$server = mysql_connect($host, $username, $password);
@$connection = mysql_select_db($database, $server);