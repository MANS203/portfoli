<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>

<body>
    <form method="post" class="all">

        <?php include("BC/login_bc.php") ?>


        <h2>Login</h2>

        <?php
        if (isset($username_err)) {
            echo $username_err;
        }
        ?>
         
        <input type="text" name="username" required placeholder=" User name">
        <br>
        <br>
        <?php
        if (isset($password_err)) {
            echo $password_err;
        }
        ?>
       

        <input type="password" required name="password" placeholder=" password">
        <br>
        <br>

        <input type="submit" class="btn" name="submit" value="Login">
        <br>
        <br>
        <div class="txt">
            Not a member? <a href="register.php" class="tx"> New Login </a>
        </div>

        <p>Forget the password ?</p>

    </form>

</body>

</html>