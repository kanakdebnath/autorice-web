@extends('backend.layout.dashMaster')

@section('title', 'Add Notice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        @yield('title')

                        <a href="{{ route('notices.index') }}">
                            <button class="create-btn"><i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'notices.store', 'method' => 'post', 'files' => true]) !!}
                        @include('backend.modules.notice.form')
                        {!! Form::button('Add Notice', ['class' => 'create-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
