<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // You can perform additional validation or data processing here if needed
    
    // Example: Store the form data in a text file
    $file = "contact_form_data.txt";
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>
