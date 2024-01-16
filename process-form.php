<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $lastName = $_POST["Last-Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $subject = $_POST["Subject"];
    $message = $_POST["field"];

    // Validate data if necessary

    $to = "zakariamouwfaq1996@gmail.com";
    $subject = "New Form Submission: " . $subject;
    $headers = "From: $email";

    // Compose the email message
    $emailBody = "Name: $name\n";
    $emailBody .= "Last Name: $lastName\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Phone: $phone\n\n";
    $emailBody .= "Subject: $subject\n";
    $emailBody .= "Message:\n$message";

    // Send email
    mail($to, $subject, $emailBody, $headers);

    // Redirect after successful submission
    header("Location: thank-you-page.html");
    exit();
}
?>
