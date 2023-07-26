@extends('backend.layout.dashMaster')

@section('title', 'Update Service')

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
                            <button class="list-btn edit-btn">Lists <i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::model($service, ['route' => ['services.update', $service], 'method' => 'put']) !!}
                        @include('backend.modules.service.form')
                        <a href="{{ route('services.index') }}">
                            <button class="edit-btn"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        </a>
                        {!! Form::button('Update Service', ['class' => 'update-btn mt-4', 'type' => 'submit']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
