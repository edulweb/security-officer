<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>@yield('title') | Indian Officers Society</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{asset('assets/fronted/images/logo.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('assets/fronted/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/elpath.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/color.css')}}" id="jssDefault" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/rtl.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/style.css?v=1.2')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/banner.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/feature.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/about.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/service.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/service-details.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/clients.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/chooseus.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/video.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/funfact.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/testimonial.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/team.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/faq.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/blog.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/case.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/news.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/cta.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/contact.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/module-css/page-title.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fronted/css/responsive.css?v=1.2')}}" rel="stylesheet">

    <style>
        @media (max-width: 768px){
            #menuArea{
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between;
        }
    }
    </style>
</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">
        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    <div class="top-inner">
                        <ul class="info-list clearfix">
                            <li><i class="icon-1 gradient-color"></i><a href="mailto:indianofficerssociety@gmail.com">indianofficerssociety@gmail.com</a></li>
                            <li class="jhide"><a href="{{url('/join-us')}}"><i class="icon-4 gradient-color"></i> Join Us</a></li>
                        </ul>
                        <div class="top-right d-none d-lg-block">
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area" id="menuArea">
                            <div class="logo-box d-flex align-items-center justify-content-between gap-2">
                                <figure class="logo"><a href="{{url('/')}}"><img style="height:auto; width: 80px;" src="{{asset('assets/fronted/images/logo.png')}}" alt=""></a></figure>
                                <h3 style="color: #a28421">Indian Officers Society</h3>
                            </div>
                                <!--Mobile Navigation Toggler-->

                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                        <li><a href="{{url('/service-details')}}">Services</a>
                                        </li>
                                        <li><a href="{{url('/members')}}">Members Directory</a></li>
                                        <li><a href="{{url('/news')}}">News
                                        <li class="dropdown"><a href="javascript:void()">Gallery</a>
                                            <ul>
                                                <li><a href="{{url('/photos')}}">Photos</a></li>
                                                <li><a href="{{url('/videos')}}">Videos</a></li>
                                            </ul>
                                    </li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box">
                                <a href="{{url('/join-us')}}" class="theme-btn btn-one d-none d-xl-block"><span>Join Us</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area">
                            <div class="logo-box d-flex align-items-center gap-2">
                                <figure class="logo"><a href="{{url('/')}}"><img style="height:60px; width: 60px;" src="{{asset('assets/fronted/images/logo.png')}}" alt=""></a>
                                </figure>
                            </div>
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box">
                                <a href="{{url('/join-us')}}" class="theme-btn btn-one"><span>Join Member</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo pb-3 d-flex align-items-center gap-2"><a href="{{url('/')}}"><img src="{{asset('assets/fronted/images/logo.png')}}" style="width: 60px" alt="logo" title=""></a>
                    <h2 class="text-light">Indian Officers Society</h2>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:indianofficerssociety@gmail.com">indianofficerssociety@gmail.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        @yield('mainContent')
        <!-- main-footer -->
        <footer class="main-footer">
            <div class="widget-section">
                <div class="bg-layer" style="background-image: url({{asset('assets/fronted/images/background/footer-bg.jpg')}});"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <div class="footer-logo">
                                    <a href="{{url('/')}}"><img src="{{asset('assets/fronted/images/logo.png')}}" style="width:120px" alt="logo-footer"></a>

                                    <div class="widget-title mb-0">
                                        <h3>Indian Officers Society</h3>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <p>The objectives of Indian Officers Society(I.O.S.) shall be to maintain the high standards, dignity and repute of the members;</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_50">
                                <div class="widget-title">
                                    <h3>Quick Link</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                        <li><a href="{{url('/service')}}">Services</a></li>
                                        <li><a href="{{url('/news')}}">News</a></li>
                                        <li><a href="contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_30">
                                <div class="widget-title">
                                    <h3>Usefull Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Faq</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-6.svg')}}" alt="">123-12 Jamaica Ave, Richmond Hill, NY, 11418, PO BOX 1155</li>
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-7.svg')}}" alt=""><a href="mailto:indianofficerssociety@gmail.com">indianofficerssociety@gmail.com</a></li>
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-8.svg')}}" alt=""><a href="tel:9996663XXX">999 6663 XXX</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p>Copyright {{date('Y')}} <strong>Indian Officers Society</strong> All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->
    </div>

<!-- jequery plugins -->
<script src="{{asset('assets/fronted/js/jquery.js')}}"></script>
<script src="{{asset('assets/fronted/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/fronted/js/owl.js')}}"></script>
<script src="{{asset('assets/fronted/js/wow.js')}}"></script>
<script src="{{asset('assets/fronted/js/validation.js')}}"></script>
<script src="{{asset('assets/fronted/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/fronted/js/appear.js')}}"></script>
<script src="{{asset('assets/fronted/js/isotope.js')}}"></script>
<script src="{{asset('assets/fronted/js/parallax-scroll.js')}}"></script>
<script src="{{asset('assets/fronted/js/jquery.nice-select.min.js')}}"></script>

<!-- main-js -->
@yield('script')
<script src="{{asset('assets/fronted/js/script.js')}}"></script>

</body>
<!-- End of .page_wrapper -->
</html>
