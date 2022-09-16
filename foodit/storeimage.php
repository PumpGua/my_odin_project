 <?php
    session_start();
    include 'dbconnect.php';
  
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
    

   
  
    }
    if (isset($_POST['submit'])) {
         
        $img = $_POST['image'];
        $qty=$_POST['qty'];
        
        $folderPath = "images/";
        function randstr($len)
        {
            $str = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPWRSTUVWXYZ";
            $rand = "";
            for ($i = 1; $i <= $len; $i++) {
                $rand .= $str[rand(0, strlen($str) 