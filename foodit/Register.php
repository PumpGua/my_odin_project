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
                    $run = mysqli_