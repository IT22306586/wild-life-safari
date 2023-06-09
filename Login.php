<!DOCTYPE html>
<html>
<head>
  <title>Wildlife Sri Lanka</title>

  <link rel="stylesheet"  href="./CSS/login.css">

  
</head>


<body>
<?php require 'header.php' ?>

  <div class="Login"><br><br>
    <h1>Login Here!</h1><br>
    <div class="form">
      <form class="form" method="POST" action="../submitlogin.php">
        <label for="username">Username</label><br><br>
        <input type="text" name="username" placeholder="Enter Username" required><br><br>
        <label for="password">Password</label><br><br>
        <div class="password-container">
          <input type="password" name="password" id="password" placeholder="Enter Password" required><br>
          <span class="show-password" onclick="togglePasswordVisibility()"></span>
        </div><br>
        <center>
          <button type="submit">Login</button>
        </center><br><br><br>
        <a href="./Registeration.php" style="color:#FFFFFF" text-decoration="none">Register</a><br><br>
        
      </form>
    </div>
  </div>
  <script src="login.js"></script>




  <?php require 'footer.php' ?>

</body>
</html>