<?php
@unlink("texto.txt");
file_put_contents('texto.txt', file_get_contents("https://s3.eu-central-1.amazonaws.com/edi-customer-integration/Resellers/Pricelists/Blue/blue_euro_tab.txt"));


/*function mandarEmailFinal($variable)
{
    //echo "el cvs es " . $cvs;
    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');

    include 'vendor2/autoload.php';
    include 'vendor2/phpmailer/phpmailer/src/PHPMailer.php';
    include 'vendor2/phpmailer/phpmailer/src/POP3.php';
    include 'vendor2/phpmailer/phpmailer/src/SMTP.php';
    include 'vendor2/phpmailer/phpmailer/src/OAuth.php';
    include 'vendor2/phpmailer/phpmailer/src/Exception.php';

    echo "aqui llego";
    $mail = new PHPMailer;
    echo "aqui llego";
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "proyectotaxacochettsales@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "ttsales1989";
    //Set who the message is to be sent from
    $mail->setFrom('proyectotaxacochettsales@gmail.com', 'Notificacion, añadido '.$variable);
    //Set an alternative reply-to address
    //$mail->addReplyTo('replyto@example.com', 'First Last');
    //Set who the message is to be sent to  juan.gonzalez@madrid-electronica.com
    $mail->addAddress('juan.gonzalez@madrid-electronica.com', 'John Doe');
    $mail->addAddress('tomas.gonzalez@infogonzalez.com', 'John Doe');
    $mail->addAddress('sarauzo@tictopsales.com', 'John Doe');
  //  $mail->addAddress('ecommerce@desguacesvelazquez.com', 'John Doe');
    //		$mail->addAddress('proyectotaxacochettsales@gmail.com', 'John Doe');
    //$mail->addAddress('tgonzalez@tictopsales.com', 'John Doe');
    //Set the subject line

    $mail->Subject = 'Añadido el producto ' . $variable;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    //Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
   // $mail->Body = $mensaje;
    //Attach an image file
  //  echo "El directorio es: " . $cvs;
  //  $mail->addAttachment($cvs);
    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
}*/
