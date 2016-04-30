<?php

// After filling in the clientID, clientSecret and redirectUri (within 'config.json'), you should visit this page
// to get the authorisation URL.

// Note that the redirectUri value should point towards a hosted version of 'redirect_handler.php'.

require_once 'vendor/autoload.php';

use rapidweb\googlecontacts\helpers\GoogleHelper;

$client = GoogleHelper::getClient([
    "clientID"     => "739387131167-7vr4pib0qknl2dda1su1gimn25i9cgl6.apps.googleusercontent.com",
    "clientSecret" => "GL4gDBhMrHXczl6JNJG5R2Tt",
    "redirectUri"  => "https://chat2desk.com/site/google",
    "developerKey" => "ya29.CjHUAirRY712x6riA3xVBp2MD2OzLvEi5bgboT5yzA-e4CSVe7bHcQZb4hy6OKzGjHD2",
    "refreshToken" => "1/kcSzMQflgfbjO4YaIoeRM1VJy31pk4gyON0v6t9v4GQ"
]);

$authUrl = GoogleHelper::getAuthUrl($client);

echo 'Go to the following URL to authorise your application for Google Contacts: '.$authUrl;
echo "\r\n";
