<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Leon</title>
</head>
<body>
    <form method="post" class="">

             <?php include("BK/back_login.php") ?>

        <img src="img/logo.png" alt="leon">
        <h2>Login</h2>

        <?php 
			if(isset($username_err))
			{
				echo $username_err;
			}
		?>

        <input type="text" name="username" required placeholder=" User name">
        <br>

        <?php 
			if(isset($password_err))
			{
				echo $password_err;
			}
		?>
        <br>
        <input type="password" required name="password" placeholder=" password">
         <br>
         <br>
        <input type="submit" class="btn" name="submit" value="Login">

            <div class="txt">
                Not a member? <a href="register.php" class="tx"> register </a>
            </div>

        <p>Forget the password ?</p>

    </form>
    
</body>
</html>