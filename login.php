<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="process.php" method="post">
            <div class="form">
                <h2 class="head">Login</h1>
                <input class="input" type="text" name="username" placeholder="Username">
                <input class="input" type="password" name="password" placeholder="Password">
                <?php
                    if(isset($_GET["code"])){
                        ?>
                            <p class="errormsg">Username atau password anda salah</p>
                        <?php
                    }
                ?>
                <input type="submit" name="login" class="btn" value="Login">
            </div>
        </form>
    </div>
</body>
</html>