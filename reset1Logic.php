<?php

if(isset($_POST['checkemail']))
{
    
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    
    $conn = mysqli_connect($servername, $username, $password, 'startournament');

    mysqli_select_db($conn,'users');

    $resetemail = $_POST['resetemail'];

    $sql="select * from users where email='$resetemail'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num == 0 ){

    $row = mysqli_fetch_assoc($result);
    $email = $row['email']; 
    $user_id =  $row['id'];
    header("Location: reset1.php");
    
    }
    else
    {
    echo "
        <script type=\"text/javascript\">".
        "alert('Invalid Email!!);".
        "location.href = 'reset1.php'".
        "</script>";
    }
}


?>