@extends('layouts.main')
@section('title', 'Photos Gallery')
@section('mainContent')
        <!-- case-section -->
        <section class="case-section case-page centred">
            <div class="auto-container">
                <div class="sec-title mb_60">
                    <span class="sub-title">Recent Pictures</span>
                    <h2>Checkout Our Recently <br />Case Pictures</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" alt=""></figure>
                                <div class="view-btn"><a href="{{asset('uploaded/gallery/photo-1.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-5"></i></a></div>
                                <div class="content-box">
                                    <div class="shape">
                                        <div class="shape-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-12.png')}});"></div>
                                        <div class="shape-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-13.png')}});"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('uploaded/gallery/thumbnail-2.jpeg')}}" alt=""></figure>
                                <div class="view-btn"><a href="{{asset('uploaded/gallery/photo-2.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-5"></i></a></div>
                                <div class="content-box">
                                    <div class="shape">
                                        <div class="shape-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-12.png')}});"></div>
                                        <div class="shape-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-13.png')}});"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('uploaded/gallery/thumbnail-3.jpeg')}}" alt=""></figure>
                                <div class="view-btn"><a href="{{asset('uploaded/gallery/photo-3.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-5"></i></a></div>
                                <div class="content-box">
                                    <div class="shape">
                                        <div class="shape-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-12.png')}});"></div>
                                        <div class="shape-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-13.png')}});"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('uploaded/gallery/thumbnail-4.jpeg')}}" alt=""></figure>
                                <div class="view-btn"><a href="{{asset('uploaded/gallery/photo-4.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-5"></i></a></div>
                                <div class="content-box">
                                    <div class="shape">
                                        <div class="shape-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-12.png')}});"></div>
                                        <div class="shape-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-13.png')}});"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('uploaded/gallery/thumbnail-5.jpeg')}}" alt=""></figure>
                                <div class="view-btn"><a href="{{asset('uploaded/gallery/photo-5.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-5"></i></a></div>
                                <div class="content-box">
                                    <div class="shape">
                                        <div class="shape-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-12.png')}});"></div>
                                        <div class="shape-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-13.png')}});"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('uploaded/gallery/thumbnail-6.jpeg')}}" alt=""></figure>
                                <div class="view-btn"><a href="{{asset('uploaded/gallery/photo-6.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-5"></i></a></div>
                                <div class="content-box">
                                    <div class="shape">
                                        <div class="shape-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-12.png')}});"></div>
                                        <div class="shape-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-13.png')}});"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- case-section end -->


        <!-- cta-section -->
        <section class="cta-section pt_90 pb_100">
            <figure class="image-layer"><img src="{{asset('assets/fronted/images/resource/men-1.png')}}" alt=""></figure>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                        <div class="content-box">
                            <h2>Get Professional security service.</h2>
                            <a href="{{url('/contact')}}" class="theme-btn btn-one">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->

@endSection
