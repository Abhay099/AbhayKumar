<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"] ?? ''));
    $message = trim($_POST["message"] ?? '');

    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Please complete the form and provide a valid email address."]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Load environment variables (Vercel/Cloud uses getenv, local uses .env file)
        $env = file_exists(__DIR__ . '/.env') ? parse_ini_file(__DIR__ . '/.env') : [];
        $smtp_email = getenv('SMTP_EMAIL') ?: ($env['SMTP_EMAIL'] ?? 'abhay28102003kumar@gmail.com');
        $smtp_password = getenv('SMTP_PASSWORD') ?: ($env['SMTP_PASSWORD'] ?? '');

        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_email; // User's email
        $mail->Password   = $smtp_password; // User's app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($smtp_email, 'Website Contact Form');
        $mail->addAddress($smtp_email, 'Abhay'); // Send to self
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(false);
        $mail->Subject = "New Inquiry from $name - $service";
        $mail->Body    = "You have received a new message from your website contact form.\n\n".
                         "Name: $name\n".
                         "Email: $email\n".
                         "Service of Interest: $service\n\n".
                         "Message:\n$message\n";

        $mail->send();
        echo json_encode(["status" => "success", "message" => "Your message has been sent successfully. We will be in touch soon."]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "There was a problem with your submission, please try again."]);
}
?>
