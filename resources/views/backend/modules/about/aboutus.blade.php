@extends('backend.layout.dashMaster')

@section('title', 'Update About Us')
@push('admin_style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">@yield('title') </h4>
                    </div>
                    <div class="card-body">
                        <form role="form" method="post" class="form-horizontal form-groups-bordered validate"
                            enctype="multipart/form-data" action="{{ route('about.store') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-12 mt-3">

                                    <label for="aboutus"><strong>About Us:</strong></label>

                                    <textarea class="summernote" name="about_us">{{ get_about_value('about_us') }}</textarea>

                                </div>
                                <div class="col-md-12 mt-3">

                                    <label for="process"><strong>Process:</strong></label>

                                    <textarea class="summernote" name="process">{{ get_about_value('process') }}</textarea>

                                </div>

                                <div class="col-md-12 mt-3">

                                    <label for="infrastructer"><strong>Infrastructer:</strong></label>

                                    <textarea class="summernote" name="infrastructer">{{ get_about_value('infrastructer') }}</textarea>

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
