<?php

session_start();

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, 'startournament');

$email = $_POST['ema'];
$pass = $_POST['pass'];

$sql="select * from users where email='$email' && password='$pass'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1)
{
header("Location: index.php");
}
else
{
    echo "<script>alert('User already exists!!');</script>";
    header("Location: login.php");
}


?>