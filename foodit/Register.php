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
    $str = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPWRSTUVWXYZ";
    $rand = "";
    for ($i = 1; $i <= $len; $i++) {
        $rand .= $str[rand(0, strlen($str) - 1)];
    }
    return $rand;
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cnfpass = $_POST['cnfpass'];
    $fitbitid = $_POST['fitbitid'];
    if(strlen($pass)>4 and strlen($cnfpass)>4){
    if($pass==$cnfpass){
    if (strlen($fitbit