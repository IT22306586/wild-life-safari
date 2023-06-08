<?php

	include './config.php';

?>
<?php

	if(isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$laname = $_POST['lname'];
		$ptype = $_POST['ptype'];
		$nic = $_POST['nic'];
		$email = $_POST['email'];
		$acode = $_POST['acode'];
		$number = $_POST['number'];


$sql = "INSERT INTO reservation(F_Name, L_Name, Package_Type, NIC, Email, Area_Code, Phone_Number) VALUES(?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if(! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssi", $fname, $laname, $ptype, $nic, $email, $acode, $number);

mysqli_stmt_execute($stmt);

}
?>
