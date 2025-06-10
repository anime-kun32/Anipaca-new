<?php

$conn = new mysqli("anime-alabiadedoyinjohn-93ba.i.aivencloud.com:12109", "avnadmin", "AVNS_bpmiP5ehyIM9iSVFqA2", "defaultdb");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    echo("Database connection failed.");
}

$websiteTitle = "AniPaca";
$isSecure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
            (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
$protocol = $isSecure ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "raisulentertainment@gmail.com";

$version = "1.0.2";

$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_";

$zpi = "https://anipaca-api-seven.vercel.app/api";
$proxy = "https://gogoanime-and-hianime-proxy-mu.vercel.app/m3u8-proxy?url=";

// $proxy = "https://your-hosted-proxy.com/proxy?url=";

$banner = $websiteUrl . "/public/images/banner.png";
