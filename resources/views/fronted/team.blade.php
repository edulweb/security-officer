@extends('layouts.main')
@section('title', 'Out Team')
@section('mainContent')

        <!-- team-style-three -->
        <section class="team-style-three team-page centred pt-3">
            <div class="auto-container">
                <div class="sec-title mb_50">
                    <span class="sub-title">Members</span>
                    <h2>Members directory</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-three wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-1.jpg')}}" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="team-details">Marvin McKiney</a></h3>
                                    <span class="designation">Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-three wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-2.jpg')}}" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="team-details">Albert Flores</a></h3>
                                    <span class="designation">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-three wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-3.jpg')}}" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="team-details">Annette Black</a></h3>
                                    <span class="designation">Members</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-three wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-4.jpg')}}" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="team-details">Annette Black</a></h3>
                                    <span class="designation">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-three wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-5.jpg')}}" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="team-details">Bessie Cooper</a></h3>
                                    <span class="designation">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-three wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('assets/fronted/images/team/team-6.jpg')}}" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="team-details">Ralph Edwards</a></h3>
                                    <span class="designation">Members</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-style-three end -->


        <!-- faq-style-two -->
        <section class="faq-style-two bg-color-1 sec-pad">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{asset('assets/fronted/images/shape/shape-14.png')}});"></div>
                <div class="pattern-2" style="background-image: url({{asset('assets/fronted/images/shape/shape-15.png')}});"></div>
            </div>
            <figure class="image-layer"><img src="{{asset('assets/fronted/images/resource/women-1.png')}}" alt=""></figure>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box mr_30">
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
        <!-- faq-style-two end -->

@endSection
