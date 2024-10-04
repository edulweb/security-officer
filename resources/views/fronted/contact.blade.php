
@extends('layouts.main')
@section('title', 'Contact Us')
@section('mainContent')

        <!-- contact-style-two -->
        <section class="contact-style-two py-5">
            <div class="bg-layer" style="background-image: url({{asset('assets/fronted/images/background/contact-bg.jpg')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content_block_seven">
                            <div class="content-box">
                                <div class="sec-title mb_60">
                                    <span class="sub-title">Contact Us</span>
                                    <h2>Contact Info</h2>
                                </div>
                                <div class="inner-box pb_20">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="{{asset('assets/fronted/images/icons/icon-14.svg')}}" alt=""></div>
                                                <h5>Head Office:</h5>
                                                <p>123-12 Jamaica Ave, Richmond Hill, NY, 11418, PO BOX 1155</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="{{asset('assets/fronted/images/icons/icon-15.svg')}}" alt=""></div>
                                                <h5>Opening Hours:</h5>
                                                <p>Mon - Fri  8:00AM - 6:00PM</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="{{asset('assets/fronted/images/icons/icon-16.svg')}}" alt=""></div>
                                                <h5>Phone No:</h5>
                                                <p><a href="tel:913336660XXX">(+91) 333 666 0XXX</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><img src="{{asset('assets/fronted/images/icons/icon-17.svg')}}" alt=""></div>
                                                <h5>Email:</h5>
                                                <p><a href="mailto:indianofficerssociety@gmail.com">indianofficerssociety@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="contact"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="contact"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="contact"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="contact"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 left-column">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" name="username" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Phone</label>
                                            <input type="text" name="phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 right-column">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Contact With Us</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->
@endSection
