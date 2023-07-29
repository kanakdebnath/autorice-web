@extends('backend.layout.dashMaster')

@section('title', 'Services Details')

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
                            <button class="create-btn"><i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-active table-hover table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $service->title }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{!! $service->description !!}</td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{ $service->status == 1 ? 'Active' : 'Inactive' }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ Carbon\Carbon::parse($service->created_at)->format('d-m-y h:i a') }}</td>
                                </tr>

                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $service->created_at == $service->updated_at ? 'Not updated yet' : Carbon\Carbon::parse($service->updated_at)->format('d-m-y h:i a') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a  href="{{ route('services.index') }}">
                            <button class="edit-btn"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
