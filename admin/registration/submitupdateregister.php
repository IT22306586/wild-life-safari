<?php
require('../adminconfig.php');
?>

<?php
if ($_GET['submit']) {
    $UserId = $_GET['UserId'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $query = "UPDATE register SET
                        Username = '$username',
                        Email = '$email',
                        Password = '$password',
                        ReEnter_Password = '$repassword',
                        WHERE UserId = '$UserId ' ";

    $data = mysqli_query($conn, $query);

    if ($data) {
        $message = "Record Updated Successfully";
        header("location:./registerdetails.php?message=".$message);
    } else {
        echo "<script>alert('Error in Update')</script>";
    }
}

mysqli_close($conn);

?>