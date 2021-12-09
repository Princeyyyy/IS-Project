<?php
session_start();

$conn = mysqli_connect($servername, $username, $password);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$select = "select * from users where email= '$email'";
$result = mysqli_query($conn, $select);
$num = mysqli_num_rows($result);


if($num == 1){
    echo "user already exists";
}else{
    $sql = "insert into users(username, email, password) values ('$username','$email','$password')";
    mysqli_query($conn,$sql);
}

mysqli_close($conn);
?>