<?php 

if(isset($_POST['reset']))
{

$id = $_SESSION['id'];
$resetpassword = $_POST['resetpassword'];
    

$sql = "UPDATE `Users` SET `password`='$resetpassword' WHERE id = $id;";
$db = mysqli_select_db($conn,'Users');

if (mysqli_query($conn, $sql)) {
    echo "
        <script type=\"text/javascript\">".
        "alert('Password Reset Successful!');".
        "location.href = 'login.php'".
        "</script>";
    session_destroy();
   } else {
    echo "Error updating record: " . mysqli_error($conn);
   }
}


?>