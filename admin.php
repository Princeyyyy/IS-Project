<?php

session_start();

include "db.php";

error_reporting(0);
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

if($fname == "admin"){
    $name = 1;
}else{
    $name = 0;
}

include "adminLogic.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/tournament.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/tournament.png" alt="img">
                </div>

                <?php if(empty($fname)){?>
                <!-- Display signup screen -->
                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
						You're Logged Out!!
					</span>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="update">
                        Log In
						</button>
                    </div>
                </form>
            <?php }?>

                <?php if(!empty($fname) && $name == 0){?>
                <!-- Display signup screen -->
                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
						You do not have Admin Privilages!!
					</span>

                    <div class="text-center">
                        <a class="txt2" href="home.php">
							Back
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>
            <?php }?>

            <?php if(!empty($fname) && $name == 1){?>
                <!-- Display user is logged in -->
                <form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                    <span class="login100-form-title">
						User Account
					</span>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="account">
							View Account
						</button>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="viewusers">
                        View Users
						</button>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="addtournament">
                        Add Tournament
						</button>
                    </div>

                    <div class="text-center">
                        <a class="txt2" href="home.php">
							Back
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>
            <?php }?>

            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="js/sign.js"></script>

</body>

</html>