<?php

    include('./config.php');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobileNumber = $_POST['mobileNumber'];
    $email= $_POST['email'];
    $amount= $_POST['amount'];

    //Database connection
   
        $stmt = $conn->prepare("insert into donorinfo(firstName,lastName,mobileNumber,email,amount)
        values(?,?,?,?,?)");
     $stmt->bind_param("ssisi",$firstName, $lastName, $mobileNumber, $email, $amount);
    $stmt->execute();
    echo "Donor info added successfully..." ;
    $stmt->close();
    $conn->close();

?>