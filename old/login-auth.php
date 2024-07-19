<?php
if (isset($_POST['signin'])) {
    extract($_POST);
    $query = "SELECT * FROM `admin` WHERE (`username` = '$username' OR `email` = '$username') AND `password` = md5('$password') ";
    $result = mysqli_query($db, $query);

    if ($row = mysqli_fetch_assoc($result)){
        $admin_id = $row['admin_id'];
        $_SESSION["admin_id"] = "$admin_id";
        if (isset($_POST['remember']) && !empty($_POST['remember']) && $_POST['remember'] == "ok") {
            setcookie("admin_id", "$admin_id", time() + (86400 * 30), '/');
        }

    } else {
        echo "<script>alert('Wrong Username or Password');</script>";
    }

}

if (isset($_POST['forget-password'])) {
    extract($_POST);
    $query = "SELECT * FROM `admin` WHERE `username` = '$username' OR `email` = '$username' ";
    $result = mysqli_query($db, $query);

    if ($row = mysqli_fetch_assoc($result)){
        $_email = $row['email'];
        sendMail($_email, "ALi", "1122", "Hello");
        echo "<script>alert('mail sended');</script>";
        
    } else {
        echo "<script>alert('You don't have an account at this email or username. Create an account!');</script>";
    }
}

$is_login = false;

if (isset($_COOKIE["admin_id"]) && !empty($_COOKIE["admin_id"]) ) {
    $_SESSION["admin_id"] = $_COOKIE["admin_id"];
}

if (isset($_SESSION["admin_id"]) && !empty($_SESSION["admin_id"])) {
    $is_login = true;
}
