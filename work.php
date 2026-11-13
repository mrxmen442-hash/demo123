<?php
// index.php

$url = "https://6x4jaw149yhl91bcr0ykf3ze056wumib.oastify.com";

// Send an HTTP GET request using cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   // return response as a string
curl_setopt($ch, CURLOPT_TIMEOUT, 10);            // timeout in seconds
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);   // follow redirects

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error    = curl_error($ch);
curl_close($ch);

if ($response === false) {
    echo "Request failed: " . htmlspecialchars($error);
} else {
    echo "HTTP Status: " . $httpCode . "<br>";
    echo "Response:<br>";
    echo nl2br(htmlspecialchars($response));
}
