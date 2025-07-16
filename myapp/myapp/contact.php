<?php
$page_title = "VUT Connect - Contact Us";
$form_errors = [];

// Process form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validate inputs
    if(empty($name)) $form_errors['name'] = "Name is required";
    if(empty($email)) {
        $form_errors['email'] = "Email is required";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors['email'] = "Invalid email format";
    }
    if(empty($message)) $form_errors['message'] = "Message is required";
    
    // If no errors, redirect to thank you page
    if(empty($form_errors)) {
        header('Location: /thank_you.php');
        exit;
    }
}

include 'includes/header.php';
include 'includes/nav.php';
?>

<main>
    <section class="contact-form">
        <h2>Contact Us</h2>
        
        <?php if(!empty($form_errors)): ?>
            <div class="error-message">
                <p>Please correct the following errors:</p>
                <ul>
                    <?php foreach($form_errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="/contact.php">
            <div class="form-group <?php echo isset($form_errors['name']) ? 'error' : ''; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" 
                       value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
            </div>
            
            <div class="form-group <?php echo isset($form_errors['email']) ? 'error' : ''; ?>">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" 
                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
            </div>
            
            <div class="form-group <?php echo isset($form_errors['message']) ? 'error' : ''; ?>">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required><?php 
                    echo htmlspecialchars($_POST['message'] ?? ''); 
                ?></textarea>
            </div>
            
            <button type="submit">Send Message</button>
        </form>
        
        <div class="alternative-contact">
            <p>Or email us directly at: <a href="mailto:connect@vut.ac.za">connect@vut.ac.za</a></p>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>