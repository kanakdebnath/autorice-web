@extends('backend.layout.dashMaster')

@section('title', 'Update Notice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        @yield('title')

                        <a href="{{ route('notices.index') }}">
                            <button class="list-btn edit-btn">Lists <i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::model($notice, ['route' => ['notices.update', $notice], 'method' => 'put', 'files' => true]) !!}
                        @include('backend.modules.notice.form')
                        {!! Form::button('Update Notice', ['class' => 'update-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
