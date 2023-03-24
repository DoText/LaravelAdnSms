<?php
return [
    'domain' => env('ADN_DOMAIN_URL', 'https://portal.adnsms.com'),
    'apiCredentials' => [
        'api_key' => env('ADN_API_KEY', ''),
        'api_secret' => env('ADN_API_SECRET', ''),
    ],
    'apiUrl' => [
        'check_balance' => "/api/v1/secure/check-balance",
        'send_sms' => "/api/v1/secure/send-sms",
        'check_campaign_status' => "/api/v1/secure/campaign-status",
        'check_sms_status' => "/api/v1/secure/sms-status",
    ],
];
