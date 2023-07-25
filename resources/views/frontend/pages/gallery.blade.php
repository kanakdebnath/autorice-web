@extends('frontend.layouts.frontMaster')
@section('title', 'Gallery')
@section('content')
    <section style="background-color: #6d685a30;">

        <div class="m" style="background-color: #193251;">
            <div class="container" style="padding:0px;">
                <div class="h" style="background-color: #0c294c; margin-top: 48px; padding: 10px;">
                    <div class="page_info">
                        <div class="crumbs">You are here: <a href="index.html">Home</a>
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
                    <div class="mb-3" style="text-align: right"><strong>Total: 17 images</strong></div>
                </div>

                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202404.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202404.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202526.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202526.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202530.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202530.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202601.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202601.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202604.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202604.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202615.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202615.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202621.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202621.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202626.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202626.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202630.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202630.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202634.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202634.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202638.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202638.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202642.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202642.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108202646.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108202646.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108213423.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108213423.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200108214328.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200108214328.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12 mb-4 text-center">
                    <a href="public/uploads/20200109123630.jpg" data-lightbox="photos"
                        data-title="Raipur Auto Rice Mills Gallery">
                        <img class="img-fluid" src="{{ asset('frontend/uploads/thumbs/20200109123630.jpg') }}"
                            alt="Raipur Auto Rice Mills Gallery">
                    </a>
                </div>

            </div>


        </div>

        <div style="height: 50px; background-color: none;"></div>

    </section>



@endsection
