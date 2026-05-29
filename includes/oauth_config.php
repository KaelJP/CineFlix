<?php
/**
 * OAuth Configuration for Google and Microsoft Sign-In
 * Replace placeholder values with your actual Client IDs and Secrets from:
 * - Google: https://console.cloud.google.com/apis/credentials
 * - Microsoft: https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationsListBlade
 *
 * Redirect URIs to configure:
 * - Google: Add http://localhost/CINEFLIX/api/oauth_callback.php?provider=google (or your domain)
 * - Microsoft: Add http://localhost/CINEFLIX/api/oauth_callback.php?provider=microsoft
 */
return [
    'google' => [
        'client_id' => getenv('CINEFLIX_GOOGLE_CLIENT_ID') ?: 'YOUR_GOOGLE_CLIENT_ID',
        'client_secret' => getenv('CINEFLIX_GOOGLE_CLIENT_SECRET') ?: 'YOUR_GOOGLE_CLIENT_SECRET',
        'auth_url' => 'https://accounts.google.com/o/oauth2/v2/auth',
        'token_url' => 'https://oauth2.googleapis.com/token',
        'userinfo_url' => 'https://www.googleapis.com/oauth2/v2/userinfo',
        'scopes' => 'openid email profile'
    ],
    'microsoft' => [
        'client_id' => getenv('CINEFLIX_MICROSOFT_CLIENT_ID') ?: 'YOUR_MICROSOFT_CLIENT_ID',
        'client_secret' => getenv('CINEFLIX_MICROSOFT_CLIENT_SECRET') ?: 'YOUR_MICROSOFT_CLIENT_SECRET',
        'auth_url' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize',
        'token_url' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
        'userinfo_url' => 'https://graph.microsoft.com/v1.0/me',
        'scopes' => 'openid email profile'
    ],
    'base_url' => 'http://localhost/CINEFLIX' // Replace with your actual domain or ngrok URL
];
