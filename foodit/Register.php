<?php

session_start();
if (isset($_SESSION['uid'])) {
    header("location:dashboard.php");
}
include 'dbconnect.php';
$error = 0;
$msg='';
function randstr($len)
{
    $str = "1234