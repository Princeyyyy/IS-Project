<?php

session_start();

include "db.php";

error_reporting(0);
$id = $_SESSION['id'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$phone = $_SESSION['phone'];

include "tournamentRegistrationLogic.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tournament Registration</title>
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
    <link rel="stylesheet" type="text/css" href="css/main2.css">
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
                        <button class="login100-form-btn" name="login2">
							LogIn
						</button>
                    </div>
                </form>
            <?php }?>

            <?php if(!empty($fname)){?>
                <!-- Display Registration screen -->
                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
						Tournament Registration
					</span>

                    <!-- Start of Displaying tournaments -->
    
        <?php
    $sql="select * from `Tournament`;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    ?>
    <div class="wrap-input101">
        <label>Tournament:</label>
            <select class="input101" aria-placeholder="Tournaments" name="Tournament">
            <option selected="selected">Choose one</option>
            <?php
        foreach($result as $row2) { ?>
      <option value="<?= $row2['name'] ?>"><?= $row2['name'] ?></option>
      <?php
        } ?>
    </select>
    </div>

        <?php
    ?>
<!-- End of Displaying tournaments -->

                    <div class="wrap-input100 validate-input" data-validate="First Name required">
                        <input class="input100" type="text" name="fname" placeholder="First Name" value="<?php echo $fname?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Last Name required">
                        <input class="input100" type="text" name="lname" placeholder="Last Name" value="<?php echo $lname?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="register">
							Register
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