<?php
include('Connections.php');

$errer_s=0;
  if(isset($_POST['submit']))
  {
  $firstname =($_POST['firstname']);
  $lastname = ($_POST['lastname']);
  $username = ($_POST['username']);
  $password = ($_POST['password']);
  $email =($_POST['email']);
  $phone_number = ($_POST['phone_num']);  
 }

  if (empty($username))
  {

      $user_error = '<p>Please enter your username</p> ' ;
      $errer_s = 1 ;
  
    }



  elseif(empty($email))
  {

      $email_error = '<p>Please enter your email</p>';
      $errer_s = 1 ;

    
  }
 
  if(empty($password))
  {
    
      $password_error = '<p>Please enter your password</p>';
      $errer_s = 1 ;
      
  }
 
      else{
        if($errer_s == 0){
          
      $sql = "INSERT INTO clints (first_name, last_name, username, password, phone_numer, email) 
      VALUES ('$firstname','$lastname','$username','$password','$phone_number','$email')";


        mysqli_query($connect,$sql);

          header('location:login.php');
        }
}






