@extends('backend.layout.dashMaster')

@section('title', 'Add Service')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <strong>
                            @yield('title')
                        </strong>
                        <a href="{{ route('services.index') }}">
                            <button class="create-btn"><i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'services.store', 'method' => 'post']) !!}
                        @include('backend.modules.service.form')
                        {!! Form::button('Add Service', ['class' => 'create-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
