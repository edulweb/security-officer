@extends('layouts.main')
@section('title', 'Page Not Found')
@section('mainContent')
        <!-- error-section -->
        <section class="error-section centred sec-pad-3">
            <div class="auto-container">
                <div class="content-box">
                    <figure class="image-box"><img style="height: 200px" src="{{asset('assets/fronted/images/icons/error-1.png')}}" alt=""></figure>
                    <h2>Oops! That Page Can Not <br />be Found.</h2>
                    <a href="{{url('/')}}" class="theme-btn btn-one">Back to Homepage</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->

@endSection
