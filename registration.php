<?php
session_start();

header('location: signup.php');
$message = "Fill all entries!";

if(isset($_POST['signup']))
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    
    $conn = mysqli_connect($servername, $username, $password, 'startournament');
    
    mysqli_select_db($conn,'signup');

if(empty(trim($_POST['username']))){
    echo "<script>alert('$message')</script>";
}else{
    $username = trim($_POST['username']);
}

if(empty(trim($_POST['email']))){
    echo "<script>alert('$message')</script>";
}else{
    $email = trim($_POST['email']);
}

if(empty(trim($_POST['password']))){
    echo "<script>alert('$message')</script>";
}else{
    $password = trim($password = $_POST['password']);
}
    
    $select = "select * from users where email= '$email'";
    $result = mysqli_query($conn, $select);
    $num = mysqli_num_rows($result);
    
    
    if($num == 1){
        echo "<script>alert(\"User already exists!!\");</script>";
    }else{
        $sql = "insert into users(username, email, password) values ('$username','$email','$password')";
        mysqli_query($conn,$sql)or die("Could Not Perform the Query");
        header("Location: login.php"); 
    }
    
}

mysqli_close($conn);

?>
