
<html>
<head>
<title>Registeration</title>
<link rel="stylesheet" href="./CSS/Registeration.css">
</head>

<body>
<?php require 'header.php' ?>
<form action="./Submit_register.php"method="post" class="form" align="center">
    <h1>Sign Up</h1><br><br>

<label class="username">Username</label>
<input type="text" name="username" placeholder="Username" required></br></br>

<label for="valid email">Valid Email</label>
<input type="email" name="email" placeholder="Enter Email" required> </br></br>

<label for="password">Password</label>
<input type="password" name="password"placeholder="Password" required></br></br>

<label for="re enter password">Re-enter password</label>
<input type="password" name="repassword"placeholder="Re-enter password" required></br></br>

<button type="submit" name="submit" value="Send Data" class="button">Sign Up</button></br></br></br></br>
<p align="center">Already have an account
<a href="./Login.php">Log-in</a></p>
</form>
<?php require 'footer.php' ?>
</body>

</html>