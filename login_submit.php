<?php
include 'config.php';
$msg = '';
if (isset($_POST["submit"])&& $_POST["username"] !=''&&$_POST["password"]!='') {
	$username = $_POST['username'];
	$password = $_POST['password'];
    $password=md5($password);
	$sql = "SELECT * FROM users where username = '$username' And password = '$password' ";
	$user = mysqli_query($con, $sql);
	$count = mysqli_num_rows($res);
	if ($count >0) {
		echo "Đăng Nhập Thành Công ";
		header('Location:categories.php');
		die();
	} else {
		header('Location:login.php');
	}
}
?>