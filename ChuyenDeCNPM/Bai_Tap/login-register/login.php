<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        .container {
            display: flex;
            width: 1000px;
        }

        .login {
            flex: 1;
            box-sizing: border-box;
        }
    </style>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username-login"];
    $password = $_POST["password-login"];


    if ($username != "" && $password != "") {
        if ($username === "hieptran" && $password === "123123") {
            header("Location: index.php");
            exit;
        } else {
            $loginError = "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
    }
}
?>

<body>
    <div class="container">
        <div class="login">
            <form id="login-form" method="POST" action="login.php">
                <table>
                    <tr>
                        <td>
                            <h1>Login</h1>
                            <?php
                            // Hiển thị thông báo lỗi nếu có
                            if (isset($loginError)) {
                                echo "<p style='color: red;'>$loginError</p>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="username-login">Username</label></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="username-login" id="username-login" size=40>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password-login">Password</label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password-login" id="password-login" size=40></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="rememberme">
                            <label for="rememberme">Remember Me</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <input type="submit" value="Login">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            Don't have account?
                            <a href="register.php">Register</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>