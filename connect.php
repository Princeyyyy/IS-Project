<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "startournament";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (!$conn) {

    die("Connection Failed: " .mysqli_connect_error());
}else{
    echo("Connection Successful!");
}
?>
