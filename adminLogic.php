<?php 

if(isset($_POST['account']))
{
header("Location: account.php");
}

if(isset($_POST['addtournament']))
{
header("Location: tournamentData.php");
}

if(isset($_POST['viewusers']))
{
header("Location: users.php");
}


?>