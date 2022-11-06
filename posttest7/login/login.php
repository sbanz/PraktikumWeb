

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css" />
    <title> Log In </title>
</head>
<body>
    <nav class="header">
        <img src="../logo.png" class="logo" width="100" height="100">
    </nav>
    <main>
        <div class="input-group">
        <form id="login" action="./login.php" method="post" >
            <table>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="username" placeholder="input username" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="pass" placeholder="input password" required> </td>
                </tr>
            </table>
            <input type="submit" name = "Login" value="Log In">
            <div class="fnav">
            <p>
            Not yet a member? <a href = "register.php"> Sign Up </a>
            </p>
        </div>
        </div>
        </form>
    </main>
</body>
</html>