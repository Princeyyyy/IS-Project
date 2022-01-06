<?php

session_start();

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

    <!-- Favicon  -->
    <link rel="icon" href="images/tournament.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Gemdev</a> -->

            <!-- Image Logo -->
            <div class="logo">
                <a href="index.php"><img src="images/resize.png" alt="Alternative"> Star<span>Tournament</span></a>
            </div>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">

                <?php if(empty($fname)){?>
                <!-- display nothing but login in button -->
                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Details <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>

                <a class="btn-solid-reg" href=login.php target="_self" rel="noopener noreferrer">Log In</a>
            </div>
    <?php }?>

    <?php if(!empty($fname)){?>
                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Details <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link page-scroll" href="#">Welcome <?php echo $fname . " " . $lname;?>!<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <a class="btn-solid-reg" href=logoutLogic.php target="_self" rel="noopener noreferrer">Log Out</a>
            </div>
    <?php }?>
            </div>
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
                        <h1 class="h1-large">StarTournament is a free webapp designed to help people register for tournaments</h1>
                        <a class="btn-solid-lg page-scroll" href="home.php">View Tournaments</a>
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


    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Advantage of cloud storage</h2>
                        <p>It’s 2021, and now cloud storage has become one of the most convenient and efficient methods to store data online. There are many storage service providers on the internet, and this area is so vast now every big tech company owns
                            a separate storage facility, which helps to generate a significant margin of revenue from the users.</p>

                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Details</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details Lightbox-1 -->
    <!-- Lightbox-1 -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/cloud.png" alt="alternative">
                </div>
                <!-- end of image-container -->
            </div>
            <!-- end of col -->
            <div class="col-lg-4">
                <h3>Cloud Storage</h3>
                <hr>
                <p>In cloud storing, the user, rather than saving the data at local storage or hard disk, stores data somewhere at the remote location, which can be accessed using internet service. There are various cloud storage service providers who sell
                    storage services for different ranges.</p>
                <h4>Advantages</h4>
                <p>Some key advantages of cloud storage include:</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Usability and accessibility</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Security</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Convenient</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Cost-efficient</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Contact Us</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Easy to Register</h2>
                        <p>StarTournament webapp is a well structured tool and is very easy to use via parameters. Don't hesitate to give it a try today</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox2">Details</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of details 2 -->

    <!-- Details Lightbox-2 -->
    <!-- Lightbox-2 -->
    <div id="details-lightbox2" class="lightbox-basic2 zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/registration.png" alt="alternative">
                </div>
                <!-- end of image-container -->
            </div>
            <!-- end of col -->
            <div class="col-lg-4">
                <h3>Online Registration</h3>
                <hr>
                <p>Online registration not only improves efficiencies and eliminates unnecessary paperwork, it also maximises participation and improves marketing capabilities while allowing participants to sign up when and where it is most convenient for
                    them from any Internet-enabled computer.
                </p>
                <h4>Advantages</h4>
                <p>Some key advantages of online registration include:</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Save time</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Online registration systems are secure</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Immediate confirmation</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Easy to stay updated</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Contact Us</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Features -->
    <div id="features" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <i class="fas fa-rocket"></i>
                        <h4>Web framework</h4>
                        <p>This means that the webapp can easily be accessed from anywhere. As long as you have a device in hand,you can view the webapp.</p>
                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <i class="fas fa-images"></i>
                        <h4>Tournament Availability</h4>
                        <p>With a wide collection of tournament availability from football to chess to swimming, navigate and find the right tournament for you.</p>
                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <i class="fas fa-download"></i>
                        <h4>Easy to use</h4>
                        <p>StarTournament is designed to easily and smoothly navigate trough it without trouble.</p>
                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <i class="fas fa-cog"></i>
                        <h4>Simple setup</h4>
                        <p>Navigating through the website is very easy making it stress-free as you navigate trying to fing things.</p>
                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <i class="fas fa-file-alt"></i>
                        <h4>Simple licensing</h4>
                        <p>We hear your pain and we're offering Gemdev under the MIT license, which means you can use it for any kind of project and for any number of times.</p>
                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <i class="fas fa-award"></i>
                        <h4>Great results</h4>
                        <p>Users have sent us positive feedback about the framework. That means we are on to something good here so we'll keep improving it.</p>
                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-4 -->
    <!-- end of features -->


    <!-- About -->
    <div id="about" class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container">
                        <h2>Amazing works</h2>
                        <p>StarTournament was created with you, our users first in mind.</p>
                        <p>Naturally we can't please everyone because it's not our objective to fit all styles. Our style is based on speed, performance. and reliablity.</p>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <div class="image-container">
                        <img class="img-fluid" src="images/about.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <h2>Reasons to use</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li>1. Very easy to use with minimum number of clicks</li>
                            <li>2. Large pool of tournaments available to coose from</li>
                        </ul>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-5 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Contact details</h2>
                    <p class="p-heading">Don't hesitate to send your questions through the contact form or <a class="blue no-line" href="mailto:tournamentstar2021@gmail.com">contact@tournamentstar2021.com</a></p>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <div class="form-container">
                        <img class="decoration" src="images/contact-envelope.svg" alt="alternative">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="cname" required>
                                <label class="label-control" for="cname">Name</label>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="cemail" required>
                                <label class="label-control" for="cemail">Email</label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control-textarea" id="cmessage" required></textarea>
                                <label class="label-control" for="cmessage">Your message</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Submit Message</button>
                            </div>
                        </form>
                    </div>
                    <!-- end of form-container -->
                    <!-- end of contact form -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of form-1 -->
    <!-- end of contact -->


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