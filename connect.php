<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'startournament 1');

// Check connection
if(!$conn){
    die("Database connection failed! " . mysqli_connect_error());
}
echo "Conected successfully!";
?>
