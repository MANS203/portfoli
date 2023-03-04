<?php

$connect =mysqli_connect('localhost','root','','dus');
 
   if(!$connect){
      die('error'.mysqli_connect_error());
   }

?>