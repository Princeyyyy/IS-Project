<?php
$servername = 'localhost';
$username = 'root';
$password = '';
    
    $conn = mysqli_connect($servername, $username, $password, 'startournament');

if(!$conn){
    echo "<h3>Unable to connect to database</h3>";
}


?>
