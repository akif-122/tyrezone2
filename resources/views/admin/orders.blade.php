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
                        <h5>145</h5>
                        <i class="fa-solid fa-shop"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Pending</h4>
                        <h5>45</h5>
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Confirmed</h4>
                        <h5>425</h5>
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Invalid</h4>
                        <h5>5</h5>
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Rejected</h4>
                        <h5>51</h5>
                        <i class="fa-solid fa-ban"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Not Available
                        </h4>
                        <h5>11</h5>
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <a href="#">
                    <div class="dash-card">
                        <h4>Delivered
                        </h4>
                        <h5>1231</h5>
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
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Manufac. Name</th>
                        <th>Tyre Patteren</th>
                        <th>fuel Effic.</th>
                        <th>Wet Grip</th>
                        <th>Road Noise</th>
                        <th>Size</th>
                        <th>Shipping Address</th>
                        <th>Postcode</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Status</th>

                    </tr>
                </thead>

                <tbody>


                    <tr>
                        <td>Note 10 Pro</td>
                        <td>Image</td>
                        <td>Dunlop</td>
                        <td>ECONO DRIVE</td>
                        <td>C</td>
                        <td>B</td>
                        <td>70</td>
                        <td>225/45 R17 94Y</td>
                        <td>User Address</td>
                        <td>
                            24420 </td>
                        <td>4</td>
                        <td>40000</td>
                        <td>
                            <select class="border-0 outline-0">
                                <option value="">Pending</option>
                                <option value="">Confirmed</option>
                                <option value="">Invalid</option>
                                <option value="">Not Available</option>
                                <option value="">Delivered</option>
                            </select>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection










@section('customjs')
@endsection
