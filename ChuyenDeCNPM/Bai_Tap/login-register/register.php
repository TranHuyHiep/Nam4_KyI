<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username-register"];
    $email = $_POST["email-register"];
    $fullname = $_POST["fullname-register"];
    $password = $_POST["password-register"];
}
?>
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

        .register {
            flex: 1;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="register">
            <form id="signup-form" action="register.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <h1>Signup for New Account</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username-register">Username</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="username-register" id="username-register" size="40">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email-register">User Email*</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" size="40" name="email-register" id="email-register">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td><label for="title">Select title</label></td>
                                    <td><label for="fullname-register">Full name*</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="title" id="title" style="width: 60px;" id="title">
                                            <option value="Mr.">Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                        </select>
                                    </td>
                                    <td><input type="text" size="29" id="fullname-register" name="fullname-register"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password-register">Password</label><br>
                            <input type="password" id="password-register" name="password-register" size=40>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="repassword-register">Repeat Password</label><br>
                            <input type="password" id="repassword-register" name="password-register" size=40>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Company detail</h3>
                            <p>Provide detail about your company</p>
                            <label for="companyName"><strong>Company name</strong></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="companyName" size=40>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="agree">
                            <label for="agree">I agree with registration</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <input type="submit" value="Register">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;">
                            Already have an account?
                            <a href="login.php">Login</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>