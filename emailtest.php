<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "koayjingwei1@gmail.com"; // Replace with the recipient's email address
    $subject = "Hello, this is a test email";
    $message = "This is a test email sent from a PHP script.";

    $headers = "From: koayjingwei1@gmail.com"; // Replace with the sender's email address
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //connect to server
    ini_set("SMTP", "smtp.gmail.com");
    ini_set("smtp_port", 587);
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email could not be sent. Check your server's configuration.";
    }
} else {
    // Display a form for sending the email
    echo '<form method="post" action="">';
    echo 'To: <input type="text" name="email" placeholder="Recipient Email"><br>';
    echo '<input type="submit" value="Send Email">';
    echo '</form>';
}
?>
