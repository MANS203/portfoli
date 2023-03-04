<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title> Registration </title>
  </head>
  <body>

      <!--================= form ================== -->

    <form  method="post">


      <?php include("BK/back_reg.php") ?>

        <img src="img/logo.png" alt="leon">
          <h2>Registration</h2>
      
        <input
          type="text"
          class=""
          name="name"
          required
          placeholder="name"
        >

         <br>
         <br>

     
        <input
          type="text"
          name="username"
          class=""
          placeholder="username"
           >

           <br>
         <br>

        <input
          type="email"
          class=""
          name="email"
          required
          placeholder="www.impapa@gmail.com" >

             <br>
         <br>

        
        <input
          type="password"
          class=""
          name="password"
          placeholder="password"
          required >

          <br>
         <br>

  
      <div class="txt">
        are you member? <a href="login.php" class="tx"> Login </a>
    </div>
    <br>
         <br>
    <input type="submit" class="btn" name="submit" value="Registe" >
    
    </form>

  </body>
</html>
