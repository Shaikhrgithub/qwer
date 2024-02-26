<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=initial-scale=1.0,maximum-scale=1.0,user-scalable=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submit to send email</title>
</head>
<body>
    <?php
    if(/empty($_POST["send"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $toEmail = "yusufshaikhonly@gmail.com";

        $mailHeaders = "Firstname:" .  $firstname . 

        "\r\n Lastname: " . $lastname .
        "\r\n Phone: " . $phone .
        "\r\n Email: " . $email .
        "\r\n Message: " . $message . "\r\n";

        if(mail($toEmail, $firstname, $mailHeaders)){
            $message = "Your Information is Received Successfully.";

        }
    }


    ?>

<div class="container">
         <h1>Contact Us Now</h1>
         <form name="cform" id="contactForm" method="POST" action="">
            <p>
               <label for="firstname">First Name:</label>
               <input type="text" id="firstname" name="firstname" placeholder="Firstname" required />
            </p>
            <p>
               <label for="lastname">Last Name:</label>
               <input type="text" id="lastname" name="lastname"  placeholder="Lastname" required />
            </p>
            <p>
               <label for="phone">Phone:</label>
               <input type="tel" id="phone" name="phone" placeholder="Phone No" required />
            </p>
            <p>
               <label for="email">Email:</label>
               <input type="email" id="email" name="email" placeholder="Email address" />
            </p>
            <p>
               <label for="message">Message:</label>
               <textarea id="message" name="message" rows="4" cols="50"></textarea>
            </p>
            <input <a href="index.html" type="submit" name="send" value="Book Now" id="bookBtn" />
            <?php if(!empty($message)){ ?>
            <div class="success">
              <strong><?php echo $message; ?></strong>
            </div>
            <?php } ?>
          </a>
         </form>

      </center>
      </div>
      
    
</body>
</html>