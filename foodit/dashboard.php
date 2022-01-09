
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
        $bmi = $weight / ($height * $height);

        $mcalorie = 88.632 + (13.397 * $weight) + (4.799 * $height * 100) - (5.677 * $age);
        $fcalorie = 447.593 + (9.247 * $weight) + (3.098 * $height * 100) - (4.330 * $age);

        if ($sex == '1') {
            $mycalorie = $mcalorie;
            $bmr = $mcalorie;
        } else {
            $mycalorie = $fcalorie;
            $bmr = $fcalorie;
        }

        if ($excercise == '1')
            $mycalorie = $mycalorie * 1.2;
        else if ($excercise == '2')
            $mycalorie = $mycalorie * 1.2;
        else if ($excercise == '3')
            $mycalorie = $mycalorie * 1.375;
        else if ($excercise == '4')
            $mycalorie = $mycalorie * 1.725;
        else if ($excercise == '5')
            $mycalorie = $mycalorie * 1.9;
    }

    $jsonurl = "http://localhost/fitbitapi/index.php?getcal=$fitbitid";
    $json = file_get_contents($jsonurl, 0, null, null);
    $json_output = json_decode($json, JSON_PRETTY_PRINT);
    $exists = $json_output['exists'];

    if ($exists == '1') {

        $fitbitcalorie = $json_output['calories'];;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodify :: Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">