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
            <a onclick="window.location.href='resume.html'">Resume</a>
            <a class="current-page">Contact</a>
        </nav>
        <header class="contact-header">
            <h1>Contact</h1>
        </header>
        <h2 class="get-in-touch-header">How To Get In Touch With Me</h2>
        <p class="get-in-touch">If you want to get in touch with me, feel free to send an email to <a class="email-link"><u>keegan.lenz@student.cart.org</u></a></p>
        <br>
        <h2 class="social-medias">Follow My Social Medias</h2>
        <a class="LinkedIn" href="https://www.linkedin.com/in/keegan-lenz-0569441a2">
            <img class="logo1" src="images/LinkedIn.png" alt="LinkedInLogo">
        </a>

        <a class="Github" href="https://github.com/keeganlenz001">
            <img class="logo2" src="images/Github.png" alt="GithubLogo">
        </a>

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

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];


        require_once('Mailer/PHPMailerAutoload.php');

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '587';
        $mail->isHTML(true);
        $mail->Username = 'websitemailer0001@gmail.com';
        $mail->Password = 'Kl150072218';
        $mail->SetFrom('websitemailer0001@gmail.com');
        $mail->Subject = 'PHP Mailer Subject';
        $mail->Body = "Email: $email \n From: $fname $lname \n Message: $message";
        $mail->AddAddress('Keegan.lenz@student.cart.org');        

        if ($_POST['submit']) {
            $mail->send();
            if (!$mail->send()) {
            echo "<p class='confirmation'>Message could not be sent!<p>";
            } else {
                echo "<p class='confirmation'>Message has been sent!<p>";
            }
        }        

    ?>
    
</body>
</html>