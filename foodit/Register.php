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
    if (strlen($fitbitid) > 0) {


        $jsonurl = "http://localhost/fitbitapi/index.php?verify=$fitbitid";

        $json = file_get_contents($jsonurl, 0, null, null);
        $json_output = json_decode($json, JSON_PRETTY_PRINT);
        $exists = $json_output['exists'];
        if ($exists == '1') {
            $uid=randstr(14);
            
            $query2="select * from users where email='$email'";
            $run2=mysqli_query($connect,$query2);

            if(mysqli_num_rows($run2)==0){
           $query="insert into users values('NULL','$uid','$name','$email','$pass','$fitbitid') ";
           $run=mysqli_query($connect,$query);
           if($run){
               echo '<script>alert("User Registered Succesfully");setTimeout(function(){ window.location="Login.php";  }); </script>';
           }
        }else{
                    $error = 1;
                    $msg .= 'Email ID already exists';
        }
        } else {
            $error=1;
            $msg.='No user exists for given FitBit ID';
        }
      
    } else {
        $fitbitid = 'NULL';
                $uid = randstr(14);

                $query2 = "select * from users where email='$email'";
                $run2 = mysqli_query($connect, $query2);

                if (mysqli_num_rows($run2) == 0) {
                    $query = "insert into users values('NULL','$uid','$name','$email','$pass','$fitbitid') ";
                    $run = mysqli_query($connect, $query);
                    if ($run) {
                        echo '<script>alert("User Registered Succesfully");setTimeout(function(){ window.location="Login.php";  }); </script>';
                    }
                } else {
                    $error = 1;
                    $msg .= 'Email ID already exists';
                }
    }
    }
    else {
        $error = 1;
        $msg .= 'Password dont match';
    }
}else{
        $error = 1;
        $msg .= 'Password should be greater than 4';
}
    if($error==1){
        echo '<script>alert("'.$msg.'");setTimeout(function(){ window.location="Register.php";  }); </script>';
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="FoodiT_logo.png">
    <title>FoodiT - Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Register.css">

</head>

<body>
    <header class="header">
        <div class="logo-box">
            <img src="FoodiT_logo.png" alt="FoodiT Logo" class="logo">
        </div>
        <div class="logo-name">

        </div>
        <div class="text-area">

            <div class="main">
                <div class="col-md-6 col-sm-12">
                    <div class="login-form">
                        <h1>Register</h1>
                        <form class="form" action="Register.php" method="POST">
                            <div class="form-group">
                                <label>Enter Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required="">
                            </div>