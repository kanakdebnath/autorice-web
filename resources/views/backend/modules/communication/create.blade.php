@extends('backend.layout.dashMaster')

@section('title', 'Add Communication Member')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        @yield('title')

                        <a href="{{ route('communications.index') }}">
                            <button class="create-btn"><i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'communications.store', 'method' => 'post', 'files' => true]) !!}
                        @include('backend.modules.communication.form')
                        {!! Form::button('Add Communication Member', ['class' => 'create-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
