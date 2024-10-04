@extends('layouts.main')
@section('title', 'Service Details')
@section('mainContent')
        <!-- service-details -->
        <section class="service-details my-5">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-one mb_70">
                                <figure class="image-box mb_35"><img src="{{asset('uploaded/gallery/photo-2.jpeg')}}" alt=""></figure>
                                <div class="text-box">
                                    <h2>Service Summery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo semila diam et, sollicitudin eget. Tellus velit etiam elit, mi pretium eu. Suspendisse imperdiet enim ornare elit, eu vestibulum enim imperdiet vives Element um habitant non mi est nec nunc. Orci odio dignissim</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo semila diam et, sollicitudin eget. Tellus velit etiam elit, mi pretium eu. Suspendisse imperdiet enim ornare elit, eu velit etiam elit, mi pretium euro. Suspendisse imperdiet enim ornare elit, eu vestibulum enim imperdiet vives Element um habitant non mi est nec nunc. Orci odio dignissim</p>
                                </div>
                            </div>
                            <div class="content-two mb_70">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="{{asset('assets/fronted/images/service/service-12.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                        <div class="text-box ml_30">
                                            <h2>What is included</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur. Nam quis bibendsum lacinia into. Quisque porttitor tortor blandit nunc sed ac id.</p>
                                            <ul class="list-style-one clearfix">
                                                <li>Corporate event security</li>
                                                <li>Consultation Professional identification</li>
                                                <li>Diffusing Anti-Social Behaviour</li>
                                                <li>Prevent the condition from worsening</li>
                                                <li>Extra security equipment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-three mb_70">
                                <div class="text-box mb_40">
                                    <h2>Service Features</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo semila diam et, sollicitudin eget. Tellus velit etiam elit, mi pretium eu. Suspendisse imperdiet enim ornare elit, eu vestibulum enim imperdiet vives Element um habitant non mi est nec nunc. Orci odio dignissim</p>
                                </div>
                            </div>
                            <div class="content-four">
                                <div class="text-box">
                                    <h2>Related Case</h2>
                                </div>
                                <div class="image-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image-box"><a href="case-details"><img src="{{asset('assets/fronted/images/service/service-13.jpg')}}" alt=""></a></figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image-box"><a href="case-details"><img src="{{asset('assets/fronted/images/service/service-14.jpg')}}" alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar mr_40">

                            <div class="support-widget">
                                <div class="shape" style="background-image: url({{asset('assets/fronted/images/shape/shape-16.png')}});"></div>
                                <figure class="image-layer"><img src="{{asset('assets/fronted/images/resource/men-2.png')}}" alt=""></figure>
                                <h3>Need Help <br />Call Us</h3>
                                <p>Amet minim mollit non deserunt est sit aliqua</p>
                                <div class="phone-box">
                                    <div class="icon-box"><div class="icon gradient-color"><i class="icon-20"></i></div></div>
                                    <a href="tel:7045552130XXX">(704)&nbsp;555-213-0XXX</a>
                                </div>
                            </div>

                            <figure class="image-layer mt-5"><img src="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" alt="" class="w-100"></figure>
                            <figure class="image-layer mt-5 d-none d-md-block"><img src="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" alt="" class="w-100"></figure>
                            <figure class="image-layer mt-5 d-none d-md-block"><img src="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" alt="" class="w-100"></figure>
                            <figure class="image-layer mt-5 d-none d-md-block"><img src="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" alt="" class="w-100"></figure>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- service-details end -->
@endSection
