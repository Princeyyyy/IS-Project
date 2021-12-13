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
        echo "
        <script type=\"text/javascript\">".
        "alert('Email $email is already in our database, Please try another one!');".
        "location.href = 'signup.php'".
        "</script>";
    }else {
        echo "
        <script type=\"text/javascript\">".
        "alert('Registration was Successful!');".
        "location.href = 'login.php'".
        "</script>";
        $sql = "insert into users(username, email, password) values ('$username','$email','$password')";
        mysqli_query($conn,$sql);

    }
}

?>