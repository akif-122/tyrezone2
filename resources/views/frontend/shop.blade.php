@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">

        @include('frontend.includes.header')




        {{-- SHOP PAGE START --}}
        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mb-5 pe-lg-5 ">
                        <div class="shop-content">
                            <h2>Tyres</h2>

                            <div class="row">
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product)
                                        <div class="col-md-4 col-sm-6 px-2">
                                            <a href="{{ route('shop-detail', ['id' => $product->id]) }}">
                                                <div class="product-card border ">
                                                    <div class="p-card-img position-relative w-100">
                                                        <img src="{{ asset('uploads/products/' . $product->image) }}"
                                                            alt="" width="100%">

                                                        <div class="text-center">
                                                            <a href="{{ route('shop-detail', ['id' => $product->id]) }}"
                                                                class="main-btn sm d-inline-block">Shop Now</a>
                                                        </div>
                                                    </div>

                                                    <div class="product-cart-text">
                                                        <h3>{{ $product->name . ' ' . $product->tyre_size }}
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

                                                    </div>

                                                </div>
                                            </a>

                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar mb-5 ">
                            <div class="product-search">
                                <h2>Search Tyre</h2>
                                <form action="{{ route('shopSearch') }}" class="border rounded p-3">

                                    <div class="form-group mb-3">
                                        <label for="">Brand</label>
                                        <select name="manufacturer" class=" form-select shadow-none">
                                            <option disabled selected="selected">Select Brand</option>
                                            @if ($manufacturers->isNotEmpty())
                                                @foreach ($manufacturers as $manufacturer)
                                                    <option
                                                        {{ Request::get('manufacturer') == $manufacturer->id ? 'selected' : '' }}
                                                        value="{{ $manufacturer->id }}">{{ $manufacturer->name }}
                                                    </option>
                                                @endforeach
                                            @endif


                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Patteren</label>
                                        <select name="patteren" class=" form-select shadow-none">
                                            <option selected="selected" disabled>Select Patteren</option>
                                            @if ($patterens->isNotEmpty())
                                                @foreach ($patterens as $patteren)
                                                    <option
                                                        {{ Request::get('patteren') == $patteren->id ? 'selected' : '' }}
                                                        value="{{ $patteren->id }}">{{ $patteren->name }}
                                                    </option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Tyre Size</label>
                                        <select name="size" class="form-select shadow-none">
                                            <option selected="selected" disabled>Select Size</option>
                                            @if ($sizes->isNotEmpty())
                                                @foreach ($sizes as $size)
                                                    <option
                                                        {{ Request::get('size') == $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed ? 'selected' : '' }}
                                                        value="{{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}">
                                                        {{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="text-end">
                                        <button class="main-btn sm"> Show Result</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- SHOP PAGE END --}}







        @include('frontend.includes.footer')

    </div>
@endsection
