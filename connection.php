<?php
    $sever_name="localhost";
    $user_name="root";
    $password="";
    $database="wildlife";

    $conn = new mysqli($sever_name,$user_name,$password,$database);

    if($conn -> connect_error){
        die("CONNECTIN ERROR");
    }
   

?>