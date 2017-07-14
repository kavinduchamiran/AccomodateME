<?php require_once('./config.php');

//assume boarding price variable is boardingPrice

if(isset($_POST['boardingPrice'])){
    $boardingPrice = $_POST['boardingPrice'];
}else{
     header('boarding.php');
}

?>



<form action="pay.php" method="post">

  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a year"
          data-amount="<?php echo $_POST['boardingPrice']*100; ?>"
          data-locale="auto"></script>
    <input type='hidden' name='price' value='<?php echo $boardingPrice;?>'/>
</form>


<?php


if(isset($_POST['stripeToken'])) {
    $token = $_POST['stripeToken'];

    $customer = \Stripe\Customer::create(array(
        'email' => 'dummy@email.com', //need to pass the boarding owner's email address here from the database
        'source' => $token
    ));

    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount' => $_POST['price']*100,
        'currency' => 'usd'
    ));

    echo '<h1>Successfully charged $'.($_POST['price']).'</h1>';
    echo '<h5>You will be redirected to the homepage in a moment.</h5>'; //or a payment successful page.

    sleep(5);



    //sending mail

    require('/php/PHPMailer/PHPMailerAutoload.php');

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

    $mail->From = 'from@example.com';
    $mail->FromName = 'Mailer';
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }





    /////////////////////////////////////////////
    ///
    ///
    /// redirecting back to homepage or wherever
    header("Location: http://maneeshaindrachapa.github.io");
}
?>