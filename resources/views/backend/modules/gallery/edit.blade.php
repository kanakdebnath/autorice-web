@extends('backend.layout.dashMaster')

@section('title', 'Update Gallery Photo')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <strong>
                            @yield('title')
                        </strong>

                        <a href="{{ route('gallery-photos.index') }}">
                            <button class="list-btn edit-btn">Lists <i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::model($gallery, [
                            'route' => ['gallery-photos.update', $gallery],
                            'method' => 'put',
                            'files' => true,
                        ]) !!}
                        {!! Form::label('photo', 'Photo') !!}
                        {!! Form::file('photo', ['class' => 'gallery-img form-control form-contropl-sm']) !!}
                        <div class="row show_gellary_photo mt-3">
                            <div class="col-lg-6">
                                <div class="gellary-photo-item" style="display: none">
                                    <img class="w-100 photo-show" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="old-img" src="{{ asset('image/uploads/gallery/thumbnail/' . $gallery->photo) }}"
                                    alt="">
                            </div>
                        </div>
                        {!! Form::button('Update Photo', ['class' => 'update-btn mt-4', 'type' => 'submit']) !!}
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
