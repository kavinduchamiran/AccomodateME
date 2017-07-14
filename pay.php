<?php
// need current logged buyer's id to be passed to this page alongside the boardingID

require_once('./config.php');

require('php/PHPMailer/PHPMailerAutoload.php');

//pass the boarding id to this page

if(isset($_POST['boardingID'])){
    $boardingID = $_POST['boardingID'];

    $con = mysqli_connect("localhost","root","","accomodate_me");

    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }

///////////////////////////////////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `boarding_details` WHERE `boardingID`='".$boardingID."'";

    $comments = mysqli_query($con,$query);

    $row=mysqli_fetch_array($comments,MYSQLI_NUM);

    $boardingPrice = $row[3];       //will get both price and the boarding owner's user id
    $userID = $row[1];
///////////////////////////////////////////////////////////////////////////////////////////
    $query = "SELECT * FROM `users` WHERE `userID`='".$userID."'";

    $comments = mysqli_query($con,$query);

    $row=mysqli_fetch_array($comments,MYSQLI_NUM);

    $sellerEmail = $row[3];
    $buyerEmail = $_POST['buyerEmail'];
///////////////////////////////////////////////////////////////////////////////////////////

    //echo $boardingPrice;

  // echo $sellerEmail;
  // echo $buyerEmail;

     mysqli_close($con);

}else{
     header('boarding.php');
}



?>


<form action="pay.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Initial payment."
          data-amount="<?php echo $boardingPrice/1.5367; ?>"
          data-locale="auto"></script>
    <input type='hidden' name='price' value='<?php echo $boardingPrice/1.5367;?>'/>
    <input type='hidden' name='sellerEmail' value='<?php echo $sellerEmail;?>'/>
    <input type='hidden' name='buyerEmail' value='<?php echo $buyerEmail;?>'/>
</form>

<?php

if(isset($_POST['stripeToken'])) {
    $token = $_POST['stripeToken'];
    $customer = \Stripe\Customer::create(array(
        'email' => $_POST['buyerEmail'], //need to pass the boarding buyer's email address here from the database. currently, seller's address is passed for testing.
        'source' => $token
    ));

    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,                // need to save this unique customer id back to the database. this is the buyer's id tag
        'amount' => round($_POST['price']),
        'currency' => 'usd'
    ));

    echo '<h1>Successfully charged ' .round($_POST['price'])*1.5367 . ' LKR</h1>';
    echo '<h5>You will be redirected to the homepage in a moment.</h5>'; //or a payment successful page.

    sleep(5);


}

if( isset($_POST['sellerEmail']) && isset($_POST['buyerEmail'])) {
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //sending mail

    //dont touch these settings

    $mail = new PHPMailer();

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kavinduchamiran.15@cse.mrt.ac.lk';                 // SMTP username
    $mail->Password = 'p64n8zKC#';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->From = 'kavinduchamiran.15@cse.mrt.ac.lk';
    $mail->FromName = 'AccomodateME';
    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail->isHTML(true);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------
// Email to Buyer.

    $mail->addAddress($_POST['buyerEmail']);     // add buyer's email here, which was passed from boarding view page
    $mail->Subject = 'AccomodateME - Boarding bought';
    $mail->Body =

        '
        <!doctype html>
        <html>
        <body>
        <h1>Welcome to AccomodateME!</h1>
        
        <p>We are happy to inform you that your payment is successful and you are the proud owner of the boarding place.</p>
        
        <p>
        <b>Payment method:</b> Credit card
        <br>
        <b>Payment amount:</b> '.round($_POST['price'])*1.5367.' LKR'.



       ' </p>
        
        <p>We will inform the boarding owner and have him contacted you at the earliest convenience.</p>
        
        <p>Meanwhile, hang in there. You will soon receive further instructions on how to retrieve your key and access to the residence.</p>
        
        <p>If you need to know anything, feel free to&nbsp;contact the boarding owner.</p>
        
        <p>Thank you for using our services. Hope to deal with you again.</p>
        
        <p>----------------------------------------------------------------------------------------------------------------------</p>
        
        <p>Please don&#39t reply to this email as this inbox is not monitored.<br />
        If you have any issues regarding the payment, contact our sales manager @ 0778606656.</p>
        
        <p><a href="http://www.accomodate.me">www.accomodate.me</a></p>
        </body>
        </html>



        ';


    if (!$mail->send()) {
        echo 'Message could not be sent. buyer';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //echo 'Message has been sent';
    }

//---------------------------------------------------------------------------------------------------------------------------------------------------------------
// Email to Seller.

    $mail2 = new PHPMailer();

    $mail2->isSMTP();                                      // Set mailer to use SMTP
    $mail2->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail2->SMTPAuth = true;                               // Enable SMTP authentication
    $mail2->Username = 'kavinduchamiran.15@cse.mrt.ac.lk';                 // SMTP username
    $mail2->Password = 'p64n8zKC#';                           // SMTP password
    $mail2->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail2->From = 'kavinduchamiran.15@cse.mrt.ac.lk';
    $mail2->FromName = 'AccomodateME';
    $mail2->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail2->isHTML(true);
    $mail2->addAddress($_POST['sellerEmail']);     // add sellers address from db
    $mail2->Subject = 'AccomodateME - Boarding sold';
    $mail2->Body =

        '
        <!doctype html>
        <html>
        <body>
        <h1>Welcome to AccomodateME!</h1>
        
        <p>We are happy to inform you that your boarding is sold and the transaction is completed.</p>
        
        <p>
        <b>Payment method:</b> Credit card
        <br>
        <b>Payment amount:</b> '.round($_POST['price'])*1.5367.' LKR'.

        '
        <p>Currently, we are holding the funds at our escrow until the buyer confirms he received key & access to the building.</p>
        
        <p>Please do your best to send the house key and other necessary details as soon as possible.</p>
        
        <p>After buyer\'s confirmation, we will release the funds to your added bank account. Please note that it will take 4-5 working days
        for the money to reflect in your bank balance.</p>
        
        <p>If you need to know anything, feel free to&nbsp;contact the boarding buyer.</p>
        
        <p>Thank you for using our services. Hope to deal with you again.</p>
        
        <p>----------------------------------------------------------------------------------------------------------------------</p>
        
        <p>Please don&#39;t reply to this email as this inbox is not monitored.<br />
        If you have any issues regarding the transaction, contact our sales manager @ 0778606656.</p>
        
        <p><a href="http://www.accomodate.me">www.accomodate.me</a></p>
        </body>
        </html>



        ';


    if (!$mail2->send()) {
        echo 'Message could not be sent. seller';
        echo 'Mailer Error: ' . $mail2->ErrorInfo;
    } else {
        //echo 'Message has been sent';
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////
    ///
    ///
    /// redirecting back to homepage or wherever
  //header("Location: http://maneeshaindrachapa.github.io");

?>