<?php 

include "dbconfig.php";

    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    $sql = "SELECT * from tblLike WHERE IPAddress='$ip_address'";

    if ($result = mysqli_query($conn, $sql)) {

    $rowcount = mysqli_num_rows( $result );
    
    printf("Total rows in this table :  %d\n", $rowcount);
 }

?>