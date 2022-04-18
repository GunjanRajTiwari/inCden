<?php
session_start();
date_default_timezone_set('Asia/Karachi');

if(isset($_POST['logout_btn']))
{
    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
    "Status: Logged Out".PHP_EOL.
    "User: ".$_SESSION['user'].$_SESSION['admin'].PHP_EOL.
    "-------------------------".PHP_EOL;
    //-
    file_put_contents('./logs/login_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

    session_destroy();
    unset($_SESSION['user']);
    unset($_SESSION['admin']);
    header("Location: login.php");
}