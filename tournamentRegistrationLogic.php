<?php
$id = $_SESSION['id'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$phone = $_SESSION['phone'];

if(isset($_POST['register']))
{

    mysqli_select_db($conn,'Registration');

    $selected = $_POST['Tournament'];
    $select = "select * from Tournament where name = '$selected'";
    $result = mysqli_query($conn, $select);
    $num = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);

    if($num == 1){
        $_SESSION['id']= $row[0];
        $_SESSION['price']= $row[1];
        $_SESSION['name']= $row[2];
        $_SESSION['organizer']= $row[3];
        $_SESSION['organizer_email']= $row[4];
        $_SESSION['time']= $row[5];
        $_SESSION['venue']= $row[6];
        $_SESSION['date']= $row[7];

        $tid = $_SESSION['id'];
        $price = $_SESSION['price'];
        $name = $_SESSION['name'];
        $organizer = $_SESSION['organizer'];
        $organizer_email = $_SESSION['organizer_email'];
        $time = $_SESSION['time'];
        $venue = $_SESSION['venue'];
        $date = $_SESSION['date'];

        $select2 = "select * from Registration where ufname = '$fname' && tname = '$selected';";
        $result2 = mysqli_query($conn, $select2);
        $num2 = mysqli_num_rows($result2);

        if ($num2 == 1) {

        echo "
        <script type=\"text/javascript\">".
        "alert('You have already registered for the $name Tournament');".
        "location.href = 'tournamentRegistration.php'".
        "</script>";
        }else{

        echo "
        <script type=\"text/javascript\">".
        "alert('Successfuly Registered for the $name Tournament');".
        "location.href = 'home.php'".
        "</script>";

        $select3 = "insert into Registration(uid,ufname,ulname,uemail,upassword,uphoneno,tid,tprice,tname,torganizer,torganizer_email,ttime,tvenue,tdate) values 
        ('$id', '$fname', '$lname', '$email', '$password', '$phone', '$tid', '$price', '$name', '$organizer', '$organizer_email', '$time', '$venue', '$date')";
        mysqli_query($conn, $select3);

        }

    }else {
        echo "
        <script type=\"text/javascript\">".
        "alert('Error');".
        "location.href = 'tournamentRegistration.php'".
        "</script>";

    }
}



if(isset($_POST['login2']))
{
header("Location: login.php");
}

?>