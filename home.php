<?php

session_start();

include "db.php";

error_reporting(0);
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Webpage Title -->
    <title>StarTournament</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/tournament.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">

            <!-- Image Logo -->
            <div class="logo">
                <a href="index.html"><img src="images/resize.png" alt="Alternative"> Star<span>Tournament</span></a>
            </div>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php if(empty($fname)){?>
                <!-- display nothing but login in button -->
                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        
                    </li>
                </ul>

                <a class="btn-solid-reg" href=login.php target="_self" rel="noopener noreferrer">Log In</a>
            </div>
    <?php }?>

    <?php if(!empty($fname)){?>
                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Welcome <?php echo $fname . " " . $lname;?>!<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <a class="btn-solid-reg" href=logoutLogic.php target="_self" rel="noopener noreferrer">Log Out</a>
            </div>
    <?php }?>
            <!-- end of navbar-collapse -->
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <div class="header">
        <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">View and register for tournaments below!</h1>
                        <a class="btn-solid-lg page-scroll" href="#">Discover</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/tournament.png" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of header -->

    <!-- Start of Displaying tournaments -->
    
    <?php

    $sql="select * from Tournament;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while($row=mysqli_fetch_assoc($result)) {

        $name = $row["name"];

        ?>

<div class="card-container">
<div class="card">
    <h1><?php echo $name ?></h1>

    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Details</a>
    <a class="btn-solid-reg popup-with-move-anim" href="#">Register</a>
</div>
</div>
        <?php
        
    }  
}

?>
    <!-- End of Displaying tournaments -->

    <?php

$sql="select * from Tournament;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if ($resultCheck > 0) {

    $tid = $row[0];
    $tprice = $row[1];
    $tname = $row[2];
    $torganizer = $row[3];
    $torganizer_email = $row[4];
    $ttime = $row[5];
    $tvenue = $row[6];
    $tdate = $row[7];

    ?>

<!-- Details -->
<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/tournament.png" alt="alternative">
                </div>
                <!-- end of image-container -->
            </div>
            <!-- end of col -->
            <div class="col-lg-5">
                <h3><?php echo $tname ?></h3>
                <hr>
                <p>In cloud storing, the user, rather than saving the data at local storage or hard disk, stores data somewhere at the remote location, which can be accessed using internet service. There are various cloud storage service providers who sell
                    storage services for different ranges.</p>
                <h4>Details</h4>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Oranizer: <strong><?php echo $torganizer ?></strong></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Organizer Email: <strong><?php echo $torganizer_email ?></strong></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Time: <strong><?php echo $ttime ?></strong></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Price: <strong><?php echo $tprice ?>.Ksh</strong></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Venue: <strong><?php echo $tvenue ?></strong></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Date: <strong><?php echo $tdate ?></strong></div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Register</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <?php  
}

?>

    <!-- Footer -->
    <div class="footer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                    <!-- end of social-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a class="no-line" href="#your-link">StarTournament</a></p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
</body>

</html>