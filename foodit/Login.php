
<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header("location:dashboard.php");
    }
    include 'dbconnect.php';
    if(isset($_POST['submit'])){
        echo "a";
        $email=$_POST['email'];