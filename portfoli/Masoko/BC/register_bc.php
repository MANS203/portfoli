<?php
include('Connections2.php');

$err_s=0;
  if(isset($_POST['submit']))
  {
  $name =($_POST['name']);
  $username = ($_POST['username']);
  $password = ($_POST['password']);
  $email =($_POST['email']);
 }

  if (empty($username))
  {

      $user_error = '<p>Please enter your username</p> ' ;
      $err_s = 1 ;
  
    }



  elseif(empty($email))
  {

      $email_error = '<p>Please enter your email</p>';
      $err_s = 1 ;

    
  }
 
  if(empty($password))
  {
    
      $password_error = '<p>Please enter your password</p>';
      $err_s = 1 ;
      
  }
 
      else{

        if($err_s == 0){
          
      $sql = "INSERT INTO writers (name, username, password, email) 
      VALUES ('$name','$username','$password','$email')";


        mysqli_query($data,$sql);

          header('location:login.php');
        }
}






