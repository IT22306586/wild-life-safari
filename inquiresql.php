<?php
include 'config.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['msg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $stmt = $conn->prepare("INSERT INTO inquire (`name`, `email`, `phone`, `subject`, `msg`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("ssiss", $name, $email, $phone, $subject, $msg);

    if ($stmt->execute()) {
        echo '<script>alert("Thank you for getting in touch!\n\nWe appreciate you contacting us. We will get back in touch with you soon!\n\nHave a great day!"); window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert(""); window.location.href = "Contact us.php";</script>';
    }

    $stmt->close();
}
?>