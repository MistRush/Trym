<?php
/**
 * TRYM Contact Form Handler
 * 
 * This script processes contact form submissions from the Vue.js frontend.
 * For production, configure SMTP settings in config.php
 */

// Load configuration
require_once 'config.php';

// Set headers for JSON API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit();
}

// Get JSON input
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Validate required fields
$requiredFields = ['name', 'email', 'subject', 'message'];
$errors = [];

foreach ($requiredFields as $field) {
    if (empty($data[$field])) {
        $errors[] = ucfirst($field) . ' is required';
    }
}

// Validate email format
if (!empty($data['email']) && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

// Return errors if validation failed
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['error' => 'Validation failed', 'details' => $errors]);
    exit();
}

// Sanitize input
$name = htmlspecialchars(strip_tags($data['name']));
$company = htmlspecialchars(strip_tags($data['company'] ?? ''));
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars(strip_tags($data['subject']));
$message = htmlspecialchars(strip_tags($data['message']));

// Subject line mapping
$subjectMap = [
    'technical-audit' => 'Technical Audit Request',
    'engineering' => 'Engineering Support Inquiry',
    'asset-management' => 'Asset Management Inquiry',
    'consultation' => 'General Consultation',
    'other' => 'General Inquiry'
];

$subjectLine = $subjectMap[$subject] ?? 'Website Contact Form';

// Build email content
$emailSubject = "TRYM Website: $subjectLine";

$emailBody = "
New contact form submission from TRYM website
================================================

Name: $name
Company: $company
Email: $email
Subject: $subjectLine

Message:
$message

------------------------------------------------
Sent from: https://trym.cz
Time: " . date('Y-m-d H:i:s') . "
";

// Email headers
$headers = [
    'From' => MAIL_FROM,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion(),
    'Content-Type' => 'text/plain; charset=UTF-8'
];

$headerString = '';
foreach ($headers as $key => $value) {
    $headerString .= "$key: $value\r\n";
}

// Try to send email
$mailSent = false;

if (MAIL_ENABLED) {
    $mailSent = @mail(MAIL_TO, $emailSubject, $emailBody, $headerString);
}

// Log the submission (useful for development)
$logEntry = date('Y-m-d H:i:s') . " | Name: $name | Email: $email | Subject: $subject\n";
@file_put_contents(__DIR__ . '/contact_log.txt', $logEntry, FILE_APPEND);

// Return response
if ($mailSent || !MAIL_ENABLED) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your message. We will get back to you soon.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'error' => 'Failed to send message. Please try again or contact us directly at info@trym.cz'
    ]);
}
