@extends('frontend.layouts.frontMaster')
@section('title', 'Gallery')
@section('content')
    <section style="background-color: #6d685a30;">

        <div class="m" style="background-color: #193251;">
            <div class="container" style="padding:0px;">
                <div class="h" style="background-color: #0c294c; margin-top: 48px; padding: 10px;">
                    <div class="page_info">
                        <div class="crumbs">You are here: <a href="{{ route('front.index') }}">Home</a>
                            » <span class="current text-success">Gallery</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container gall" style=" margin-top: 50px; background-color: #fff; border: 1px solid #d7d7d7;">

            <div class="row section-header">
                <h1 class="section-title"><b>Gallery</b></h1>
                <img src="{{ asset('frontend/assets/images/rarm-process-icon.png') }}" class="img-responsive"
                    alt="Rice Exporter">
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="mb-3" style="text-align: right"><strong>Total: {{ count($galleries) }} images</strong>
                    </div>
                </div>

                @foreach ($galleries as $gallery)
                    <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                        <a href="/" data-lightbox="photos" data-title="Raipur Auto Rice Mills Gallery">
                            <img class="img-fluid" src="{{ asset('image/uploads/gallery/thumbnail/' . $gallery->photo) }}"
                                alt="Raipur Auto Rice Mills Gallery">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div style="height: 50px; background-color: none;"></div>
    </section>
@endsection
