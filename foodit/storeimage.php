 <?php
    session_start();
    include 'dbconnect.php';
  
    if (!isset($_SESSION['uid'])) {
        header("location:index.php");
    } else {
       