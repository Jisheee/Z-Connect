<?php
/**
 * Mail configuration for contact/application forms.
 * Use environment variables in production so secrets are not committed to Git.
 */

require_once __DIR__ . '/load-env.php';

define('SMTP_HOST', getenv('SMTP_HOST') ?: 'smtp.gmail.com');
define('SMTP_PORT', getenv('SMTP_PORT') ?: 587);
define('SMTP_SECURE', getenv('SMTP_SECURE') ?: 'tls');

define('GMAIL_EMAIL', getenv('GMAIL_EMAIL') ?: 'yourgmail@gmail.com');
define('GMAIL_APP_PASSWORD', getenv('GMAIL_APP_PASSWORD') ?: 'your-16-char-app-password');
define('ADMIN_EMAIL', getenv('ADMIN_EMAIL') ?: 'j.carlvillaruz@gmail.com');
define('ADMIN_NAME', getenv('ADMIN_NAME') ?: 'Z-Connect Admin');
?>
