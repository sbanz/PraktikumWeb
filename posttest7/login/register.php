


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css" />
    <title> Sign Up </title>
</head>
<body>
    <nav class="header">
        <img src="../logo.png" class="logo" width="100" height="100">
    </nav>
    <main>
        <div class="input-group">
        <form id="signup" action="regis.php" method="post">
            <table>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="user" placeholder="input username" required> </td>
                </tr>
                <tr>
                    <td>  Email </td>
                    <td> <input type="email" name="email" placeholder="input email" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="pass" placeholder="input password" required> </td>
                </tr>
                <tr>
                    <td> Konfirmasi Password </td>
                    <td> <input type="password" name="cpass" placeholder="confirm password" required> </td>
                </tr>
            </table>
            <input type="submit" name = 'signup' value="Sign Up">
            <div class="fnav">
            <p>
            Already a member?  <a href="login.php"> Sign in </a>
            </p>
            </div>
            </div>
        </form>
    </main>