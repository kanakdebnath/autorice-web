@extends('backend.layout.dashMaster')

@section('title', 'Update Communication Member')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <strong>
                            @yield('title')
                        </strong>

                        <a href="{{ route('communications.index') }}">
                            <button class="list-btn edit-btn">Lists <i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::model($communication, [
                            'route' => ['communications.update', $communication],
                            'method' => 'put',
                            'files' => true,
                        ]) !!}
                        @include('backend.modules.communication.form')
                        {!! Form::button('Update Slider', ['class' => 'update-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
