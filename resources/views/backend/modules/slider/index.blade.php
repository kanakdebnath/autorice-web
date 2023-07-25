@extends('backend.layout.dashMaster')

@section('title', 'Slider Lists')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">

                        @yield('title')
                        <a href="">
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
                                    <th>Photo</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{!! substr($item->description, 0, 50) !!}...</td>
                                        <td><img style="width: 200px; height:120px"
                                                src="{{ asset('image/uploads/sliders/thumbnail/' . $item->photo) }}"
                                                alt=""></td>
                                        <td>
                                            <p class="mb-0 text-success">
                                                {{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}
                                            </p>
                                            <p class="mb-0 text-danger">
                                                {{ $item->created_at == $item->updated_at ? 'Not updated yet' : Carbon\Carbon::parse($item->updated_at)->format('d-M-Y') }}
                                            </p>
                                        </td>
                                        <td>
                                            <a class="text-decoration-none" href="{{ route('sliders.edit', $item->id) }}">
                                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </a>
                                            <a class="text-decoration-none" href="">
                                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                                            </a>
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
@endsection
