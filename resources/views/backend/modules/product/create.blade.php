@extends('backend.layout.dashMaster')
@section('title', 'Add Product')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        @yield('title')
                        <a href="{{ route('products.index') }}">
                            <button class="create-btn"> <i class="fa-solid fa-list"></i> </button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'products.store', 'method' => 'post', 'files' => true]) !!}
                        @include('backend.modules.product.form')
                        {!! Form::button('Add Product', ['class' => ['mt-4 create-btn'], 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
