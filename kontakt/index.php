<?php

$language = "sr";
$name = $email = $phone = $message = "";
$name_message = $email_message = $phone_message = $message_message = $message_result = "";
$name_error = $email_error = $phone_error = $message_error = "";
$bit = 0;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name_error = false;

    if(isset($_POST["name"]))
    {
        $name = $_POST["name"];

        if(empty($name))
        {
            $name_message = "Ime je obavezno";
        }
        else
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
            {
                $name_message = "Samo su slova i  razmaci dozvoljeni";       
            }
            else
            {
                $name_message = "";       
                $name_error = true;
            }
        }
    }

    if(isset($_POST["email"]))
    {
        $email = $_POST["email"];

        if(empty($email))
        {
            $email_message = "Email je obavezan";
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $email_message = "Neispravan email format";       
            }
            else
            {
                $email_message = ""; 
                $email_error = true;
            }
        }
    }

    if(isset($_POST["phone"]))
    {
        $phone = $_POST["phone"];

        if(empty($phone))
        {
            $phone_message = "Telefon je obavezan";
        }
        else
        {
            if(!preg_match("/^\+?\d{1,3}[\s-]?\d{1,3}[\s-]?\d{1,4}[\s-]?\d{1,4}$/", $phone))
            {
                $phone_message = "Neispravan broj telefona";       
            }
            else
            {
                $phone_message = ""; 
                $phone_error = true;
            }
        }
    }

    if(isset($_POST["message"]))
    {
        $message = $_POST["message"];

        if(empty($message))
        {
            $message_message = "Telefon je obavezan";
        }
        else
        {
            if(preg_match("/[\^*}{#~><>|=_+`¬-]/", $message))
            {
                $message_message = "Specijalni karakteri nisu dozvoljeni";       
            }
            else
            {
                $message_message = "";
                $message_error = true;
            }
        }
    }

    if($name_error == true && $email_error == true && $phone_error == true && $message_error == true)
    {
        $message_to_email = <<<DELIMITER

<div style="padding-top: 2rem;">
    <p>$message</p>
</div>
<br>
------------------------------------------
<br>
<div>
    <p>Ime: $name</p>
    <p>Email: $email</p>
    <p>Telefon: $phone</p>
</div>
DELIMITER;
    
        $to = "clubunescobelgrade@sbb.rs";
        $header = "MIME-Version: 1.0"."\r\n";
        $header .= "Content-type:text/html;charset=UTF-8"."\r\n";
        $header .= 'From: <'.$email.'>'."\r\n";
        $header .= 'Replay-To: ' .$name. '<'.$email.'>'."\r\n";
        $send_message = mail($to, "Poruka", $message_to_email, $header);

        if($send_message)
        {
           $bit = 1;
           $message_result = "Poruka je uspešno poslata";
        }
        else
        {
            $message_result = "Jedno ili više polja imaju grešku. Proverite i pokušajte ponovo.";
        }
    }
    else
    {
        $message_result = "Jedno ili više polja imaju grešku. Proverite i pokušajte ponovo.";
    }
}

?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <?php include "../includes/head-elements.php"; ?>
    <title>Kontakt | Klub Unesco Beograd</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <section class="container-main-img-contact">
            <div class="container">
                <div class="wrapper-main-img-contact">
                    <h1>Kontakt</h1>
                </div>
            </div>
        </section>
        <section class="container-contact">
            <div class="container">
                <div class="row" style="justify-content: space-evenly;">
                    <div class="col-xl-5">
                        <div class="contact-information">
                            <h2>Kontakt informacije</h2>
                            <div class="conctact-info-part address-item">
                                <i class="fas fa-home"></i>
                                <p><span>Adresa: </span>Lomina 41, 11000 Beograd</p>
                            </div>
                            <div class="conctact-info-part address-item">
                                <i class="fas fa-fax"></i>
                                <p><span>Telefon: </span><a href="tel:+381113610254">+381 11 3610 254</a></p>
                            </div>
                            <div class="conctact-info-part address-item">
                                <i class="fas fa-phone"></i>
                                <p><span>Fax: </span><a href="tel:+381113610417">+381 011 3610 417</a></p>
                            </div>
                            <div class="conctact-info-part address-item">
                                <i class="fas fa-envelope"></i>
                                <p><span>Email: </span><a href="mailto:unclsr@sbb.rs">unclsr@sbb.rs</a></p>
                            </div>
                            <div class="conctact-info-part address-item">
                                <i class="fas fa-user-tie"></i>
                                <p><span>Predsednik: </span>Gđa Milica Dromnjakovic, prof.</p>
                            </div>
                            <div class="conctact-info-part address-item">
                                <i class="fas fa-user"></i>
                                <p><span>Generalni sekretar: </span>Gđa Divna Držajić</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <form class="contact-form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <h2>Pošaljite nam poruku</h2>
                            <div class="form-item">
                                <div class="form-subitem">
                                    <label for="name">Ime <span>*</span></label>
                                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                                </div>
                                <span><?php echo $name_message; ?></span>
                            </div>
                            <div class="form-item">
                                <div class="form-subitem">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                                </div>
                                <span><?php echo $email_message; ?></span>
                            </div>
                            <div class="form-item">
                                <div class="form-subitem">
                                    <label for="phone">Telefon <span>*</span></label>
                                    <input type="phone" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                                </div>
                                <span><?php echo $phone_message; ?></span>
                            </div>
                            <div class="form-item">
                                <div class="form-subitem">
                                    <label for="message">Poruka <span>*</span></label>
                                    <textarea type="text" id="message" name="message" required><?php echo $message; ?></textarea>
                                </div>
                                <span><?php echo $message_message; ?></span>
                            </div>
                            <div class="wrapper-send-message">
                                <input type="submit" value="Pošalji">
                            </div>
                            <div class="wrapper-send-message-info">
                                <p style="color:<?php if($bit == 1){ echo "green"; }else{ echo "red"; } ?>;"><?php echo $message_result; ?></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5661.009692296121!2d20.458409891076787!3d44.81127880689533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aac1881f079%3A0xd1092f971a858c06!2z0JvQvtC80LjQvdCwIDQxLCDQkdC10L7Qs9GA0LDQtA!5e0!3m2!1ssr!2srs!4v1661102507254!5m2!1ssr!2srs" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <?php include "../includes/footer.php"; ?>
</body>
</html>