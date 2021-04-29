<!DOCTYPE html>
<html>

<!-- Mirrored from t.commonsupport.xyz/weston/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 19:32:35 GMT -->
<head>
<meta charset="utf-8">
<title>Mr and Miss Melanin Afrique 2021 Home Default</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="outer-container">
            	<div class="clearfix">
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index-2.html"><img src="/images/logo.png" alt="" title=""></a></div>
                    </div>

                   	<!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
								    <li ><a href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="#">About</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</nav>

						<div class="outer-box">
                            <div class="search-box">
                                <div class="search-box-btn"><span class="icon flaticon-user  ">Login</span></div>
                            </div>
                        </div>
					</div>

                    <!-- Outer btn -->

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="/images/logo-2.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

    @yield('content')

       <!-- Main Footer -->
       <footer class="main-footer" style="background-image:url(images/background/4.jpg);">
        <div class="auto-container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="row">

                </div>
            </div>

            <!-- Footer Content -->
            <div class="footer-content">
                <div class="footer-logo"><a href="#"><img src="/images/logo.png" alt=""></a></div>
                <div class="social-links">
                    <div class="text-box">
                        <h3>Social Connections</h3>
                        <div class="text">You should connect social area for any updates</div>
                    </div>
                    <ul class="social-icon-colored">
                        <li class="google-plus"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                        <li class="facebbok"><a href="#"><span class="fab fa-facebook-f"></span></a></li>

                        <li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>

                    </ul>
                </div>
                <div class="copyright-text">© Copyright <a href="#">Mr and Miss Melanin Afrique</a> 2021. All Right Reserved.</div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!--Login Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fa fa-times"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="{{ route('login') }}"> @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email"
                        placeholder="Email" required="">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password"
                        placeholder="Password" required="">
                </div>

                <div class="form-group ">
                    <button class="theme-btn btn-style-four" type="submit"
                        name="Submit">Login</button>
                </div>
            </form>
            <br>
            <h3></h3>

        </div>
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script src="/js/parallax.min.js"></script>
<script src="/js/parallax.min.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/jquery.paroller.min.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/script.js"></script>
<!--Google Map APi Key-->
<script src="/https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
<script src="/js/map-script.js"></script>
<!--End Google Map APi-->
</body>

<!-- Mirrored from t.commonsupport.xyz/weston/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 19:37:05 GMT -->
</html>
