<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/31/2015
 * Time: 1:21 AM
 */

function getLastID($table,$column){

    $mysql = "SELECT $column FROM $table ORDER BY $column DESC LIMIT 1";

    //echo "\n".$mysql;
    $query = mysql_query($mysql);



    $id = mysql_fetch_assoc($query)[$column];
    //echo '<br>'. $id.'<br>';

    return $id;


}