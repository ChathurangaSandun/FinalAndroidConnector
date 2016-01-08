<?php
/**
 * Created by PhpStorm.
 * User: pamba
 * Date: 10/13/2015
 * Time: 11:59 AM
 */


require_once 'connect.php';








$reservationID =    8;// $_GET['reservationID'];






$myquery = "SELECT job_id,vehicle_id FROM job_table WHERE reservation_id = $reservationID";

$query = mysql_query($myquery);



if (!$query) {
    echo mysql_error();
    die;
}else{
    $data = mysql_fetch_array($query);
    //print_r($data);
    $vehicleID = $data['vehicle_id'];
    $jobId = $data['job_id'];

    if(mysql_num_rows($query)>0){
        $vehicleQuery = "SELECT plate_number,latitude,longtitude FROM vehicle_table WHERE vehicle_id=$vehicleID";
        $vehicleResult = mysql_query($vehicleQuery);


        if (!$vehicleResult) {
            echo mysql_error();
            die;
        }else{
            $data1 = mysql_fetch_array($vehicleResult);

            $driverdetailquery = "SELECT d.driver_id,d.first_name,d.last_name,d.telephone_number
                            FROM shedule_table s,driver_table d WHERE s.vehicle_id = $vehicleID";

            $driverDetail = mysql_query($driverdetailquery);

            if (!$driverDetail) {
                echo mysql_error();
                die;
            }else{
                $data2  = mysql_fetch_array($driverDetail);


                $a = array(
                    "job_id"=>$jobId,
                    "plate_number" =>$data1["plate_number"],
                    "latitude"=>$data1["latitude"],
                    "longtitude"=>$data1["longtitude"],
                    "first_name"=>$data2["first_name"],
                    "last_name"=>$data2["last_name"],
                    "telephone_number"=>$data2["telephone_number"]

                );



            }








            echo json_encode($a);
        }

    }else{
        echo '0';
    }




}

mysql_close($server);







