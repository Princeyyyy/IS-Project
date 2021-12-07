<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($username)) {
   if (!empty($email)) {
       if (!empty($password)) {
           include "conncet.php";

           $userquery = "";
       }
   }
}

?>