<?php 
    $conn = $conn = new mysqli('localhost', 'root', '', 'sleep_login');

    if($conn->connect_errno){
        die("Connection failed" . $conn->connect_error);
    }


?>