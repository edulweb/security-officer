@extends('layouts.main')
@section('title', 'New Details')
@section('mainContent')

        <!-- sidebar-page-container -->
        <section class="sidebar-page-container py-5">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('uploaded/gallery/photo-1.jpeg')}}" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="date">16 <span>APR</span></div>
                                        <ul class="post-info mb_13 clearfix">
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-4.svg')}}" alt=""><a href="news-details">Admin</a></li>
                                            <li><img src="{{asset('assets/fronted/images/icons/icon-5.svg')}}" alt="">0 Cmnts</li>
                                        </ul>
                                        <h3>How to Manage Risk Monitoring Security</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus ornare non non massa elit rutrum. Erosie proin nibh neque interdum accumsan, neque vitae. Tortor etiam sed suspendisse faucibus ac volutpati mattis tortor nec. Orc velit a, posuere turpis amet. Lectus lacus lectus habitasse amet quam libero, and lorem. Volutpat odio maecenas viverra consequat condimentum diam donec aliquet. Natoque quam id vitae leo risus. Eget neque proin in dolor cursus bibendum urna dictum. Aliquam gravida et proin donen maecenas quis faucibus varius tristique.</p>
                                        <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamcorper. Et nunc scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu quis. Nunc euismod odio and cursus in diam eget tincidunt mauris.</p>
                                        <ul class="list-item clearfix">
                                            <li>Platea sed fames at egestas amet feugiat laoreet</li>
                                            <li>Duis et enim justo, in mauris posuere dolor magnis felis sapien sit egestas. Ut venenatis faucibus non sed faucibus mauris ultricies.</li>
                                            <li>Mauris donec ociis et magnis sapien etiam sapien sagittis congue tempor gravida done</li>
                                            <li>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content-one mb_35">
                                <blockquote>
                                    <div class="icon-box gradient-color"><i class="icon-21"></i></div>
                                    <h5>“Lorem ipsum dolor sit amet, consectetur adipiscing elit amet purus tempor dui pharet consequat nibh elit urna interdum viera quam and arcu duis quis lectus donec nulla aliquam</h5>
                                    <div class="author-inner">
                                        <figure class="thumb-box"><img src="{{asset('assets/fronted/images/news/author-1.jpg')}}" alt=""></figure>
                                        <h3>Ronald Richards</h3>
                                        <span class="designation">Service taker</span>
                                    </div>
                                </blockquote>
                                <div class="text-box">
                                    <h3>How to know your credit score</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus ornare non non massa elit rutrum. Erosie proin nibh neque interdum accumsan, neque vitae. Tortor etiam sed suspendisse faucibus ac volutpati mattis tortor nec. Orc velit a, posuere turpis amet. Lectus lacus lectus habitasse amet quam libero, and lorem. Volutpat odio maecenas viverra consequat condimentum diam donec aliquet. Natoque quam id vitae leo risus. Eget neque proin in dolor cursus bibendum urna dictum. Aliquam gravida et proin donen maecenas quis faucibus varius tristique.</p>
                                    <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamcorper. Et nunc scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu quis. Nunc euismod odio and cursus in diam eget tincidunt mauris.</p>
                                </div>
                            </div>
                            <div class="content-two mb_45">
                                <div class="image-box mb_40">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image"><img src="{{asset('assets/fronted/images/news/news-18.jpg')}}" alt=""></figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image"><img src="{{asset('assets/fronted/images/news/news-19.jpg')}}" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>When you pay your credit card bill</h3>
                                    <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamcorper. Et nunc scelerisque turpisdi facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu quis. Nunc euismod odio ani cursus in diam eget tincidunt mauris.  Volutpat odio maecenas viverra consequat condimentum diam donec aliquet. Natoque quam id vitae leo risus. Eget neque proin in dolor cursus bibendum</p>
                                </div>
                            </div>
                            <div class="post-tags mb_50">
                                <ul class="tags-list clearfix">
                                    <li><p>Tags:</p></li>
                                    <li><a href="news-details">Activities</a></li>
                                    <li><a href="news-details">Depertment</a></li>
                                    <li><a href="news-details">City</a></li>
                                    <li><a href="news-details">Certificate</a></li>
                                </ul>
                            </div>
                            <div class="author-box mb_50">
                                <figure class="author-thumb"><img src="{{asset('assets/fronted/images/news/author-2.jpg')}}" alt=""></figure>
                                <h4>Sandra Bullock</h4>
                                <span class="designation">About Author</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit amet sit purus tempor dui pharetra consequat nibh elit urna interdum viera quam.</p>
                            </div>
                            <div class="comment-form">
                                <h3>Leave A Comments</h3>
                                <form method="post" action="blog-details" class="default-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Your name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Your email" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Type message"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
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
