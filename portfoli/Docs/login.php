<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

    <h2>Login</h2>

    <?php include("bac/back_login.php") ?>

    <form method="post">


        <input type="text" name="username" id="us" required placeholder=" User name">
        <br>
        <br>
        <input type="password" required name="password" id="ps" placeholder=" Password">
        <br>
        <br>
        <input type="submit" class="btn" name="submit" value="Login">
        <br>
        <br>
        <div class="txt">
            Not a member? <a href="register.php" class="tx"> register </a>
        </div>

        <p>Forget Password?</p>

    </form>
</body>
</html>