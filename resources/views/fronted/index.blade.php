@extends('layouts.main')
@section('title', 'Home')
@section('mainContent')
        <!-- banner-section -->
        <section class="banner-section p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item p_relative">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-2.png')}});"></div>
                        <div class="pattern-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-3.png')}});"></div>
                        <div class="pattern-3" style="background-image: url({{asset('assets/fronted/images/shape/shape-4.png')}});"></div>
                    </div>
                    <div class="bg-layer" style="background-image: url({{asset('uploaded/gallery/photo-3.jpeg')}});"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3>Discover The Truth</h3>
                            <h2>Indian officers Society</h2>
                            <p>Silent guardian, vigilant protector—dedicated to ensuring safety with integrity, as an Indian security officer.</p>
                            <div class="btn-box">
                                <a href="{{url('/')}}" class="theme-btn btn-one"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-2.png')}});"></div>
                        <div class="pattern-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-3.png')}});"></div>
                        <div class="pattern-3" style="background-image: url({{asset('assets/fronted/images/shape/shape-4.png')}});"></div>
                    </div>
                    <div class="bg-layer" style="background-image: url({{asset('uploaded/gallery/photo-5.jpeg')}});"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3>Discover The Truth</h3>
                            <h2>Indian officers Society</h2>
                            <p>Duty-bound, I safeguard lives with honor, commitment, and unwavering vigilance as an Indian security officer.</p>
                            <div class="btn-box">
                                <a href="{{url('/')}}" class="theme-btn btn-one"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-2.png')}});"></div>
                        <div class="pattern-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-3.png')}});"></div>
                        <div class="pattern-3" style="background-image: url({{asset('assets/fronted/images/shape/shape-4.png')}});"></div>
                    </div>
                    <div class="bg-layer" style="background-image: url({{asset('uploaded/gallery/photo-8.jpeg')}});"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h3>Discover The Truth</h3>
                            <h2>Indian officers Society</h2>
                            <p>Securing with pride, I stand strong—guardian of peace and safety in service to India.</p>
                            <div class="btn-box">
                                <a href="{{url('/')}}" class="theme-btn btn-one"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- feature-section -->
        <section class="feature-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 feature-block">
                            <a href="{{url('/join-us')}}">
                                <div class="feature-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <div class="icon gradient-color"><i class="icon-12"></i></div>
                                        </div>
                                        <h3>Join Us Now</h3>
                                        <p>Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                                    </div>
                                </div></a>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 feature-block">
                            <a href="{{url('/news')}}">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <div class="icon gradient-color"><i class="icon-7"></i></div>
                                    </div>
                                    <h3>Polic News</h3>
                                    <p>Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

        <!-- team-section -->
        <section class="team-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title mb_50">
                    <h2> Board Of Trustees & Staff</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-1.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <h3><a href="team-details">Marvin McKiney</a></h3>
                                    <span class="designation">Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-2.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <h3><a href="team-details">Albert Flores</a></h3>
                                    <span class="designation">Vice Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-3.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <h3><a href="team-details">Annette Black</a></h3>
                                    <span class="designation">Treasurer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->



        <!-- chooseus-section -->
        <section class="chooseus-section pt_150">
            <div class="pattern-layer">
                <div class="pattern-1"></div>
                <div class="pattern-2 rotate-me" style="background-image: url({{asset('assets/fronted/images/shape/shape-5.png')}});"></div>
                <div class="pattern-3" style="background-image: url({{asset('assets/fronted/images/shape/shape-8.png')}});"></div>
            </div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_two">
                            <div class="content-box mr_70">
                                <div class="sec-title mb_25">
                                    <span class="sub-title">Why Choose</span>
                                    <h2>Several Reasons why You Choose a ndian Officer's Society.</h2>
                                </div>
                                <div class="text-box">
                                    <p>Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia id in. Quisque porttitor tortor blandit nunc sed ac id. Mattis in nunc libero viverra. Consectetur leo nibh amet.</p>
                                    <a href="contact" class="theme-btn btn-one">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content ml_50">
                            <div class="shape">
                                <div class="shape-1"></div>
                                <div class="shape-2"></div>
                                <div class="shape-3 rotate-me"></div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box mb_30">
                                            <div class="icon-box"><img src="{{asset('assets/fronted/images/icons/icon-1.svg')}}" alt=""></div>
                                            <h3>Expert Security Officer</h3>
                                        </div>
                                    </div>
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><img src="{{asset('assets/fronted/images/icons/icon-2.svg')}}" alt=""></div>
                                            <h3>24/7 Support</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                                    <div class="chooseus-block-one">
                                        <div class="inner-box">
                                            <div class="icon-box"><img src="{{asset('assets/fronted/images/icons/icon-3.svg')}}" alt=""></div>
                                            <h3>Certified Agents</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->
        <!-- service-section -->
        <section class="service-section bg-color-1 sec-pad centred">
            <div class="auto-container">
                <div class="sec-title mb_60">
                    <h2>Latest News</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('uploaded/gallery/photo-1.jpeg')}}" alt=""></figure>
                                    <div class="category"><span class="gradient-color">Domestic</span></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details">Personal Protection</a></h3>
                                    <p> Indian Officer's Society may also provide personal protection services, such as bodyguard services.</p>
                                    <div class="btn-box">
                                        <a href="service-details" class="theme-btn btn-two">Read&nbsp;More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('uploaded/gallery/photo-2.jpeg')}}" alt=""></figure>
                                    <div class="category"><span class="gradient-color">Domestic</span></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details">Infidelity Investigation</a></h3>
                                    <p> Indian Officer's Society may also provide personal protection services, such as bodyguard services.</p>
                                    <div class="btn-box">
                                        <a href="service-details" class="theme-btn btn-two">Read&nbsp;More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('uploaded/gallery/photo-3.jpeg')}}" alt=""></figure>
                                    <div class="category"><span class="gradient-color">Domestic</span></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details">Surveillance Services</a></h3>
                                    <p> Indian Officer's Society may also provide personal protection services, such as bodyguard services.</p>
                                    <div class="btn-box">
                                        <a href="service-details" class="theme-btn btn-two">Read&nbsp;More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-sectione end -->

        <!-- funfact-section -->
        <section class="funfact-section">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon gradient-color"><i class="icon-12"></i></div>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="225">0</span><span>+</span>
                            </div>
                            <h3>Team members</h3>
                        </div>
                    </div>

                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon gradient-color"><i class="icon-8"></i></div>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="15">0</span><span> years</span>
                            </div>
                            <h3>Of Stablishment</h3>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon gradient-color"><i class="icon-7"></i></div>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="98">0</span><span>%</span>
                            </div>
                            <h3>Project Success</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section pt_150">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box mr_40">
                            <div class="sec-title mb_25">
                                <span class="sub-title">Testimonials</span>
                            </div>
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                <div class="testimonial-block-one">
                                    <div class="text-box pb_35 mb_35">
                                        <div class="text">“The ndian Officer's Society should provide value for the client investment. They should be cost-effective and efficient.”</div>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-18"></i></li>
                                        </ul>
                                    </div>
                                    <div class="author-box">
                                        <figure class="thumb-box"><img src="{{asset('assets/fronted/images/resource/testimonial-1.png')}}" alt=""></figure>
                                        <h3>Ronald Richards</h3>
                                        <span class="designation">Service taker</span>
                                    </div>
                                </div>
                                <div class="testimonial-block-one">
                                    <div class="text-box pb_35 mb_35">
                                        <div class="text">“The ndian Officer's Society should provide value for the client investment. They should be cost-effective and efficient.”</div>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-18"></i></li>
                                        </ul>
                                    </div>
                                    <div class="author-box">
                                        <figure class="thumb-box"><img src="{{asset('assets/fronted/images/resource/testimonial-1.png')}}" alt=""></figure>
                                        <h3>Ronald Richards</h3>
                                        <span class="designation">Service taker</span>
                                    </div>
                                </div>
                                <div class="testimonial-block-one">
                                    <div class="text-box pb_35 mb_35">
                                        <div class="text">“The ndian Officer's Society should provide value for the client investment. They should be cost-effective and efficient.”</div>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-19"></i></li>
                                            <li><i class="icon-18"></i></li>
                                        </ul>
                                    </div>
                                    <div class="author-box">
                                        <figure class="thumb-box"><img src="{{asset('assets/fronted/images/resource/testimonial-1.png')}}" alt=""></figure>
                                        <h3>Ronald Richards</h3>
                                        <span class="designation">Service taker</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box pr_50 pb_50 ml_40">
                            <div class="image-shape rotate-me" style="background-image: url({{asset('assets/fronted/images/shape/shape-5.png')}});"></div>
                            <figure class="image"><img src="{{asset('assets/fronted/images/service/service-3.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->

        <!-- faq-section -->
        <section class="faq-section sec-pad mt-0 pt-0">
            <div class="bg-layer" style="background-image: url({{asset('assets/fronted/images/background/faq-bg.jpg')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-6 content-column">
                        <div class="content-box ml_45">
                            <div class="sec-title mb_60">
                                <span class="sub-title">Faq’s</span>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-box"><i class="icon-5"></i></div>
                                        <h4>Quick Response</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <p>Sodales posuere facilisi metus elementum ipsum egestas amet amet mattis commodo Nunc tempor amet massa diam mauris Risus sodales interdum.</p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-5"></i></div>
                                        <h4>Experience Consultant</h4>
                                    </div>
                                    <div class="acc-content">
                                        <p>Sodales posuere facilisi metus elementum ipsum egestas amet amet mattis commodo Nunc tempor amet massa diam mauris Risus sodales interdum.</p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-5"></i></div>
                                        <h4>Flexible Payment</h4>
                                    </div>
                                    <div class="acc-content">
                                        <p>Sodales posuere facilisi metus elementum ipsum egestas amet amet mattis commodo Nunc tempor amet massa diam mauris Risus sodales interdum.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title mb_50 centred">
                    <span class="sub-title">Our Article</span>
                    <h2>Get More Update From <br />Our Article</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details"><img src="{{asset('assets/fronted/images/news/news-1.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="date">16 <span>APR</span></div>
                                    <ul class="post-info mb_13 clearfix">
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="blog-details">Admin</a></li>
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">0 Cmnts</li>
                                    </ul>
                                    <h3><a href="blog-details">How to Manage Risk Monitoring Security</a></h3>
                                    <p>Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                                    <div class="link">
                                        <a href="blog-details"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details"><img src="{{asset('assets/fronted/images/news/news-2.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="date">14 <span>APR</span></div>
                                    <ul class="post-info mb_13 clearfix">
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="blog-details">Admin</a></li>
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">2 Cmnts</li>
                                    </ul>
                                    <h3><a href="blog-details">Famous Cases Solved by  Indian Officer's Society</a></h3>
                                    <p>Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                                    <div class="link">
                                        <a href="blog-details"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details"><img src="{{asset('assets/fronted/images/news/news-3.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="date">13 <span>APR</span></div>
                                    <ul class="post-info mb_13 clearfix">
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="blog-details">Admin</a></li>
                                        <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">5 Cmnts</li>
                                    </ul>
                                    <h3><a href="blog-details">How  Indian Officer's Society Conduct Surveillance</a></h3>
                                    <p>Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                                    <div class="link">
                                        <a href="blog-details"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- cta-section -->
        <section class="cta-section pt_90 pb_100">
            <figure class="image-layer"><img src="{{asset('assets/fronted/images/resource/men-1.png')}}" alt=""></figure>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                        <div class="content-box">
                            <h2>Contact Indian officers Society Newyork police</h2>
                            <a href="contact" class="theme-btn btn-one">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->

@endSection
