<?php

if(isset($_POST['tournament']))
{
    
    mysqli_select_db($conn,'signup');

    $tname = $_POST['tname'];
    $tprice = $_POST['tprice'];
    $torganizer = $_POST['torganizer'];
    $torganizer_email = $_POST['torganizer_email'];
    $ttime = $_POST['ttime'];
    $tvenue = $_POST['tvenue'];
    $tdate = $_POST['tdate'];
    
    $select = "select * from Tournament where name= '$tname'";
    $result = mysqli_query($conn, $select);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "
        <script type=\"text/javascript\">".
        "alert('Tournament $tname is in the database');".
        "location.href = 'tournamentDataLogic.php'".
        "</script>";
    }else {
        echo "
        <script type=\"text/javascript\">".
        "alert('Tournament Data Entry was Successful!');".
        "location.href = 'admin.php'".
        "</script>";
        $sql = "insert into Tournament(price, name, organizer, organizer_email, time, venue, date) values ('$tprice', '$tname','$torganizer','$torganizer_email','$ttime','$tvenue','$tdate')";
        mysqli_query($conn,$sql);

    }
}

?>