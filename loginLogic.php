<?php

if(isset($_POST['login']))
{

$logemail = $_POST['logemail'];
$logpassword = $_POST['logpassword'];
    
$sql="select * from Users where email='$logemail' && password='$logpassword'";
$db = mysqli_select_db($conn,'Users');

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if($num == 1)
{
    $_SESSION['fname']= $row[1];
    $_SESSION['lname']= $row[2];
    header("Location: home.php");

}
else
{
    echo "
        <script type=\"text/javascript\">".
        "alert('Invalid Email or Password! Try again');".
        "location.href = 'login.php'".
        "</script>";
}
}


?>