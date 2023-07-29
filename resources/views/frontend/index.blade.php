@extends('frontend.layouts.frontMaster')
@section('title', 'Quality Rice')
@section('content')
    <section class="first-slider">
        <div class="container-fluid" style="width: 100%; margin: 0; padding: 0;">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#" data-slide-to="0" class="active"></li>
                    <li data-target="#" data-slide-to="1"></li>
                    <li data-target="#" data-slide-to="2"></li>
                    <li data-target="#" data-slide-to="3"></li>
                    <li data-target="#" data-slide-to="4"></li>
                    <li data-target="#" data-slide-to="5"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : ' ' }}">
                            <img src="{{ asset('image/uploads/sliders/orginal/' . $slider->photo) }}"
                                alt="{{ $slider->title }}" style="width: 100%; height: auto;">

                            <div class="container_24">
                                <div class="grid_24">
                                    <div class="flex-caption-wrapper">
                                        <div class="flex-caption">
                                            <h1>{{ $slider->title }}</h1><br>
                                            <p> {!! $slider->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>


                <!-- Left and right controls -->
                <a class="carousel-control-prev flex-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon flexslider-prev"></span>
                </a>
                <a class="carousel-control-next flex-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon flexslider-next"></span>
                </a>
            </div>
        </div>
    </section>

    <!--end slider-->
    <div class="container first" style="margin-top: 50px;">
        <section class="owner-section">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-bottom: 50px;">
                    <div class="for-you" style="text-align: justify;">
                        {!! get_option('we_are_for_you') !!}
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-bottom: 50px;">
                    {!! get_option('owner_message') !!}
                </div>
            </div>
        </section>
    </div>


    <div class="clear"></div>

    {{-- Products --}}
    <div class="container sim">
        <div>
            <section>
                <div>
                    <div class="container ">
                        <div class="text-center">
                            <h5 class="feature_main_heading"
                                style="font: 20px/1.7 'Raleway', sans-serif; margin-top: 50px; margin-bottom: 75px;">
                                Our
                                <b>Products !!</b>
                            </h5>
                        </div>
                        <div class="slider autoplay ">
                            @foreach ($products as $product)
                                <div class="s-b text-center">
                                    <img src="{{ asset('image/uploads/products/thumbnail/' . $product->photo) }}"
                                        alt="r1.jpg">
                                    <h3 style="margin-top: 20px; margin-bottom: 10px;"><b>{{ $product->name }}</b></h3>
                                    <a href="tel:+8801733138179" class="btn btn-primary"
                                        style="padding: 5px; background: #0c294ce8">
                                        <img src="{{ asset('frontend/assets/images/cart.png') }}" alt="cart.png">
                                        <span class="btn-text"> Cart</span>
                                    </a>
                                </div>
                            @endforeach



                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </div>


    <div class="clear"></div>

    <section>
        <div class="clear"></div>
        <section id="prim" class="content-full-width nim" style="margin: 0px 0px 0px!important;">
            <div class="container third">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-12"
                        style="margin-bottom: 50px;margin-top: 50px; padding: 0;">
                        <div class="border-title">
                            <h2 style="color: #000; font-size: 20px; font-weight: 500;"> Our <b>Services</b> </h2>
                        </div>
                        <div class="collapse-one" style=" height: 544px; overflow: auto; ">
                            <div id="accordion">

                                @foreach ($services as $key => $service)
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse"
                                                href="#collapseOne_{{ $service->id }}">
                                                <img src="{{ asset('frontend/assets/images/CASE-STUDIES.png') }}"
                                                    alt="CASE-STUDIES.png">
                                                {{ $service->title }}
                                            </a>
                                        </div>
                                        <div id="collapseOne_{{ $service->id }}"
                                            class="collapse {{ $key == 0 ? 'show' : '' }}" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>{!! $service->description !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-12" style="padding: 0; margin-top: 50px;">
                        <div class="column one-half last">
                            <div class="border-title">
                                <h2 style="color: #000; font-size: 20px; font-weight: 500;"> Why <b>With Us </b> </h2>
                            </div>
                            <div class="testimonial">
                                <blockquote style=" margin-top: 0; height: auto; min-height: 516px;">
                                    <ol style="list-style-type:circle;">

                                        {!! get_option('why_with_us') !!}

                                    </ol>
                                </blockquote>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="clear"></div>
            </div>

        </section>




        <section>
            <div class="main-page-wrapper">
                <div class="latest-news wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="feature_main_heading_wrapper">
                        <h1 class="feature_main_heading" style=" padding: 52px 0 0px 0;margin-bottom: 0px; color: #000;">
                            For
                            <b>Communication !!</b>
                        </h1>
                    </div>
                    <div class="container">

                        <div class="row">
                            @foreach ($communications as $communication)
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s"
                                    data-wow-duration=".5s"
                                    style="visibility: visible; animation-duration: 0.5s; animation-delay: 1.1s; animation-name: fadeInLeft;">

                                    <div class="single-post">

                                        <figure class="effect-winston"> <img
                                                src="{{ asset('image/uploads/communication/thumbnail/' . $communication->photo) }}"
                                                alt="{{ $communication->name }}">

                                            <figcaption>

                                                <p>
                                                    <a href="{{ $communication->fb_link }}" target="_blank"><i
                                                            class="fab fa-facebook" alt="Rafaet Hossain"></i></a>
                                                    <a href="{{ $communication->linkedin_link }}" target="_blank"
                                                        alt="Rafaet Hossain"><i class="fab fa-linkedin"></i></a>
                                                </p>

                                            </figcaption>

                                        </figure>

                                        <div class="post">
                                            <a href="#"><span>
                                                    <strong>{{ ucfirst($communication->name) }}</strong>
                                                </span>
                                            </a>
                                            <br>


                                            <div class="num" style="color: #000000c7;">{!! $communication->details !!} </div>

                                            <a href="tel:+8801712552009"
                                                style="width: 100%;text-align:center;font-family: arial; background: -webkit-linear-gradient(#014ba2, #0b2748);  padding: 5px 18px;background: linear-gradient(#014ba2, #0b2748);border: 2px solid #003779;font-size: 24px;font-weight: 700;border-radius: 27px;color: #f4f4f4;text-shadow: 3px 1px 2px black;    display: block;">Call
                                                +88{{ $communication->phone }}</a>
                                            <br><br>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
