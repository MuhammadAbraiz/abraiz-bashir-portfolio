<?php
if(isset($_POST['submit'])){
    $to = "muhammadabraiz489@gmail.com"; // your email address
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "From: $name\n\nEmail: $email\n\nMessage:\n$message";

    // send email
    mail($to, $subject, $body);

    // show success message
    echo "<div class='alert alert-success'>Your message has been sent. Thank you!</div>";
}
?>
