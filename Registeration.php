<html>
<head>
<title>Registeration</title>
<link rel="stylesheet" href="./CSS/Registeration.css">
</head>

<body>
<?php require 'header.php' ?>
<form method="post" class="form"align="center">
    <h1 align="center">Sign Up</h1>

<label class="username">Username</label>
<input type="text" placeholder="Username"></br></br>

<label for="valid email">Valid Email</label>
<input type="email" placeholder="Enter Email"> </br></br>

<label for="password">Password</label>
<input type="password" placeholder="Password"></br></br>

<label for="re enter password">Re-enter password</label>
<input type="password" placeholder="Re-enter password"></br></br>

<input type="button" value="Sign up" class="button"></br></br></br></br>
<p align="center">Already have an account
<a href="www.login.lk">Log-in</a></p>
</form>
<?php require 'footer.php' ?>
</body>

</html>