<!doctype html>
<html>
<head>
    <title> WILD-LIFE SAFARI</title>
    <link rel="stylesheet" href="./CSS/Donation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Libre+Baskerville:wght@700&display=swap">

</head>

 <body>

 <?php require 'header.php'?>

    <div class="main">
       DONATE
    </div>
    
    <div class ="img-main">
    <img src="./IMG/don1.jpg" style="width: 1500px; height: 450px;">
    </div>

    <div class ="para" >   
  
     <br/>Support us with your donation !<br> Without you, Our work would be impossible. Your contribution helps to ensure a better life for animals all around the globe. Every donation counts and together, we can change animals lives. 
      Thank you!</p><br><br><br>
    </div>
  
    <div class="Div1">
  <form method="post" action="/action_page.php">
   
    <p>Donate-Information</p>
         <label for="fname" >First name:</label><br>
         <input type="text" placeholder="First name" id="fname" name="fname" value=""><br>

         <label for="lname">Last name:</label><br>
         <input type="text" placeholder="Last name" id="lname" name="lname" value=""><br>

         <label for="Mnum">Mobile Number:</label><br>
         <input type="tel" placeholder="Mobile number" id="Mnum" name="Mnum" value=""><br>

         <label for="emails">E-mail:</label><br>
         <input type="email" placeholder="E-mal" id="emails" name="emails" multiple><br>

         <label for="amount">Amount:</label><br>
         <input type="amount" placeholder="Amount/=" id="amount" name="amount" multiple><br>

         <button type="submit">DONATE</button>

         </form>
    </div>

    <div class="payment">
      <form> 
          <p>Payment-Information</p>

          <label for="Card Number" >Card Number:</label><br>
          <input type="text" placeholder="0000 0000 0000 0000" id="Card Number" name="Card Number" value=""><br>

          <label for="Card Holder" >Card Holder:</label><br>
          <input type="text" placeholder="John Snow" id="Card Holder" name="Card Holder" value="">&nbsp&nbsp <br> 
          
          <label for="Expire" >Expire:</label><br>
          <input type="text" placeholder="MM/YY" id="Expire" name="Expire" value="">         

    

   
            <br><br><input type="checkbox" name="set" value="set">Save this Card<br><br>
            
            <button type="submit" class="pay now">Pay now</button>
            <button type="submit" class="cancel">Cancel</button>&nbsp &nbsp &nbsp &nbsp <br><br>
            <img src="Visa.jpg">
            <img src="MC.jpg">
            <img src="CI.jpg">
            <img src="AE..jpg">
                    
              
            </form>
    </div>


    <?php require 'footer.php'?>
 </body>
</html>
