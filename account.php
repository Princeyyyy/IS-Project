<?php

session_start();

error_reporting(0);
include "db.php";
$id = $_SESSION['id'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$phone = $_SESSION['phone'];

if($fname == "admin"){
    $name = 1;
}else{
    $name = 0;
}

include "accountLogic.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Account</title>
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
						You're Logged Out. Login to View Account!!
					</span>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login1">
							LogIn
						</button>
                    </div>
                </form>
            <?php }?>

            <?php if(!empty($fname) && $name == 0){?>
                <!-- Display user account -->
                <form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                    <span class="login100-form-title">
						User Account
					</span>

                    <div class="wrap-input100 validate-input" data-validate="First Name required">
                        <input class="input100" type="text" name="afname" placeholder="First Name" value="<?php echo $fname?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Last Name required">
                        <input class="input100" type="text" name="alname" placeholder="Last Name" value="<?php echo $lname?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Phone number required">
                        <input class="input100" type="text" name="aphoneno" placeholder="Phone Number" value="<?php echo $phone?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="aemail" placeholder="Email" value="<?php echo $email?>" readonly>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="apassword" id="spassword" placeholder="Password" value="<?php echo $password?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div>
                        <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="update">
							Update
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

            <?php if(!empty($fname) && $name == 1){?>
                <!-- Display admin account -->
                <form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                    <span class="login100-form-title">
						User Account
					</span>

                    <div class="wrap-input100 validate-input" data-validate="First Name required">
                        <input class="input100" type="text" name="afname" placeholder="First Name" value="<?php echo $fname?>" readonly>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Last Name required">
                        <input class="input100" type="text" name="alname" placeholder="Last Name" value="<?php echo $lname?>" readonly>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Phone number required">
                        <input class="input100" type="text" name="aphoneno" placeholder="Phone Number" value="<?php echo $phone?>" readonly>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="aemail" placeholder="Email" value="<?php echo $email?>" readonly>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="apassword" id="spassword" placeholder="Password" value="<?php echo $password?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div>
                        <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="update">
							Update
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
