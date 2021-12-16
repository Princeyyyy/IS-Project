<?php

if(isset($_POST['signup']))
{
    
    mysqli_select_db($conn,'Users');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $select = "select * from Users where email= '$email'";
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
        $sql = "insert into Users(fname, lname, email, password, phoneno) values ('$fname', '$lname','$email','$password','$phoneno')";
        mysqli_query($conn,$sql);

    }
}

?>