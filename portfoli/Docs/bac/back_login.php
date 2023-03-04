<?php
include('Connections.php');

$errer_s = 0;
if(isset($_POST['username']) && isset($_POST['password']))
{       
        $username = (strtolower($_POST['username']));


        $password = (strtolower($_POST['password']));

        
if(empty($username)){

        $username_err = '<p>Please insert your username</p>';
        $errer_s = 1 ;
        
}
if(empty($password)){

        $password_err = '<p>Please insert your password</p>';
        $errer_s = 1 ;
}


if($errer_s == 0){
        $sql= "SELECT * FROM clints WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($connect,$sql);
        $check = mysqli_fetch_array($result);
        if(isset($check)){
        header('location:index.php');
        }else{
                echo '<p>your username or password incorrect try again</p>';
        }

}

}