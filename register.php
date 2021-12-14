<?php
session_start();

$conn = mysqli_connect($servername, $username, $password);

$username = $_POST['Email'];
$email = $_POST['Username'];
$password = $_POST['Password'];

$select = "select * from playerregistration where email= '$Email'";
$result = mysqli_query($conn, $select);
$num = mysqli_num_rows($result);


if($num == 1){
    echo "User Already Exists";
}else{
    $sql = "insert into playerregistration(Email, Username, Password) values ('$Email','$Username','$Password')";
    mysqli_query($conn,$sql);
}

mysqli_close($conn);
?>
