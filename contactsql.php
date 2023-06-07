<?php
    include 'config.php';

    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']) ){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'] ;

     
     
        $stmt = $conn->prepare("INSERT INTO contactus (`name`, `email`, `msg`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $msg);

       
       
       
        if ($stmt->execute()) {
            echo '<script>alert("Thank you for getting in touch!\n\nWe appreciate you contacting us. We will get back in touch with you soon!\n\nHave a great day!"); window.location.href = "Contact us.php";</script>'; } else {
            echo  '<script>alert("");  window.location.href = "Contact us.php ";</script>';
        }

        $stmt->close();
    }
?>