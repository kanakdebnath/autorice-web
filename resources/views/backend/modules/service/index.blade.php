@extends('backend.layout.dashMaster')

@section('title', 'Services Lists')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <strong>
                            @yield('title')
                        </strong>

                        <a href="{{ route('services.create') }}">
                            <button class="create-btn"><i class="fa-solid fa-plus"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-active table-hover table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{!! substr($item->description, 0, 50) !!}...</td>
                                        <td>
                                            <p class="mb-0 text-success">
                                                {{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y h:i a') }}
                                            </p>
                                            <p class="mb-0 text-danger">
                                                {{ $item->created_at == $item->updated_at ? 'Not updated yet' : Carbon\Carbon::parse($item->updated_at)->format('d-M-Y h:i a') }}
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-inline-flex ">
                                                <a href="{{ route('services.show', $item->id) }}">
                                                    <button class="show-btn me-2"><i class="fa-solid fa-eye"></i></button>
                                                </a>
                                                <a class="text-decoration-none"
                                                    href="{{ route('services.edit', $item->id) }}">
                                                    <button class="edit-btn me-2"><i
                                                            class="fa-solid fa-pen-to-square"></i></button>
                                                </a>
                                                {!! Form::open([
                                                    'route' => ['services.destroy', $item->id],
                                                    'method' => 'delete',
                                                    'id' => 'delete_form_' . $item->id,
                                                ]) !!}
                                                {!! Form::button('<i class="fa-solid fa-trash"></i>', [
                                                    'class' => 'delete-btn delete_btn',
                                                    'data-id' => $item->id,
                                                ]) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
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
        $('.delete_btn').on('click', function() {
            let id = $(this).attr('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete_form_' + id).submit()
                }
            })
        })
    </script>
@endpush
