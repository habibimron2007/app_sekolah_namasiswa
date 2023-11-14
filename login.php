<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .login-area{
                width: 300px;
                height: 200px;
                margin: auto;
                margin-top: 100px;
            }
            .btn-login{
                background-color: #247ba0;
                padding: 10px;
                width: 100px;
                border-radius: 5px;
                border: none;
                color: #FFF;
            }
        </style>
    </head>
    <body>
        <div class="login-area">
            <form action="proseslogin.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <br><br>
                <input type="password" name="password" placeholder="Kata Sandi" required>
                <br><br>
                <button class="btn-login" type="submit" name="login">Login</button>
            </form>
        </div>
    </body>
</html>