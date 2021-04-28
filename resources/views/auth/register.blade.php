@extends('layouts.app')

@section('title')
Register

@endsection

@section('content')


@foreach ($errors->all() as $err )
<p class="text-danger">{{ $err }}</p>
@endforeach


<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    {{-- <header class="main-header">
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="outer-container">
                <div class="clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>


                                </ul>
                            </div>
                        </nav>
                        <div class="outer-box">

                            <div class="search-box">
                                <div class="search-box-btn"><span class="icon flaticon-magnifying-glass"></span></div>
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
                <div class="nav-logo"><a href="index-2.html"><img src="images/logo-2.png" alt="" title=""></a></div>

                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header> --}}
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/18.jpg);">
        <div class="parallax-scene parallax-scene-1 anim-icons">
            <span data-depth="0.60" class="parallax-layer icon icon-dots-1"></span>
            <span data-depth="0.70" class="parallax-layer icon twist-line-1"></span>
            <span data-depth="0.80" class="parallax-layer icon icon-circle-7"></span>
            <span data-depth="0.90" class="parallax-layer icon icon-triangles"></span>
        </div>
        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="#">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section Two -->
    <section class="about-section-two style-three" style="background-image: url(images/background/17.jpg);">
        <div class="parallax-scene parallax-scene-2 anim-icons">
            <span data-depth="0.50" class="parallax-layer icon-dots-2"></span>
            <span data-depth="0.90" class="parallax-layer icon-dots-3"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">About Contest</span>
                <h2>Welcome to the frist seasnon of <br>Mr and Miss Melanin Afrique 2021</h2>
            </div>

            <div class="content-box">
                <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore
                    magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea
                    commodo consequat.duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur cepteur sint occaecat cupidatat.</div>

            </div>
        </div>
    </section>
    <!--End About Section Two -->

    <!-- Coming Soon -->
    <section class="coming-soon-section-two">
        <div class="outer-container">
            <div class="auto-container clearfix">
                <div class="title-column">
                    <div class="inner-column">
                        <h3>Count Every <br>Second Until <br> the Event</h3>
                    </div>
                </div>
                <div class="timer-column">
                    <div class="inner-column">
                        <div class="time-counter">
                            <div class="time-countdown clearfix" data-countdown="2021/07/10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->

    <!-- Form Section Three -->
    <section class="speakers-section-three" style="background-image: url(images/background/10.jpg);">
        <div class="parallax-scene parallax-scene-3 anim-icons">
            <span data-depth="0.50" class="parallax-layer icon-dots-2"></span>
            <span data-depth="0.90" class="parallax-layer icon-dots-3"></span>
        </div>

        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 coll-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">Register</span>
                            <h2>Become <br> a Participant</h2>
                        </div>
                        <div class="text">
                            <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna
                                aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip
                                exea commodo conse quat.duis aute irure dolor in reprehen derit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            <p>Proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        </div>
                        <div class="btn-box"><a href="#" class="theme-btn btn-style-one">Contact Us <span
                                    class="flaticon-arrow"></span></a></div>
                    </div>
                </div>

                <div class="speakers-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="card card-body ">
                            <div class="form-box wow fadeInRight">

                                <div class="sec-form">
                                    <div class="contact-form text-white">

                                        <form action="{{route('register')}}" method="post">@csrf

                                            @foreach ($errors->all() as $err)
                                            <p class="text-danger">{{$err}}</p>
                                          @endforeach
                                            <div class="row">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Your name"
                                                        required="">
                                                </div>

                                                <div class="form-group text-white">

                                                    <select name="gender" id="">
                                                        <option>Select gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="date_of_birth"
                                                        placeholder="Date of_Birth" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text"  name="nationality"
                                                        placeholder="Nationality" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text"  name="state"
                                                        placeholder="State" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email"  name="email"
                                                        placeholder="Email" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" class="form-control"  name="password"
                                                        placeholder="Password" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control"  name="password_confirmation"
                                                        placeholder="Confirm Password" required="">
                                                </div>

                                                <div class="form-group ">
                                                    <button class="theme-btn btn-style-four" type="submit"
                                                        name="Submit">REGISTER NOW</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Form Section Three -->


    <!-- Gallery Section -->
    <section class="gallery-section style-two alternate">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">Our Gallery</span>
                <h2>Incredible Gallery</h2>
            </div>

            <div class="row">
                <!-- Gallery Item -->
                <div class="gallery-item col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2-1.jpg" class="lightbox-image"
                                data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2-2.jpg" class="lightbox-image"
                                data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2-3.jpg" class="lightbox-image"
                                data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-3 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-4.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2-4.jpg" class="lightbox-image"
                                data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-5.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2-5.jpg" class="lightbox-image"
                                data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-6 col-md-12 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-6.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2-6.jpg" class="lightbox-image"
                                data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section -->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image:url(images/background/4.jpg);">
        <div class="auto-container">
            <!-- Upper Box -->
            <div class="upper-box">

            </div>

            <!-- Footer Content -->
            <div class="footer-content">
                <div class="footer-logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                <div class="social-links">
                    <div class="text-box">
                        <h3>Social Connections</h3>
                        <div class="text">Connect with us via social media for any updates</div>
                    </div>
                    <ul class="social-icon-colored">
                        <li class="google-plus"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                        <li class="facebbok"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>

                    </ul>
                </div>
                <div class="copyright-text">© Copyright <a href="#">Mr and Miss Afrique</a> 2021. All Right Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fa fa-times"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="http://t.commonsupport.xyz/weston/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                            required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            <br>

        </div>
    </div>
</div>








@endsection
