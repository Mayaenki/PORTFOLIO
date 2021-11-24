<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maya Miaghumba</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&display=swap" rel="stylesheet">




</head>

<body>

    <div class="banner">

        <div class="navbar">
            <?php include "menu.php"; ?>
        </div>

    </div>

    <!-- <div class="container">
    <div class="contact-box">
        <div class="left"><img src="images/logo1.png" class="contactlogo"></div>
        <div class="right">
            <h2>Contact Us</h2>
            <input type="text" class="field" placeholder="Your Name">
            <input type="text" class="field" placeholder="Your Email">
            <input type="text" class="field" placeholder="Phone">
            <textarea placeholder="Message" class="field"></textarea>
            <button class="btn">Send</button>
        </div>
    </div>
</div>
    -->

    <!-- <h1>Contactez-nous</h1>
    <div class="separation"></div>
    <div class="corps-formulaire">
        <div class="gauche">
            <div class="groupe"> -->
            <div class="container">
    <div class="contact-box">
        <div class="left"><img src="images/logo1.png" class="contactlogo"></div>
        <div class="right">

            
                <?php
                if (isset($message)) :
                ?>
                    <h3><?= $message ?></h3>
                    <h4>Pour en savoir plus sur les mails</h4>
                    <p><a href="https://www.php.net/manual/fr/function.mail.php" target="_blank">https://www.php.net/manual/fr/function.mail.php</a></p>
                <?php
                endif;
                ?>
                <form action="" name="contact" method="POST" class="field">
                    <input name="thename" placeholder="Votre nom" class="field"required /><br>
                    <input name="themail" placeholder="Votre adresse mail" class="field" required /><br>
                    <textarea name="thetext" placeholder="Votre texte" class="field" required></textarea><br>
                    <input type="submit" value="Envoyer votre message" class="field"/>
                </form>


            </div>
        </div>
    </div>






</body>

</html>