<?php

require_once("mysqli-class/MysqliDb.php");
require_once(".env.php");
require_once("PHPMailer/src/Exception.php");
require_once("PHPMailer/src/PHPMailer.php");
require_once("PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configure DB
$db = new MysqliDb($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

// Create a PHPMailer instance
$mail = new PHPMailer();

// Get Post Data
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Configure SMTP settings (if needed)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jay.chauhan3042@gmail.com';
$mail->Password = 'jhbjbqtvhzqghzvp';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Enable HTML content in the email body
$mail->isHTML(true);

// Set the email's sender and recipient
$mail->setFrom('jay.chauhan3042@gmail.com', 'Jay Chauhan');
$mail->addAddress($email, $name);

// Set the email subject
$mail->Subject = 'Thank You ' . $name;

// Set the HTML content of the email body
$mail->Body = '<html>
<head>
    <title>Thank You</title>
    <style>
        .card-header {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            word-wrap: break-word;
            box-sizing: border-box;
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
        }

        .card-body {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            word-wrap: break-word;
            box-sizing: border-box;
            flex: 1 1 auto;
            padding: 1rem 1rem;
        }

        .card-footer {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            word-wrap: break-word;
            box-sizing: border-box;
            padding: .5rem 1rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125);
            color: #6c757d !important;
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Dear ' . $name . '
        </div>
        <div class="card-body">
            <p class="card-text">I appreciate your message regarding ' . $subject . '. Rest assured, I\'ve received it and will respond promptly.
                <br>I\'ll be in
                touch as soon as possible.<br>Have a great day!
            </p>
        </div>
        <div class="card-footer text-muted">
            Warm regards,<br>
            <a href="http://resume-jay.is-best.net/" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">Jay Chauhan</a>
        </div>
    </div>
</body>
</html>';

// Send the email
if ($mail->send()) {
    $mailSent = "1";
} else {
    $errorInfo = $mail->ErrorInfo;
    $errorCode = "";

    // Use a regular expression to extract the error code
    if (preg_match('/\d{3}/', $errorInfo, $matches)) {
        $errorCode = $matches[0];
    }
    $mailSent = $errorCode;
}

// Insert into DB
$data = array(
    "name" => $name,
    "email" => $email,
    "subject" => $subject,
    "message" => $message,
    "mail_sent" => $mailSent
);

$id = $db->insert('tblContact', $data);
echo "OK";
// echo (array("ok" => true, "data" => "OK"));
