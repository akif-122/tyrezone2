@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">

        <div class="row">

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Total Orders
                        </h4>
                        <h5>{{ $orders->count() }}</h5>
                        <i class="fa-solid fa-shop"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Pending</h4>
                        <h5>{{ $pendingOrder->count() }}</h5>
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Confirmed</h4>
                        <h5>{{ $confirmOrder->count() }}</h5>
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Invalid</h4>
                        <h5>{{ $invalidOrder->count() }}</h5>
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Rejected</h4>
                        <h5>{{ $rejectedOrder->count() }}</h5>
                        <i class="fa-solid fa-ban"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Not Available
                        </h4>
                        <h5>{{ $notAvailableOrder->count() }}</h5>
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Delivered
                        </h4>
                        <h5>{{ $deliveredOrder->count() }}</h5>
                        <i class="fa-solid fa-box"></i>
                    </div>
                </a>
            </div>


        </div>


        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Orders</h5>


        </div>


        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Cus. Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        {{-- <th>Manufac. Name</th>
                        <th>Tyre Patteren</th>
                         --}}
                        <th>Size</th>
                        <th>Shipping Address</th>
                        {{-- <th>Postcode</th> --}}
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Pay Status</th>
                        <th>Order Status</th>

                    </tr>
                </thead>

                <tbody>

                    @if ($orders->isNotEmpty())
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->orderDetail->fname }}</td>
                                <td>{{ $order->orderDetail->email }}</td>
                                <td>{{ $order->orderDetail->phone }}</td>
                                <td>{{ $order->product->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/products/' . $order->product->image) }}" alt="">
                                </td>
                                {{-- <td>Dunlop</td>
                                <td>ECONO DRIVE</td> --}}
                                <td class="text-nowrap">{{ $order->product->tyre_size}}</td>
                                <td>{{ $order->orderDetail->address }}</td>
                                {{-- <td>
                                    24420 </td> --}}
                                <td>{{ $order->qty }}</td>
                                <td>{{ $order->product->price * $order->qty }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>
                                    <select onchange="handleSelectChange(event, '{{ $order->id }}')"
                                        class="border-0 outline-0">
                                        <option value="Pending" {{ ($order->order_status == "Pending")? "selected" : "" }}>Pending</option>
                                        <option value="Confirmed" {{ ($order->order_status == "Confirmed")? "selected" : "" }}>Confirmed</option>
                                        <option value="Invalid" {{ ($order->order_status == "Invalid")? "selected" : "" }}>Invalid</option>
                                        <option value="Not Available" {{ ($order->order_status == "Not Available")? "selected" : "" }}>Not Available</option>
                                        <option value="Delivered" {{ ($order->order_status == "Delivered")? "selected" : "" }}>Delivered</option>
                                        <option value="Rejected" {{ ($order->order_status == "Rejected")? "selected" : "" }}>Rejected</option>
                                    </select>
                                </td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection










@section('customjs')
    <script>
        function handleSelectChange(event, id) {

            var value = event.target.value;
            let order_id = id;

            $.ajax({
                url: "{{ route("admin.status") }}",
                type: "post",
                data: {
                    "status": value,
                    "id": order_id
                },
                dataType: "json",
                success: function(res) {
                    console.log(res);
                    window.location.reload();
                }
            })


        }


        function orderStatus(e, ) {
            console.log(e)
        }
    </script>
@endsection
