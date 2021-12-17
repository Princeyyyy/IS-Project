<?php

session_start();

include "db.php";
include "tournamentDataLogic.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tournament Details</title>
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

                <form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                    <span class="login100-form-title">
						Tournament Details
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Tournament Name required">
                        <input class="input100" type="text" name="tname" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Tournament Price required">
                        <input class="input100" type="number" name="tprice" placeholder="Price">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-money" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Tournament Organizer required">
                        <input class="input100" type="text" name="torganizer" placeholder="Oganizer Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid Tournament organizer email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="torganizer_email" placeholder="Organizer Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Tournament Time required">
                        <input class="input100" type="text" name="ttime" placeholder="Time">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Tournament Venue required">
                        <input class="input100" type="text" name="tvenue" placeholder="Venue">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Tournament Date required">
                        <input class="input100" type="text" name="tdate" placeholder="Date">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="tournament">
							Enter Details
						</button>
                    </div>

                    <div class="text-center p-t-50">
                        <a class="txt2" href="index.php">
							Back
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>
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
