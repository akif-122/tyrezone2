@extends('frontend.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/user-dashboard.css') }}">
@endsection

@section('main')
    <div class="wrapper">

        @include('frontend.includes.header')





        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">



                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.includes.sidebar')

                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">



                        <div class="content-area mt-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Orders</h5>


                            </div>


                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Manufac. Name</th>
                                            <th>Tyre Patteren</th>
                                            
                                            <th>Size</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Payment Status</th>
                                            <th>Order Status</th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        @if ($orders != null)
                                            @foreach ($orders->products as $product)
                                                <tr>
                                                    <td>{{ $product->product->name }}</td>
                                                    <td> <img src="{{ asset("uploads/products/".$product->product->image) }}" width="40px"
                                                            alt="">
                                                    </td>
                                                    <td>{{ $product->product->manufacturer->name }}</td>
                                                    <td>{{ $product->product->patteren->name }}</td>

                                                    
                                                    <td>{{ $product->product->width ."/". $product->product->profile ." R" . $product->product->rim_size . " " . $product->product->speed  }}</td>
                                                    <td>{{  $product->qty }}</td>
                                                    <td>{{ $product->product->price }}</td>
                                                    <td>{{ $product->payment_status }}</td>
                                                    <td>{{ $product->order_status }}</td>

                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->






        @include('frontend.includes.footer')

    </div>
@endsection
