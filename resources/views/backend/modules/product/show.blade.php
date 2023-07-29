@extends('backend.layout.dashMaster')

@section('title', 'Products Details')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">

                        @yield('title')
                        <a href="{{ route('products.index') }}">
                            <button class="create-btn"><i class="fa-solid fa-list"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-active table-hover table-sm table-bordered">
                            @php
                                $percentage = App\Models\Backend\Product::PERCENTAGE;
                                $float = App\Models\Backend\Product::FLOAT;
                            @endphp
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $product->name }}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{ $product->slug }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    @if ($product->status == 1)
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    @else
                                        <td><span class="badge text-bg-danger">Inactive</span></td>
                                    @endif
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ number_format($product->price, 2) }}TK</td>
                                </tr>
                                <tr>
                                    <th>Offer Price</th>
                                    @if ($product->offer_price != null)
                                        <td>{{ number_format($product->offer_price, 2) }}TK</td>
                                    @else
                                        <td>00</td>
                                    @endif
                                </tr>
                                @if ($product->discount_type != null)
                                    <tr>
                                        <th>Discount Type</th>
                                        @if ($product->discount_type == $percentage)
                                            <td><span class="badge text-bg-info">Percentage</span></td>
                                        @elseif($product->discount_type == $float)
                                            <td><span class="badge text-bg-warning">Float</span></td>
                                        @endif
                                    </tr>
                                @endif

                                <tr>
                                    <th>Discount Amount</th>
                                    <td>{{ $product->discount_amount != 0 ? $product->discount_amount : 0 }}
                                        @if ($product->discount_type == $percentage)
                                            %
                                        @elseif($product->discount_type == $float)
                                            TK
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td>{!! $product->description !!}</td>
                                </tr>


                                <tr>
                                    <th>Created At</th>
                                    <td>{{ Carbon\Carbon::parse($product->created_at)->format('d-M-Y h:i a') }}</td>
                                </tr>

                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $product->created_at == $product->updated_at ? 'Not updated yet' : Carbon\Carbon::parse($product->updated_at)->format('d-M-Y h:i a') }}
                                    </td>
                                </tr>

                                <tr>
                                    <th>Photo</th>
                                    <td><img src="{{ asset('image/uploads/products/orginal/' . $product->photo) }}"
                                            alt="{{ $product->name }}"></td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="{{ route('products.index') }}">
                            <button class="create-btn"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
