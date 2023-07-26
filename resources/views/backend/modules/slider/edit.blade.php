@extends('backend.layout.dashMaster')

@section('title', 'Update Slider')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        @yield('title')

                        <a href="{{ route('sliders.index') }}">
                            <button class="list-btn edit-btn">Lists <i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::model($slider, ['route' => ['sliders.update', $slider], 'method' => 'put', 'files' => true]) !!}
                        @include('backend.modules.slider.form')
                        {!! Form::button('Update Slider', ['class' => 'update-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
