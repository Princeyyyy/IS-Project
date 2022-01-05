<?php 

if(isset($_POST['update']))
{
    
    mysqli_select_db($conn,'Users');

    $fname = $_POST['afname'];
    $lname = $_POST['alname'];
    $phoneno = $_POST['aphoneno'];
    $email = $_POST['aemail'];
    $password = $_POST['apassword'];
    
    $select = "select * from Users where email= '$email'";
    $result = mysqli_query($conn, $select);
    $num = mysqli_num_rows($result);

    if($num == 1){

        echo "
        <script type=\"text/javascript\">".
        "alert('Account Update was Successful! Changes will take effect upon next login!');".
        "location.href = 'home.php'".
        "</script>";
        $sql = "update `Users` set `fname` = '$fname', `lname` = '$lname', `password` = '$password', `phoneno` = '$phoneno' where `Users`.`id` = $id";
        mysqli_query($conn,$sql);
    }else {
        echo "
        <script type=\"text/javascript\">".
        "alert('Error');".
        "location.href = 'account.php'".
        "</script>";
        error_reporting(E_ALL);

    }
}

if(isset($_POST['login1']))
{
header("Location: login.php");
}

?>