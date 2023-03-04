<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/login.css">
  <title> Registration Page </title>
</head>
<html>

<body>
  <div class="container">
    <h1> Registration </h1>
  </div>
  <div class="">
    <form method="post">
      <?php include("bac/back_reg.php") ?>

      <div class="">
        <label for="firstname"></label>
        <input type="text" id="firstname" name="firstname" required placeholder="first_name" />
      </div>

      <div class="">
        <label for="lastName"></label>
        <input type="text" id="lastName" name="lastname" required placeholder="Last_name" />
      </div>

      <div class="">

        <label for="us"></label>
        <input type="text" name="username" placeholder="username" id="us">




      </div>
      <div class="">
        <label for="email"></label>
        <input type="email" id="email" name="email" required placeholder="EX:aaiiii@gmail.com" />
      </div>
      <div class="">
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="password" />
      </div>
      <div class="">
        <label for="number"></label>
        <input type="int" id="number" name="phone_num" placeholder="phone_number" />
      </div>
      <input type="submit" value="Register" name="submit" class="btn btn-primary" />
      <div class="txt">
        are you member? <a href="login.php" class="tx"> Login </a>
      </div>
    </form>
  </div>

</body>

</html>