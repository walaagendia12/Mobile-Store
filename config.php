<?php
session_start();
$siteUrl = "http://localhost/Mobile-Store-PHP";
$siteTitle = "Hamza Mobiles";
$siteTagline = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eveniet commodi obcaecati ipsam nemo Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eveniet commodi obcaecati ipsam nemo";
$siteLogo = "$siteUrl/assets/img/logo.png";
$socialMedia = [
    "fa-facebook-f" => "https://www.facebook.com/",
    "fa-twitter" => "https://twitter.com/?lang=en",
    "fa-linkedin-in" => "https://pk.linkedin.com/",
    "fa-instagram" => "https://www.instagram.com/"
];

include "functions.php";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if (!file_exists("pages/$page.php")) {
        $page = "404";
    }
} else {
    $page = "home";
}

$db = mysqli_connect("localhost", "root", "", "mobiledb") or die("Connection Failed :" . mysqli_connect_error());
// $db = mysqli_connect("auth-db902.hstgr.io", "u117560748_mobile", "Mobile@1122", "u117560748_mobile") or die("Connection Failed :" . mysqli_connect_error());
