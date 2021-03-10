<?php
/**
 * This example shows how to handle a simple contact form.
 */

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['myName'])) {
    /* Since the form has been submitted, let's capture the submission values so we can display them to the user on the success page */
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myRole = $_POST['myRole'];
    $myComment = $_POST['myComment'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.annkuan.webhostingforstudents.com';
    $mail->Port = 587;
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username = "phpmailer@annkuan.webhostingforstudents.com";
    $mail->Password = "TheFirstDay1!";
    
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@annkuan.webhostingforstudents.com', 'Ann Kuan');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('phpmailer@annkuan.webhostingforstudents.com', 'Ann Kuan');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($myEmail, $myName);
        $mail->Subject = 'CAS222 Ace Events contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
    $mail->Body = <<<EOT
Email: $myEmail <br>
Name: $myName <br>
Role: $myRole <br>
Message: $myComment
EOT;
    
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            echo "Mailer Error " .  $mail->ErrorInfo;
        } else {
            include 'success.html.php';
        }
    } else {
        include 'contact.html.php';
}
?>
