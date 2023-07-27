@extends('backend.layout.dashMaster')

@section('title', 'General Setting')
@push('admin_style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @yield('title')
                    </div>
                    <div class="card-body">
                        <form role="form" method="post" class="form-horizontal form-groups-bordered validate"
                            enctype="multipart/form-data" action="{{ route('settings') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="company_name">Company Name:</label>
                                    <input type="text" placeholder="Company Name" name="company_name"
                                        class="form-control" id="company_name" value="{{ get_option('company_name') }}">
                                </div>

                                <div class="col-md-6  mt-3">
                                    <label for="site_title">Site title:</label>
                                    <input type="text" placeholder="Site title" name="site_title" class="form-control"
                                        id="site_title" value="{{ get_option('site_title') }}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="email">Email:</label>
                                    <input type="text" placeholder="Email" name="email" class="form-control"
                                        id="email" value="{{ get_option('email') }}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="phone">Phone:</label>
                                    <input type="text" placeholder="Phone" name="phone" class="form-control"
                                        id="phone" value="{{ get_option('phone') }}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="address">Address:</label>
                                    <input type="text" placeholder="Address" name="address" class="form-control"
                                        id="address" value="{{ get_option('address') }}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="Whatsapp ">Whatsapp :</label>
                                    <input type="text" placeholder="Whatsapp" name="whatsapp" class="form-control"
                                        id="whatsapp " value="{{ get_option('whatsapp') }}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="facebookPage ">Facebook Page Link :</label>
                                    <input type="text" placeholder="facebook page" name="facebook_page"
                                        class="form-control" id="facebookPage " value="{{ get_option('facebook_page') }}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="email ">Email :</label>
                                    <input type="text" placeholder="Email" name="email" class="form-control"
                                        id="email " value="{{ get_option('email') }}">
                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-6 mt-3">

                                    <label for="logo">Logo Upload:</label>

                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                                        data-trigger="fileinput">

                                        @if (get_option('logo'))
                                            <img src="{{ URL::to('/storage/logo/' . get_option('logo')) }}"
                                                alt="logo" />
                                        @else
                                            <img src="{{ asset('placeholder.png') }}" alt="logo" />
                                        @endif
                                    </div>

                                    <input type="file" placeholder="Address" name="logo" class="form-control"
                                        id="logo">
                                    @if (get_option('logo'))
                                        <input type="hidden" name="oldLogo" value="{{ get_option('logo') }}">
                                    @endif
                                </div>

                                <div class="col-md-6 mt-3">

                                    <label for="favicon">Favicon Upload:</label>

                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                                        data-trigger="fileinput">

                                        @if (get_option('favicon'))
                                            <img src="{{ URL::to('/storage/logo/' . get_option('favicon')) }}"
                                                alt="favicon" />
                                        @else
                                            <img src="{{ asset('placeholder.png') }}" alt="favicon" />
                                        @endif
                                    </div>

                                    <input type="file" placeholder="Address" name="favicon" class="form-control"
                                        id="favicon">
                                    @if (get_option('favicon'))
                                        <input type="hidden" name="oldfavicon" value="{{ get_option('favicon') }}">
                                    @endif
                                </div>


                                <div class="col-md-12 mt-3">

                                    <label for="favicon">We are for you:</label>

                                    <textarea class="summernote" name="we_are_for_you">{{ get_option('we_are_for_you') }}</textarea>

                                </div>

                                <div class="col-md-12 mt-3">

                                    <label for="favicon">Why With Us:</label>

                                    <textarea class="summernote" name="why_with_us">{{ get_option('why_with_us') }}</textarea>

                                </div>

                                <div class="col-md-12 mt-3">

                                    <label for="favicon">Owner message:</label>

                                    <textarea class="summernote" name="owner_message">{{ get_option('owner_message') }}</textarea>

                                </div>
                            </div>

                            <div class="form-group mt-3" style="text-align: right">
                                <button type="submit" class="btn btn-success btn-sm">Save Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@if (Session::has('msg'))
    @push('script')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: '<?php echo session('cls'); ?>',
                title: '<?php echo session('msg'); ?>',
                showConfirmButton: false,
                timer: 1500,
                toast: true,
            })
        </script>
    @endpush
@endif

@push('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endpush
