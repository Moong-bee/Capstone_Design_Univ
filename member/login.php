<?php
session_start();

$nickname = $_GET['nickname'];

$_SESSION['userid'] = $nickname;


$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

header("Location: http://$host/Capstone-PHP");
?>
