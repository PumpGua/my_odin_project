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
                $rand .= $str[rand(0, strlen($str) - 1)];
            }
            return $rand;
        }
    if ((int) $qty >= 1) {
        
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.jpg';

        $file = $folderPath . $fileName;

        file_put_contents($file, $image_base64);

        $code = 'python test.py images/' . $fileName;

        exec($code, $output, $x);

        $brand = explode(" (score =", $output[0])[0];

        $queryx = "select * from calories where name like '%$brand%'";
        $runx = mysqli_query($connect, $queryx);
        $datax = mysqli_fetch_assoc($runx);
        $name = $datax['name'];
        $calories = $datax['calories'];
        $calorieid = $datax['foodid'];
        
        date_default_timezone_set('Asia/Kolkata');
        $i=1;
        while($i<=$qty){
        $intakeid = randstr(14);
        $time = date("h:i:sA");
        $date = date("d/m/Y");
        $query = "insert into intakes values('NULL','$intakeid','$calorieid','$uid','$date','$time')";
        $run = mysqli_query($connect, $query);
        $i++;
        }
    }
    else{
        echo '<script>alert("Quantiy of food shouln\'t be less 