<?php 
    include 'config.php';
    if( isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] != '' && $_POST["repassword"] != ''){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        $level=0;
        if($password!= $repassword){
            header("location:register.php");
        }
        $sql="SELECT * FROM users WHERE username= '$username' ";
        $old=mysqli_query($connect,$sql);
        $password=md5($password);//md5 ma hoa password
        if(mysqli_num_rows($old>0)){
            header("location:register.php");
        }
        $sql="INSERT INTO users (username,password,level) VALUES ('$username','$password','$level')";
        mysqli_query($connect,$sql);
        echo "Đã đăng ký thành công";
        echo "$username";
        echo "$password";
    }
    else{
        header("location:register.php");
    }

?>