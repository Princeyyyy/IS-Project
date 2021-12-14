<?php

session_start();

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, 'startournament');

$logusername = $_POST['logusername'];
$logpassword = $_POST['logpassword'];

$sql="select * from users where username='$logusername' && password='$logpassword'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['name']= $_POST['logusername'];
    header("Location: home.php");
}
else
{
    echo "
        <script type=\"text/javascript\">".
        "alert('Invalid Username or Password! Try again');".
        "location.href = 'login.php'".
        "</script>";
}


?>