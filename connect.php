<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "startournament";

$servername = 'localhost';
$username = 'root';
$password = '';

<<<<<<< HEAD
if (!$conn) {

    die("Connection Failed: " .mysqli_connect_error());
}else{
    echo("Connection Successful!");
}
?>
=======
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'startournament');

// Check connection
if(!$conn){
    die("Database connection failed! " . mysqli_connect_error());
}
echo "Conected successfully!";
?>
>>>>>>> dev
