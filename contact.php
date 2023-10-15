<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

   require 'admin/vendor/autoload.php'; // Include PHPMailer autoloader


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $message = $_POST['message'];

      $mail = new PHPMailer(true);

      try {
         // Server settings
         $mail->SMTPDebug = SMTP::DEBUG_OFF; // Set to SMTP::DEBUG_SERVER for debugging
         $mail->isSMTP();
         $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
         $mail->SMTPAuth = true;
         $mail->Username = 'batasisolomon029@gmail.com';
         $mail->Password = 'iqadspewtkfcburm';
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // You can also use PHPMailer::ENCRYPTION_SMTPS for SSL
         $mail->Port = 587; // Use 465 for SSL

         // Recipients
         $mail->setFrom($email, $name);
         $mail->addAddress('batasisolomon029@gmail.com');

         // Content
         $mail->isHTML(false);
         $mail->Subject = 'Contact Form Submission';
         $mail->Body = "Name: $name\nNumber: $number\nEmail: $email\nMessage: $message";

         $mail->send();
         // You can redirect to a thank-you page or show a success message.
         $success_msg[] = 'message sent successfully!'; 
         

         
      } catch (Exception $e) {
         $warning_msg[] = 'Oops! Something went wrong!';

      }
      
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
      
   <?php include 'components/user_header.php'; ?>

   <section class="contact">

      <div class="row">
         <div class="image">
         <p style="font-size:1.6rem;">
            Thank you for bumping In.
            I'm always open for discussions, leave me a message or visit social media. <b>Feel free to PING me</b>
         </p>

            <img src="images/contact-img.svg" alt="">

         </div>
         <form action="" method="post">
            <h3>get in touch</h3>
            <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
            <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
            <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
            <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
            <div style=" text-align:center;">
               <input type="submit" value="send message" name="send" class="inline-btn">
            </div>
         </form>
      </div>

   </section>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <?php include 'components/message.php'; ?>

</body>
</html>