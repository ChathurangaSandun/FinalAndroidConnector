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


error_reporting(E_ALL ^ E_DEPRECATED);

/*
$username = "u890863868_clive";
$password = "123456789";
$host = "mysql.hostinger.in";
$database = "u890863868_taxi";*/

/*
$username = "u890863868_root";
$password = "taxilocator";
$host = "mysql.hostinger.in";
$database = "u890863868_sonit";*/

@$server = mysql_connect($host, $username, $password);
@$connection = mysql_select_db($database, $server);