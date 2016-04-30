<?php

require_once 'vendor/autoload.php';

use rapidweb\googlecontacts\ContactClient;

$client = new ContactClient([
    "clientID"     => "739387131167-7vr4pib0qknl2dda1su1gimn25i9cgl6.apps.googleusercontent.com",
    "clientSecret" => "GL4gDBhMrHXczl6JNJG5R2Tt",
    "redirectUri"  => "https://chat2desk.com/site/google",
    "developerKey" => "ya29.CjHUAirRY712x6riA3xVBp2MD2OzLvEi5bgboT5yzA-e4CSVe7bHcQZb4hy6OKzGjHD2",
    "refreshToken" => "1/kcSzMQflgfbjO4YaIoeRM1VJy31pk4gyON0v6t9v4GQ"
]);
$data = $client->create('vovchik', '+375447685555');
print_r($data);
