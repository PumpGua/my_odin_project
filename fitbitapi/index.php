<?php
    include 'dbconnect.php';
    if(isset($_GET['verify'])){
        $userid=$_GET['verify'];
        $query="select * from users where uid='$userid'";
        $run=mysqli_query($connect,$query);
        if(mys