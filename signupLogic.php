<?php

if(isset($_POST['signup']))
{
    
    mysqli_select_db($conn,'signup');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $select = "select * from users where email= '$email'";
    $result = mysqli_query($conn, $select);
    $num = mysqli_num_rows($result);
    
    
    if($num == 1){
        echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";  
        exit();
    }else{
        $sql = "insert into users(username, email, password) values ('$username','$email','$password')";
        mysqli_query($conn,$sql);
        header("Location: login.php"); 
    }
    
}

?>