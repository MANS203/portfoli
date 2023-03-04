<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <!-- <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forget Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member?<a href="#">Signup</a>
            </div>
        </form>
    </div> -->
    <div class="center">
        <h1>Login</h1>
        <!-- <?php include("back/back_login.php") ?> -->
        <form method="post">
            <div class="txt_field">
                <input type="text" name="username" id="us" required>
                <span></span>
                <label for="us">Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password" id="ps" >
                <span></span>
                <label for="ps">Password</label>
            </div>
            <div class="pass">Forget Password?</div>
            <input type="submit" name="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="register.php"> register </a>
            </div>
        </form>
    </div>
</body>

</html>