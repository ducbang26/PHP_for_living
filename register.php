<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
</head>

<body>
    <h3> Register </h3>
    <form action="register_submit.php" method="POST">
        <table>
            <tr>
                <td>Tên Đăng Nhập</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật Khẩu</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập lại Mật Khẩu</td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Đăng Ký</button>
                    <button type="reset">Làm Mới</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>