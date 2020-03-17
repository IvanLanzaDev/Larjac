<?php
//NEW SESSION
session_start();
$email_session = $_SESSION["email_user"];
$password_session = $_SESSION["pass_user"];
if(!isset($email_session) || !isset($password_session)){
    header("Location: login.php");
    exit;
    session_destroy();
}
?>