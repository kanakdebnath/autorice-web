@extends('backend.layout.dashMaster')
@section('title', 'Add Product')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        @yield('title')
                        <a href="{{ route('products.index') }}">
                            <button class="create-btn"> <i class="fa-solid fa-list"></i> </button>
                        </a>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'products.store', 'method' => 'post', 'files' => true]) !!}
                        {!! Form::label('name', 'Title') !!}
                        {!! Form::text('name', null, [
                            'class' => 'form-control form-control-sm product_name',
                            'placeholder' => 'Enter product name',
                        ]) !!}

                        @error('name')
                            <p class="mb-0 position-absolute text-danger">
                                <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                            </p>
                        @enderror
                        {!! Form::label('slug', 'Slug', ['class' => 'mt-4']) !!}
                        {!! Form::text('slug', null, [
                            'class' => 'form-control form-control-sm product_slug',
                            'placeholder' => 'Enter product slug',
                        ]) !!}
                        @error('slug')
                            <p class="mb-0 position-absolute text-danger">
                                <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                            </p>
                        @enderror
                        <div class="row">
                            <div class="col-lg-4">
                                {!! Form::label('status', 'Status', ['class' => 'mt-4']) !!}
                                {!! Form::select('status', [1 => 'Active', 2 => 'Inactive'], null, [
                                    'class' => 'form-control form-control-sm',
                                    'placeholder' => 'Enter product status',
                                ]) !!}
                                @error('status')
                                    <p class="mb-0 position-absolute text-danger">
                                        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                {!! Form::label('price', 'Price', ['class' => 'mt-4']) !!}
                                {!! Form::number('price', null, [
                                    'class' => 'form-control form-control-sm',
                                    'placeholder' => 'Enter product price',
                                ]) !!}
                                @error('price')
                                    <p class="mb-0 position-absolute text-danger">
                                        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                {!! Form::label('weigth', 'weigth', ['class' => 'mt-4']) !!}
                                {!! Form::number('weigth', null, [
                                    'class' => 'form-control form-control-sm',
                                    'placeholder' => 'Enter product weigth',
                                ]) !!}
                                @error('weigth')
                                    <p class="mb-0 position-absolute text-danger">
                                        <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::label('discount_type', 'Discount Type', ['class' => 'mt-4']) !!}
                                {!! Form::select('discount_type', [1 => 'Percentage', 2 => 'Float'], null, [
                                    'class' => 'form-control form-control-sm',
                                    'placeholder' => 'Enter product discount type',
                                ]) !!}

                            </div>
                            <div class="col-lg-6">
                                {!! Form::label('discount_amount', 'Discount Amount', ['class' => 'mt-4']) !!}
                                {!! Form::number('discount_amount', null, [
                                    'class' => 'form-control form-control-sm',
                                    'placeholder' => 'Enter product discount amount',
                                ]) !!}
                            </div>
                        </div>
                        {!! Form::label('description', 'Description', ['class' => 'mt-4']) !!}
                        {!! Form::textarea('description', null, [
                            'class' => 'description form-control form-control-sm',
                            'placeholder' => 'Enter product description',
                        ]) !!}
                        @error('description')
                            <p class="mb-0 position-absolute text-danger">
                                <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                            </p>
                        @enderror
                        {!! Form::label('photo', 'Product Photo', ['class' => 'mt-4']) !!}
                        {!! Form::file('photo', [
                            'class' =>
                                'product_img                                                                                                           form-control form-control-sm',
                        ]) !!}
                        @error('photo')
                            <p class="mb-0 position-absolute text-danger img-error">
                                <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                            </p>
                        @enderror

                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="show_img">
                                    <img class="show-product-img" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="update-img">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>

                        {!! Form::button('Add Product', ['class' => ['mt-4 create-btn'], 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $('.product_name').on('input', function() {
            let value = $(this).val();
            value = value.replaceAll(' ', '-').toLowerCase()
            $('.product_slug').val(value)
        })

        $('.product_img').on('change', function(e) {
            let photo = e.target.files[0]
            photo = URL.createObjectURL(photo)
            $('.show-product-img').attr('src', photo)
            $('.img-error').empty()

        })
    </script>
@endpush
