<?php

session_start();
if (isset($_SESSION['uid'])) {
    header("location:dashboard.php");
}
include 'dbconnect.php';
$error = 