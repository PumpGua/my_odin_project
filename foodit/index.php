
<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header("location:dashboard.php");
    }
    
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="FoodiT_logo.png">
    <link rel="stylesheet" href="Style.css">
    <title>FoodiT</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">