<?php

session_start();

include "db.php";
include "loginLogic.php";
error_reporting(0);
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
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
                    <img src="images/tournament.png" alt="IMG">
                </div>

                <?php if(empty($fname)){?>
                <!-- Display login page -->
                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
						Member Login
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="logemail" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="logpassword" id="spassword" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div>
                        <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
							Login
						</button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
							Forgot Password?
						</span>
                        <a class="txt2" href="reset.php">
                            Reset Password!!
						</a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="signup.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>

                    <div class="text-center">
                        <a class="txt2" href="index.php">
							Back
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>
            <?php }?>

            <?php if(!empty($fname)){?>
                <!-- Display user is logged in -->
                <form class="login100-form validate-form" method="POST">
                <span class="login100-form-title">
                     <?php echo $fname . " " . $lname?>!
					</span>

                    <span class="login100-form-title">
						You're Logged In!!
					</span>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="return">
							Return to Home Page
						</button>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="logout">
							LogOut
						</button>
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