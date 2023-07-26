@extends('backend.layout.dashMaster')
@section('title', 'Update With Us')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <strong>
                            @yield('title')
                        </strong>

                    </div>
                    <div class="card-body">
                        {!! Form::model($withus, ['route' => ['withUs.store', $withus], 'method' => 'put']) !!}
                        {!! Form::label('description', 'Description') !!}
                        {!! Form::textarea('description', null, [
                            'class' => 'form-control form-control-sm',
                            'id' => 'withdescription',
                            'placeholder' => 'Enter why with us',
                        ]) !!}
                        @error('description')
                            <p class="position-absolute text-danger error-photo">
                                <small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small>
                            </p>
                        @enderror
                        {!! Form::button('update with us', ['class' => 'edit-btn mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('msg'))
        @push('script')
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: '<?php echo session('cls'); ?>',
                    title: '<?php echo session('msg'); ?>',
                    showConfirmButton: false,
                    timer: 1500,
                    toast: true,
                })
            </script>
        @endpush
    @endif

@endsection



@push('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#withdescription'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
