@extends('backend.layout.dashMaster')
@section('title', 'Add Gallery')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        @yield('title')
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'gallery-photos.store', 'method' => 'post', 'files' => true]) !!}
                        {!! Form::label('photo', 'Photo') !!}
                        {!! Form::file('photo', ['class' => 'gallery-img form-control form-contropl-sm']) !!}
                        <div class="row show_gellary_photo">
                            <div class="col-lg-4 mt-2">
                                <div class="gellary-photo-item" style="display: none">
                                    <img class="w-100 photo-show" alt="">
                                </div>
                            </div>
                        </div>
                        {!! Form::button('Add Gallery', ['class' => 'mt-4 create-btn', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $('.gallery-img').on('change', function(e) {
            let photos = e.target.files[0]
            photos = URL.createObjectURL(photos)
            $('.photo-show').attr('src', photos)
            $('.gellary-photo-item').show()
        })
    </script>
@endpush
