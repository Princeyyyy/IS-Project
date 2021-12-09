<?php
session_start();

header('location: signup.php');

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, 'startournament');

mysqli_select_db($conn,'signup');

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
