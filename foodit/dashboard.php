
<?php
include 'dbconnect.php';
session_start();
if (!isset($_SESSION['uid'])) {
    header("location:index.php");
} else {
    $uid = $_SESSION['uid'];
    $query = "select * from users where uid='$uid'";
    $run = mysqli_query($connect, $query);
    $fetch = mysqli_fetch_assoc($run);
    $name = $fetch['name'];
    $email = $fetch['email'];
    $fitbitid = $fetch['fitbitid'];
    date_default_timezone_set('Asia/Kolkata');
    $time = date("h:i:sA");
    $date = date("d/m/Y");
    $todaydate = explode('/', $date)[0];

    $jsonurl = "http://localhost/fitbitapi/index.php?bmi=$fitbitid";

    $json = file_get_contents($jsonurl, 0, null, null);
    $json_output = json_decode($json, JSON_PRETTY_PRINT);
    $exists = $json_output['exists'];
    if ($exists == '1') {
        $height = $json_output['height'];
        $weight = $json_output['weight'];

        $age = $json_output['age'];
        $sex = $json_output['sex'];
        $excercise = $json_output['excercise'];