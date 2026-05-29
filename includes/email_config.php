<?php
/**
 * Email Configuration for CineFlix OTP System
 * 
 * IMPORTANT: Replace these values with your actual Gmail credentials
 * For Gmail, you need to:
 * 1. Enable 2-Step Verification on your Google Account
 * 2. Generate an App Password: https://myaccount.google.com/apppasswords
 * 3. Use the App Password (not your regular password) below
 */

return [
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_username' => getenv('CINEFLIX_SMTP_USERNAME') ?: 'YOUR_GMAIL_ADDRESS', // Replace with your Gmail address
    'smtp_password' => getenv('CINEFLIX_SMTP_PASSWORD') ?: 'YOUR_GMAIL_APP_PASSWORD',    // Replace with your Gmail App Password
    'smtp_from_email' => getenv('CINEFLIX_SMTP_FROM_EMAIL') ?: 'YOUR_GMAIL_ADDRESS', // Replace with your Gmail address
    'smtp_from_name' => 'CineFlix Cinema',
    'smtp_encryption' => 'tls', // Use 'tls' for port 587
];

