@extends('frontend.layouts.frontMaster')

@section('title', 'Contact Us')
@section('content')


    <div style="background-color: #6d685a30;">

        <div class="m" style="background-color: #193251;">
            <div class="container" style="padding:0px;">
                <div class="h" style="background-color: #0c294c; margin-top: 48px; padding: 10px;">
                    <div class="page_info">
                        <div class="crumbs">
                            You are here:
                            <a href="{{ route('front.index') }}">Home</a> »
                            <a class="text-success">Contact-Us</a>
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
                        <h1 class="section-title"><b>Contact-Us</b></h1>
                        <img src="{{ asset('frontend/assets/images/rarm-about-icon.png') }}" class="img-responsive"
                            alt="Rice Exporter">
                    </div>
                </div>
                <div class="map" style="padding: 35px; ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14391.685353241079!2d88.695169!3d25.60753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4dd55a50040e7a2!2sRaipur+Auto+Rice+Mills+-+Rafusoft!5e0!3m2!1sen!2sbd!4v1547209683292"
                        style="width: 100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <hr>

                <div class="container forms">

                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-7 contact-us">
                                @if (Session::has('msg'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ session('msg') }}</strong>
                                    </div>
                                @endif
                                <h2 class="text-center ">Contact Us</h2>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control form-control-sm"
                                            placeholder="Enter your name.">
                                        @error('name')
                                            <p class="position-absolute text-danger">
                                                <small>
                                                    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                                                </small>
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control form-control-sm"
                                            placeholder="Enter your email.">
                                        @error('email')
                                            <p class="position-absolute text-danger">
                                                <small>
                                                    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                                                </small>
                                            </p>
                                        @enderror
                                    </div>
                                </div>


                                <label for="" class="mt-4">Phone</label>
                                <input type="number" name="phone" class="form-control form-control-sm"
                                    placeholder="Enter your phone.">
                                @error('phone')
                                    <p class="position-absolute text-danger">
                                        <small>
                                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                                        </small>
                                    </p>
                                @enderror
                                <label for="" class="mt-4">Message</label>
                                <textarea name="message" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
                                @error('message')
                                    <p class="position-absolute text-danger">
                                        <small>
                                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                                        </small>
                                    </p>
                                @enderror
                                <button class="contact-btn" type="submit">Send Message</button>
                            </div>
                        </div>

                    </form>

                </div> <!-- /.sFeatLayout -->

        </section>

        <div style="height: 50px; background-color: none;"></div>

    </div>

@endsection
