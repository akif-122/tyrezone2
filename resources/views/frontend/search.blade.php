@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">

        @include('frontend.includes.header')


        <!-- SEARCH SECTION START -->
        <section class="man-search pb-0">
            <div class="search-wrap">
                <div class="row">



                    <div class="col-12 ">
                        <div class="search-by-tyres">

                            <form action="{{ route('search') }}">
                                <div class="row justify-content-center align-items-end">
                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <h3>Search by Tyre size</h3>
                                        <div class="form-group">
                                            <select name="width" id="" class="form-select">
                                                <option disabled selected>Width</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('width') == $size->width ? 'selected' : '' }}
                                                            value="{{ $size->width }}">
                                                            {{ $size->width }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="profile" class="form-select">
                                                <option disabled selected>Profile</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('profile') == $size->profile ? 'selected' : '' }}
                                                            value="{{ $size->profile }}">
                                                            {{ $size->profile }}</option>
                                                    @endforeach
                                                @endif
                                            </select>

                                        </div>

                                    </div>


                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="rim_size" class="form-control">
                                                <option disabled selected>Rim Size</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('rim_size') == $size->rim_size ? 'selected' : '' }}
                                                            value="{{ $size->rim_size }}">
                                                            {{ $size->rim_size }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="speed" class="form-select">
                                                <option disabled selected>Speed</option>
                                                @if ($sizes->isNotEmpty())
                                                    @foreach ($sizes as $size)
                                                        <option
                                                            {{ Request::get('speed') == $size->speed ? 'selected' : '' }}
                                                            value="{{ $size->speed }}">
                                                            {{ $size->speed }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <button class="search-btn w-100">
                                            Search
                                        </button>
                                    </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SEARCH SECTION END -->


        <!-- TYRES PATTERN SECTION START -->
        <section class="tyres-detail tyre-pattern ">
            <div class="container pattern-container">

                <!-- TYRES START-->
                <section class="tyres ">
                    {{-- <h4 class="text-center mb-4">Budget Tyres</h4> --}}
                    <!-- <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2"> -->
                    <div class="row">
                     

                        @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="{{ asset('uploads/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="{{ asset('frontend/assets/imgs/fuel-tyre.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <span class="green">{{ $product->fuel_efficiency }}</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="{{ asset('frontend/assets/imgs/wet_grip.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <span class="orange">{{ $product->wet_grip }}</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="{{ asset('frontend/assets/imgs/road-noise-icon.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <span class="black">{{ $product->road_noise }}</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>{{ $product->name }}
                                                <span
                                                    class="ms-4">{{ $product->tyre_size}}</span>
                                            </h5>
                                        </div>

                                        <div class="labels">
                                            <a href="{{ route('manufacturers', ['id' => $product->manufacturer->id]) }}">
                                                {{ $product->manufacturer->name }}
                                            </a>
                                            <a href="#">
                                                @if ($product->season_type == '1')
                                                    Summer
                                                @elseif($product->season_type == '2')
                                                    Winter
                                                @else
                                                    All Season
                                                @endif
                                            </a>
                                        </div>

                                        <div class="price">
                                            <form onsubmit="addToCart(event, '{{ $product }}')">

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£{{ $product->price }}</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre
                                                            £<!--  -->{{ $product->price * 1 }}</option>
                                                        <option value="2">2 Tyre
                                                            £<!--  -->{{ $product->price * 2 }}</option>
                                                        <option value="3">3 Tyre
                                                            £<!--  -->{{ $product->price * 3 }}</option>
                                                        <option value="4">4 Tyre
                                                            £<!--  -->{{ $product->price * 4 }}</option>
                                                    </select>
                                                </div>



                                                <button type="submit" class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->
                            @endforeach
                        @endif


                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES PATTERN SECTION END -->







        @include('frontend.includes.footer')

    </div>
@endsection

@section('customjs')
    <script>
        function addToCart(event, pname) {
            event.preventDefault();
            let product = JSON.parse(pname);
            product.qty = Number(event.target.quantity.value);



            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                cart[isInCart].qty = cart[isInCart].qty + 1;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            window.location.href = '{{ route('cart') }}';
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
@endsection
