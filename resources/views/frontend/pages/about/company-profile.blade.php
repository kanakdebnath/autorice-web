@extends('frontend.layouts.frontMaster')
@section('title', 'Company Profile')
@section('content')

    <div style="background-color: #6d685a30;">

        <div class="m" style="background-color: #193251;">
            <div class="container" style="padding:0px;">
                <div class="h" style="background-color: #0c294c; margin-top: 48px; padding: 10px;">
                    <div class="page_info">
                        <div class="crumbs">
                            You are here:
                            <a href="{{ route('front.index') }}">Home</a> »
                            <span><a href="{{ route('about.us') }}">About-Us</a> » </span>
                            <span class="current text-success">Company Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container about" style=" margin-top: 50px; background-color: #fff; border: 1px solid #d7d7d7; ">

            <div class="row section-header">
                <div class="col">
                    <h1 class="section-title">Company<b> Profile</b></h1>
                    <img src="{{ asset('frontend/assets/images/rarm-about-icon.png') }}" class="img-responsive"
                        alt="Rice Exporter">
                </div>
            </div>

            <div class="row no-margin el">
                <div class="col-md-12">
                    <iframe
                        src="https://docs.google.com/presentation/d/e/2PACX-1vRjY1j5Gfs6VRILQ-uEQttU447ZFKZ1syL8x7VYTfVwdv_5jCGDAeV_e8kzFrJmCIxThliTqdzHFN6M/embed?start=true&amp;loop=true&amp;delayms=5000"
                        frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"
                        style="width:100%;height:652px;"></iframe>
                </div>
            </div>

        </section>

        <div style="height: 50px; background-color: none;"></div>
    </div>


@endsection
