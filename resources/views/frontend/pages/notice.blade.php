@extends('frontend.layouts.frontMaster')

@section('content')
    <div class="container-fluid" style="background-color: #6d685a30; padding-left: 0px; padding-right: 0px; ">

        <div class="m" style="background-color: #193251;">
            <div class="container"style="padding:0px;">
                <div class="h" style="background-color: #0c294c; margin-top: 48px; padding: 10px;">
                    <div class="page_info">
                        <div class="crumbs">You are here: <a href="{{ route('front.index') }}"> Home</a> » <span
                                class="current text-success">Notice</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section class="container noti" style="background-color: #fff; border: 1px solid #d7d7d7;  margin-top: 50px;">

            <div class="section-header">
                <h1 class="section-title"><b>Notice Board</b></h1>
                <img src="{{ asset('frontend/assets/images/rarm-about-icon.png') }}" class="img-responsive"
                    alt="Rice Exporter">
            </div>

            @foreach ($notices as $notice)
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-3">{{ $notice->title }}</h2>
                    </div>

                    <div class="col-lg-4 col-md-6" style="padding: 0;">
                        <img class="img-fluid" src="{{ asset('image/uploads/notice/thumbnail/' . $notice->photo) }}"
                            alt="{{ $notice->title }}">
                    </div>
                    <div class="col-lg-8 col-md-6">
                        {!! $notice->description !!}
                    </div>

                </div>
                <hr>
            @endforeach




        </section>

    </div>
@endsection
