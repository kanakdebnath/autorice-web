@extends('backend.layout.dashMaster')

@section('title', 'Slider Create')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        @yield('title')
                    </div>
                    <div class="card-body">
                        {!! Form::open() !!}
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter title']) !!}

                        {!! Form::label('description', 'Description', ['class' => 'mt-4']) !!}
                        {!! Form::text('description', null, [
                            'class' => 'form-control form-control-sm',
                            'placeholder' => 'Enter description',
                        ]) !!}
                        {!! Form::label('sliders', 'Photo', ['class' => 'mt-4']) !!}
                        {!! Form::file('photo', ['class' => 'form-control form-control-sm']) !!}

                        {!! Form::button('Add Slidera', ['class' => 'create-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
