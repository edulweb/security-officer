@extends('layouts.main')
@section('title', 'News')
@section('mainContent')

        <!-- sidebar-page-container -->
        <section class="sidebar-page-container py-5">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-standard-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="news-details"><img src="{{asset('uploaded/gallery/photo-1.jpeg')}}" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="date">16 <span>APR</span></div>
                                        <ul class="post-info mb_13 clearfix">
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="news-details">Admin</a></li>
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">0 Cmnts</li>
                                        </ul>
                                        <h3><a href="news-details">How to Manage Risk Monitoring Security</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel non ultricies vulputate quis. Fames amet urna molestie amet suspendisse.</p>
                                        <div class="link">
                                            <a href="news-details"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="news-details"><img src="{{asset('uploaded/gallery/photo-2.jpeg')}}" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="date">15 <span>APR</span></div>
                                        <ul class="post-info mb_13 clearfix">
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="news-details">Admin</a></li>
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">6 Cmnts</li>
                                        </ul>
                                        <h3><a href="news-details">Investing Security Services is Crucial for You</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel non ultricies vulputate quis. Fames amet urna molestie amet suspendisse.</p>
                                        <div class="link">
                                            <a href="news-details"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="news-details"><img src="{{asset('uploaded/gallery/photo-3.jpeg')}}" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="date">14 <span>APR</span></div>
                                        <ul class="post-info mb_13 clearfix">
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="news-details">Admin</a></li>
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">3 Cmnts</li>
                                        </ul>
                                        <h3><a href="news-details">How Professional Service Can Mitigate Risks</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel non ultricies vulputate quis. Fames amet urna molestie amet suspendisse.</p>
                                        <div class="link">
                                            <a href="news-details"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="news-details"><img src="{{asset('uploaded/gallery/photo-4.jpeg')}}" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="date">13 <span>APR</span></div>
                                        <ul class="post-info mb_13 clearfix">
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="news-details">Admin</a></li>
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">4 Cmnts</li>
                                        </ul>
                                        <h3><a href="news-details">How  Indian Officer's Society Conduct Surveillance</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel non ultricies vulputate quis. Fames amet urna molestie amet suspendisse.</p>
                                        <div class="link">
                                            <a href="news-details"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="news-details"><img src="{{asset('uploaded/gallery/photo-5.jpeg')}}" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="date">12 <span>APR</span></div>
                                        <ul class="post-info mb_13 clearfix">
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="news-details">Admin</a></li>
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">3 Cmnts</li>
                                        </ul>
                                        <h3><a href="news-details">Famous Cases Solved by  Indian Officer's Society</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel non ultricies vulputate quis. Fames amet urna molestie amet suspendisse.</p>
                                        <div class="link">
                                            <a href="news-details"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar ml_20">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-form">
                                    <form method="post" action="news">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search..." required>
                                            <button type="submit"><i class="icon-22"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="news-details">City News</a></li>
                                        <li><a href="news-details">Government</a></li>
                                        <li><a href="news-details">Development</a></li>
                                        <li><a href="news-details">Tourism</a></li>
                                        <li><a href="news-details">Culture</a></li>
                                        <li><a href="news-details">Community</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Latest News</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="news-details"><img src="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" alt=""></a></figure>
                                        <h6><a href="news-details">Self-Guided Driving & Tours Walk</a></h6>
                                        <span class="post-date"><img src="{{asset('assets/fronted/images/icons/icon-13.svg')}}" alt=""> Apr 17, 2022</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="news-details"><img src="{{asset('uploaded/gallery/thumbnail-2.jpeg')}}" alt=""></a></figure>
                                        <h6><a href="news-details">How to Manage Risk Monitoring Security</a></h6>
                                        <span class="post-date"><img src="{{asset('assets/fronted/images/icons/icon-13.svg')}}" alt=""> Apr 17, 2022</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="news-details"><img src="{{asset('uploaded/gallery/thumbnail-3.jpeg')}}" alt=""></a></figure>
                                        <h6><a href="news-details">Investing Security Services is Crucial</a></h6>
                                        <span class="post-date"><img src="{{asset('assets/fronted/images/icons/icon-13.svg')}}" alt=""> Apr 17, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget gallery-widget">
                                <div class="widget-title">
                                    <h3>Photo Gallery</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="image-list clearfix">
                                        <li>
                                            <figure class="image"><a href="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{asset('uploaded/gallery/thumbnail-1.jpeg')}}" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{asset('uploaded/gallery/thumbnail-2.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{asset('uploaded/gallery/thumbnail-2.jpeg')}}" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{asset('uploaded/gallery/thumbnail-3.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{asset('uploaded/gallery/thumbnail-3.jpeg')}}" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{asset('uploaded/gallery/thumbnail-4.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{asset('uploaded/gallery/thumbnail-4.jpeg')}}" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{asset('uploaded/gallery/thumbnail-5.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{asset('uploaded/gallery/thumbnail-5.jpeg')}}" alt=""></a></figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{asset('uploaded/gallery/thumbnail-6.jpeg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{asset('uploaded/gallery/thumbnail-6.jpeg')}}" alt=""></a></figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->

@endSection
