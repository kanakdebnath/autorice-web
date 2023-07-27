@extends('frontend.layouts.frontMaster')
@section('title', 'Process')

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
                            <span class="current text-success">Process</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <section class="container process-pro"
            style="margin-top: 50px; background-color: #fff; border: 1px solid #d7d7d7; ">

            <div class="sFeatLayout">



                <div class="row section-header">
                    <div class="col">
                        <h1 class="section-title">Rice <b>Procurement & Milling Process</b></h1>
                        <img src="{{ asset('frontend/assets/images/rarm-process-icon.png') }}" class="img-responsive"
                            alt="Rice Exporter">
                    </div>
                </div>



                {!! get_about_value('process') !!}


            </div> <!-- /.sFeatLayout -->

        </section>

        <div style="height: 50px; background-color: none;"></div>

    </div>


@endsection
