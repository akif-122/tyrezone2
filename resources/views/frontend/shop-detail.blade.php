@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">

        @include('frontend.includes.header')





        {{-- SHOP PAGE START --}}
        <section class="shop-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto mb-5">
                        <div class="product-view ">
                            <div class="main-img d-flex ">
                                <div class="p-img">
                                    <img src="{{ asset('uploads/products/' . $product->image) }}" width="100%"
                                        alt="">
                                </div>
                                @if ($product->image2 != null)
                                    <div class="p-img">
                                        <img src="{{ asset('uploads/products/' . $product->image2) }}" width="100%"
                                            alt="">
                                    </div>
                                @endif


                                @if ($product->image3 != null)
                                    <div class="p-img">
                                        <img src="{{ asset('uploads/products/' . $product->image3) }}" width="100%"
                                            alt="">
                                    </div>
                                @endif
                            </div>
                            <div class="img-filter d-flex align-items-center justify-content-around">
                                <div class="filter active" data-filter="1">
                                    <img src="{{ asset('uploads/products/' . $product->image) }}" width="100px"
                                        alt="">
                                </div>

                                @if ($product->image2 != null)
                                    <div class="filter" data-filter="2">
                                        <img src="{{ asset('uploads/products/' . $product->image2) }}" width="100px"
                                            alt="">
                                    </div>
                                @endif

                                @if ($product->image3 != null)
                                    <div class="filter" data-filter="3">
                                        <img src="{{ asset('uploads/products/' . $product->image3) }}" width="100px"
                                            alt="">
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-detail">
                            <h2>{{ $product->name . ' ' . $product->tyre_size }}</h2>
                            <p>{{ Str::words(strip_tags($product->description), 45) }}
                                <a href="#description">More Detail</a>
                            </p>

                            <h5 class="price">$ 300.00</h5>

                            <div class="btns d-flex gap-3 my-4">
                                <button onclick="addToCart({{ $product }})"
                                    class="main-btn rounded-0 py-2 btn-outline">Add To Cart </button>
                                <button onclick="addToCart({{ $product }}, true)" class="main-btn rounded-0 py-2">Buy
                                    Now </button>
                            </div>

                            <div class="tyre-detail pt-3">
                                <h4>{{ $product->manufacturer->name . ' ' . $product->tyre_size }}</< /h4>
                                    <div class="mt-2 table-responsive">
                                        <table class="table table-striped border">
                                            <tbody>
                                                <tr>
                                                    <td>Tyre Size</td>
                                                    <td class="text-end">
                                                        <span>215/60 R17</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rim Size</td>
                                                    <td class="text-end">
                                                        <span>17 Inches</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tyre Width</td>
                                                    <td class="text-end">
                                                        <span>215 mm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tyre Aspect Ratio (Height)</td>
                                                    <td class="text-end">
                                                        <span>60 %</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pattern Name</td>
                                                    <td class="text-end">
                                                        <span>Alenza</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                            </div>



                        </div>
                    </div>
                </div>

                {{-- DESCRIPTION --}}
                <div class="description col-md-12" id="description">
                    <div class="details">
                        {!! $product->description !!}
                    </div>
                </div>
                {{-- DESCRIPTION --}}


            </div>
        </section>
        {{-- SHOP PAGE END --}}

        {{-- RELATED PRODUCT --}}

        <section class="shop mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 pe-lg-5 ">
                        <div class="shop-content">
                            <h2>Related Products</h2>

                            <div class="row">
                                @if ($relatedProducts->isNotEmpty())
                                    @foreach ($relatedProducts as $relatedProduct)
                                        <div class="col-lg-3 col-sm-6 px-2">
                                            <a href="{{ route('shop-detail', ['id' => $relatedProduct->id]) }}">
                                                <div class="product-card border">
                                                    <div class="p-card-img">
                                                        <img src="{{ asset('uploads/products/' . $relatedProduct->image) }}"
                                                            alt="" width="100%">
                                                    </div>

                                                    <div class="product-cart-text">
                                                        <h3>{{ $relatedProduct->name . ' ' . $relatedProduct->tyre_size }}
                                                        </h3>
                                                        <p>The Bridgestone Alenza 001 215/60 R17 has been carefully
                                                            engineered
                                                            to meet the high-performance demands of luxury SUVs, offering
                                                            drivers a dynamic yet luxurious driving experience. Alenza 001
                                                            tyre
                                                            is designed to thrive on both wet and dry roads alike. The tyre
                                                            offers superior performance with outstanding comfort and
                                                            longevity
                                                            for optimal driving.
                                                        </p>
                                                        <div class="text-center">
                                                            <a href="{{ route('shop-detail', ['id' => $relatedProduct->id]) }}"
                                                                class="main-btn sm d-inline-block">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <script>
            let filters = document.querySelectorAll(".filter");
            let filterImgs = document.querySelectorAll(".main-img .p-img");

            filters.forEach(fitler => {
                fitler.addEventListener("click", function(e) {
                    filters.forEach(filter => {
                        filter.classList.remove("active");
                    })
                    let filterVal = fitler.getAttribute("data-filter") - 1;
                    filterImgs.forEach(img => {
                        img.style.transform = `translateX(-${100 * filterVal}%)`
                    });


                    fitler.classList.add("active");

                })
            });
        </script>









        @include('frontend.includes.footer')

    </div>
@endsection

@section('customjs')
    <script>
        function addToCart(pname, buyNow = false) {
            let product = pname;
            product.qty = 1;



            let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
            let isInCart = cart.findIndex((value) => value.id == product.id);

            if (isInCart < 0) {
                cart.push({
                    ...product
                });
            } else {
                if (buyNow) {

                    window.location.href = '{{ route('checkout') }}';
                } else {
                    alert("Item already added in your  cart!")
                    return
                }
                // cart[isInCart].qty = cart[isInCart].qty + 1;
            }

            localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
            cartLength();
            callData();

            if (buyNow) {

                window.location.href = '{{ route('checkout') }}';
            } else {
                window.location.href = '{{ route('cart') }}';

            }
            // localStorage.setItem("tyreZoneCart", [...cart, product])

        }
    </script>
@endsection
