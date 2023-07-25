@extends('backend.layout.dashMaster')

@section('title', 'Update Slider')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h6 class="mb-0">
                            @yield('title')
                        </h6>

                        <a href="{{ route('sliders.index') }}">
                            <button><i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::model($slider, ['route' => ['sliders.update', $slider], 'method' => 'post', 'files' => true]) !!}
                        @include('backend.modules.slider.form')
                        {!! Form::button('Update Slidera', ['class' => 'update-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
