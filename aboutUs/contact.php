<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    // Validate form data (you can add more validation here)

    // Compose email
    $to = 'paul@propertydev.co.uk';
    $subject = 'Contact Form Submission';
    $message = "
        Name: $name
        Title: $title
        Email: $email
        Comments: $comments
    ";

    // Send email
    $headers = "From: $email\r\n";
    mail($to, $subject, $message, $headers);

    // Redirect back to the form (you can customize the success page)
    header('Location: ./index.html');
    exit;
}
?>
