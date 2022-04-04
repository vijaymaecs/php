<?php
    $to = 'vijay.m@myaecs.com';
    $subject = 'Test enquiry for class session';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $course = $_POST["course"];
    $mode = $_POST["mode"];

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Create email headers
    $headers .= 'From: '.$email.
    'Reply-To: '.$to.
    'X-Mailer: PHP/' . phpversion();

    // Message
    $message = '<h1>This is a test enquiry for class session</h1>';
    $message .= '<p>Name : ' . $name . '</p>';
    $message .= '<p>eMail : ' . $eMail . '</p>';
    $message .= '<p>Contact : ' . $contact . '</p>';
    $message .= '<p>Course : ' . $course . '</p>';
    $message .= '<p>Course Mode : ' . $mode . '</p>';

    // Mail function

    $send = mail($to, $subject, $message, $headers);

    if ( $send ) {
        echo ("Your mail has been sent successfully");
    } else {
        echo ("Unable to send eMail...");
    }

    header ('location: https://www.arenawhitefield.com');
?>