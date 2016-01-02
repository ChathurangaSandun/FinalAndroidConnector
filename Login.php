<?php

require 'connect.php';


$username = $_GET['username'];
$password = $_GET['password'];





$myquery = "SELECT user_table.user_id,user_table.user_name,user_table.user_type,customer_table.customer_id
from user_table INNER JOIN customer_table
ON user_table.user_id = customer_table.user_id
WHERE user_table.user_name='$username' and user_table.password='$password'";

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




