<?php

if(isset($_POST['check']))
{

$resetemail = $_POST['reset1email'];
    
$sql="select * from Users where email='$resetemail'";
$db = mysqli_select_db($conn,'Users');

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if($num == 1)
{
    $_SESSION['email']= $row[3];
    $_SESSION['password']= $row[4];
    header("Location: reset2.php");

}
else
{
    echo "
        <script type=\"text/javascript\">".
        "alert('Email $resetemail is not a valid email! Try again');".
        "location.href = 'reset1.php'".
        "</script>";
}
}


?>