<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate
    $errors = [];
    if(empty($name)) $errors[] = "Name is required";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email";
    if(empty($message)) $errors[] = "Message is required";
    
    if(empty($errors)) {
        // Process the form (send email, save to database, etc.)
        $to = "connect@vut.ac.za";
        $subject = "VUT Connect Feedback from $name";
        $headers = "From: $email\r\nReply-To: $email";
        
        mail($to, $subject, $message, $headers);
        
        // Redirect to thank you page
        header('Location: thank_you.php');
        exit;
    } else {
        // Redirect back with errors
        session_start();
        $_SESSION['form_errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header('Location: contact.php');
        exit;
    }
} else {
    header('Location: contact.php');
    exit;
}