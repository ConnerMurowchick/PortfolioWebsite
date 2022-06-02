<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

     $name = $_POST['visitor_name'];
     $email = $_POST['visitor_email'];
     $message = $_POST['visitor_message'];
     $subject = $_POST['email_title'];
     $from = 'From: connermurowchick.com';
     $to = 'murowchick.conner@gmail.com';
     
    
     $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
    if (mail ($to, $subject, $body, $from)) {
        $message = "Thank you for contacting me, You will get a reply within 24 hours.";
        echo '<script type='text/javascript'>alert('$message');</script>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
     
/*
if($_POST) {
    $message = "Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.";
    echo <script type='text/javascript'>alert('$message');</script>;
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
      
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
    $recipient = "murowchick.conner@gmail.com";
    
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    mail($recipient, $email_title, $email_body, $headers)

    if(mail($recipient, $email_title, $email_body, $headers)) {
        $message = "Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.";
        echo <script type='text/javascript'>alert('$message');</script>;
    } else {
        $message2 = "We are sorry but the email did not go through.";
        echo <script type='text/javascript'>alert('$message2');</script>;
    }
      
} else {
    $message3 = "Something went wrong";
    echo <script type='text/javascript'>alert('$message3');</script>;
}

*/
?>