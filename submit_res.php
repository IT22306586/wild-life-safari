<?php

require('./config.php');

		$fname = $_POST['fname'];
		$laname = $_POST['lname'];
		$ptype = $_POST['ptype'];
		$nic = $_POST['nic'];
		$email = $_POST['email'];
		$acode = $_POST['acode'];
		$number = $_POST['number'];

$sql = "INSERT INTO reservation(Cus_ID, F_Name, L_Name, Package_Type, NIC, Email, Area_Code, Phone_Number) 
VALUES ('', '$fname', '$laname', '$ptype', '$nic', '$email', '$acode','$number')";

if (mysqli_query($conn, $sql)) {
    $message = "New Reservation Created Successfully";
    header("location:reservation.php?message=". $message);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);