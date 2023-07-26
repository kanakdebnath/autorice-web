@extends('backend.layout.dashMaster')

@section('title', 'Notice Details')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">

                        <p class="mb-0">{{ $notice->title }}</p>
                        <a href="{{ route('notices.index') }}">
                            <button class="create-btn"><i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-active table-hover table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <td>{!! $notice->description !!}</td>

                                </tr>
                                <tr>
                                    <td>
                                        <img class="w-100 h-100"
                                            src="{{ asset('image/uploads/notice/thumbnail/' . $notice->photo) }}"
                                            alt="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
