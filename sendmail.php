<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $model = $_POST['model'];
    $date  = $_POST['date'];

    $to = "sales@jdmautomotive.uk";  // change to your email
    $subject = "New Test Drive Request from " . $name;
    $message = "
    Name: $name\n
    Email: $email\n
    Phone: $phone\n
    Interested Model: $model\n
    Date: $date
    ";

    $headers = "From: no-reply@jdmautomotive.uk\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "✅ Thank you! Your request has been submitted.";
    } else {
        echo "❌ Sorry, your request could not be sent. Please try again later.";
    }
}
?>
