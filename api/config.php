<?php
/**
 * TRYM Website Configuration
 * 
 * Configure these settings for your production environment.
 */

// Email Configuration
define('MAIL_ENABLED', false);  // Set to true when ready to send emails
define('MAIL_TO', 'info@trym.cz');
define('MAIL_FROM', 'noreply@trym.cz');

// For production with SMTP, you may want to use PHPMailer
// and configure SMTP settings here:
// define('SMTP_HOST', 'smtp.example.com');
// define('SMTP_PORT', 587);
// define('SMTP_USER', 'your-username');
// define('SMTP_PASS', 'your-password');

// Development settings
define('DEBUG_MODE', true);

// CORS settings (update for production)
define('ALLOWED_ORIGINS', ['http://localhost:5173', 'https://trym.cz', 'https://www.trym.cz']);
