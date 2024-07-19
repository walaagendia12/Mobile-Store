<?php
session_start();
if (isset($_COOKIE["admin_id"]) && !empty($_COOKIE["admin_id"]) ) {
    setcookie("admin_id", '', time() +  1, '/');
}
unset($_SESSION["admin_id"]);
echo "<script>window.location = '../';</script>";