<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Keegan Lenz's Personal Portfolio Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="page-wrapper">
        <nav class="col-5">
            <a onclick="window.location.href='index.html'">Home</a>
            <a onclick="window.location.href='about.html'">About</a>
            <a onclick="window.location.href='portfolio.html'">Portfolio</a>
            <a onclick="window.location.href='documents/keegan-lenz-resume.pdf'">Resume</a>
            <a class="current-page">Contact</a>
        </nav>
        <div class="container">
            <form method="post" action="contact.php">
              <label for="fname">First Name:</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name:</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          
              <label for="email">Email Adress:</label>
              <input id="email" name="email" placeholder="Your email adress..">
          
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
          
              <input id="submit" name="submit" type="submit" value="Submit">
            </form>
          </div>
    </div>

    <?php

        require_once('Mailer/PHPMailerAutoload.php');

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'websitemailer0001@gmail.com';
        $mail->Password = 'Kl150072218';
        $mail->SetFrom('websitemailer0001@gmail.com');
        $mail->Subject = 'Hello';
        $mail->Body = "From: $fame, $lname\n E-Mail: $email\n Message:\n $message";
        $mail->AddAddress('Keegan.lenz@student.cart.org');


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        

        if ($_POST['submit']) {
            $mail->Send();
            echo '<p class="confirmation">Your message has been sent!</p>';
        }

    ?>
    
</body>
</html>