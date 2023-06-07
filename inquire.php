<!DOCTYPE html>
<html>
<head>

 <meta charset="UTF-8">
 <title>INQUIRE | WILD-LIFE SAFARI</title>
 <link rel="stylesheet" type="text/css" href="../wild-life-safari/CSS/Inquire.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Libre+Baskerville:wght@700&display=swap">

 <style>

  body{
    background-image: url("../wild-life-safari/IMG/bg6.jpg");
    background-size: cover;
    
  }

</style>
</head>

<body>

<?php require 'header.php'?>

<div class="topic">
INQUIRY FORM
</div>

<div class="cont">
  	<form>
	  	<h3>Unite with Us</h3>

		<input type="text" id="name" placeholder="Your Name" required>

		<input type="email" id="email" placeholder="Email" required>

		<input type="text" id="phone" placeholder="Phone Number" required>

		<input type="text" id="subject" placeholder="Subject" required>

		<textarea id="message" rows="4" placeholder="Your Massage"></textarea>

		<button type="submit">Send</button>
	</form>
</div>

<?php require 'footer.php'?>

</body>
</html> 
