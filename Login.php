<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Sign-in</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- RemixIcon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Styles.css -->
    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="stylesheet" href="CSS/Login.css">

</head>

<body>
    <!-- Navbar Starts -->
    <nav class="shadow sticky-top ms-1 me-1 rounded-bottom navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="https://prakash4844.github.io/Dressingnity-Ecommerce-Website/"><img
                    style="height:60px;" src="Images/SVG Samples/Dressingnity (LOGO-final).svg" alt="BrandLogo"></a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn btn-light dropdown-toggle vio-outline" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bars pe-2"></i> Menu
                            </a>

                            <ul class="dropdown-menu dropdown-menu-light" style="margin-top: 15px;">
                                <!-- Try to Fix Dropdown position by removing inline CSS -->
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="ri-genderless-line"></i> All</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="ri-t-shirt-2-line"></i> Men</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="ri-t-shirt-line"></i> Women</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Left links -->

                <form class="d-flex align-items-center w-100 form-search">
                    <div class="input-group">
                        <button class="rounded btn btn-light dropdown-toggle shadow-0 vio-outline" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="padding-bottom: 0.4rem;">
                            All
                        </button>
                        <ul class="dropdown-menu dropdown-menu-light" style="margin-top: 15px;">
                            <!-- Try to Fix Dropdown position by removing inline CSS -->
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="ri-genderless-line"></i></span>All</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="ri-t-shirt-2-line"></i></span>Men</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="ri-t-shirt-line"></i></span>Women</a>
                            </li>
                            <li>
                        </ul>
                        <input class="form-control rounded" type="search" placeholder="Search anything"
                            aria-label="Search">
                        <button class="btn btn-light vio-outline" type="submit"><i class="ri-search-line"></i></button>
                    </div>
                </form>

                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-3">
                        <a class="nav-link d-flex align-items-center vio-outline" href="#!"><i
                                class="ri-notification-line"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-3" href="cart.html">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </li>
                    <li class="nav-item btn-light" style="width: 65px;">
                        <a class="vio-outline btn-light rounded nav-link d-flex align-items-center sign-in"
                            href="#!">Sign In</a>
                    </li>
                </ul>
            </div>

            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar Ends -->

    <div class="wrapper">
        <header>Login Form</header>
        <form action="login_query.php" method="POST">
            <div class="field email">
                <div class="input-area Play_font">
                    <input type="text" name="username" required="required" placeholder="Email Address">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt Play_font">Email can't be blank</div>
            </div>

            <div class="field password">
                <div class="input-area Play_font">
                    <input type="password" required="required" name="password" placeholder="Password">
                    <i class="icon fas fa-lock"></i>
                    <i class=" Play_font error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt Play_font">Password can't be blank</div>
            </div>
            <?php
					//checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.
					if(ISSET($_SESSION['error'])){
				?>
				<!-- Display Login Error message -->
					<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
				<?php
					//Unsetting the 'error' session after displaying the message. 
					session_unset($_SESSION['error']);
					}
				?>

            <!-- <div class="pass-txt Play_font"><a href="#">Forgot password?</a></div> -->
            <input type="submit" name="login" value="Login">
        </form>
        <div class="sign-txt Play_font">Not yet member? <a href="Register.php">Register now</a></div>
    </div>

    <!-- Footer Starts -->
    <footer class="Dressingnity_footer">
        <div class="widget_wrapper"
            style="background-image: url(http://demo.tortoizthemes.com/deneb-html/deneb-ltr/assets/images/footer_bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="widget widegt_about">
                            <div class="widget_title">
                                <img style="width: 300px;" src="Images/SVG Samples/Dressingnity (LOGO-final).svg"
                                    class="img-fluid" alt="">
                            </div>
                            <p>Quisque orci nisl, viverra et sem ac, tincidunt egestas massa. Morbi est arcu, hendrerit
                                ac vehicula condimentum, euismod nec tortor praesent consequat urna.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_link">
                            <div class="widget_title explore">
                                <h4>Explore</h4>
                            </div>
                            <ul class="footer-links">
                                <li><a href="About.html#AboutUs">About Us</a></li>
                                <li><a href="About.html">About Site</a></li>
                                <li><a href="Blog.html">Blog</a></li>
                                <li><a href="FAQ.html">F&Q</a></li>
                                <li><a href="Terms&Conditions.html">Terms & Conditions</a></li>
                                <li><a href="sitemap.xml">Sitemap</a></li>
                                <li><a href="index.html">Home</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_contact">
                            <div class="widget_title">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="contact_info">
                                <div class="single_info">
                                    <div class="icon" style="margin-right: 0px;">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="ri-phone-fill phone-icon"></i>
                                        </div>
                                        <div class="info">
                                            <p><a href="tel:+919246147999">+1800-121-3637</a></p>
                                        </div>
                                    </div>
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="ri-phone-fill phone-icon"></i>
                                        </div>
                                        <div class="info">
                                            <p><a href="tel:+919246147999">+91 924-614-7999</a></p>
                                        </div>
                                    </div>
                                    <!-- <div class="info">
                                        <p><a href="tel:+919246147999">1800-121-3637</a></p>
                                        <p><a href="tel:+919246147999">+91 924-614-7999</a></p>
                                    </div> -->
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="mailto:info@Dressingnity.com">info@Dressingnity.com</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="mailto:services@Dressingnity.com">services@Dressingnity.com</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>Inmantec College,<span>Ghaziabad.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>Copyright &copy; 2022 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Ends-->

    <!-- Cookie Banner -->
    <div id="cb-cookie-banner" class="rounded-3 shadow-sm alert alert-dark text-center mb-0" role="alert">
        🍪 This website uses cookies to ensure you get the best experience on our website.
        <a href="https://www.cookiesandyou.com/" class="Cookies-link" target="blank">Learn more</a>
        <button type="button" class="cookie-btn btn btn-sm ms-3" onclick="window.cb_hideCookieBanner()">
            I Got It
        </button>
    </div>
    <!-- End of Cookie Banner -->

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS Bundle -->

    <!-- Custom JS -->
    <script src="JavaScript/Cookies.js"></script>
    <!-- Custom JS -->

</body>

</html>