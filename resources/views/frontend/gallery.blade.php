@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">

        @include('frontend.includes.header')


        <!-- GALLERY SECION START -->
        <section class="gallery my-3 py-5">
            <h1 class="text-center mb-4">Gallery</h1>
            <div class="container">
                <div class="row " id="gallery">

                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/1.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/1.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/2.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/2.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/4.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/4.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/33.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/33.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/5.jpeg') }}" data-lightbox="image-1" data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/5.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/6.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/6.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/7.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/7.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/9.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/9.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/10.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/10.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="{{ asset('frontend/assets/imgs/gallery/11.jpeg') }}" data-lightbox="image-1"
                            data-title="">
                            <img src="{{ asset('frontend/assets/imgs/gallery/11.jpeg') }}" data-lightbox="roadtrip"
                                width="100%" alt="">
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <!-- GALLERY SECION END -->


        <!-- FOOTER SECTION START -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>About TYRE ZONE Tyres</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> About Us </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Contact Us </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Sitemap </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Privacy Policy </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies Policy </a></li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <h5>Services</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Wheel Balancing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">

                        <div class="col-sm-6">
                            <h5>Tyre Manufacturers</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Maxxis Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Dunlop Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Bridgestone Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Continental Tyres</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <h5>Contact Us</h5>
                            <ul>
                                <li><a href="#">Contact Us
                                        Unit 4 Church Street, Middleton Manchester M24 2PY, UK</a></li>
                                <li><a href="#">Ph: 01616547756</a></li>
                                <li><a href="#">Ph: 07899757543</a></li>
                                <li><a href="#">
                                        <p class="m-0">24/7 Open <a href="#">07899757543</a></p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-2">
                    <h5>Social Media</h5>
                    <ul class="social-icon list-unstyled d-flex flex-wrap">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                    <p>Registered No: <strong>10544461</strong></p>
                </div>


            </div>


            <div class="footer-bottom d-flex align-items-center justify-content-center flex-column">
                <p class="mb-0">© TYRE ZONE TYRES LTD 2024. All Rights Reserved.</p>
                <!-- <div class="d-flex align-items-center justify-content-center flex-wrap gap-1">
                        <div class="">
                            <img src="assets/imgs/payzone.png" alt="">
                        </div>
                        <div class="">
                            <img src="assets/imgs/Barclaycard_Logo.svg.png" alt="">
                        </div>
                        <div class="">
                            <img src="assets/imgs/mastercard.png" alt="">
                        </div>
                        <div class="">
                            <img src="assets/imgs/Visa-Logo-PNG-Image.png" alt="">
                        </div>
                        <div class="">
                            <img src="assets/imgs/ecard.png" alt="">
                        </div>
                        <div class="">
                            <img src="assets/imgs/maestro.png" alt="">
                        </div>
                        <div class="">
                            <img src="assets/imgs/apple-pay.png" alt="">
                        </div>
                        <div class="">
                            <img src="assets/imgs/android-pay.png" alt="">
                        </div>
                    </div> -->
            </div>

        </footer>
        <!-- FOOTER SECTION END -->


    </div>
@endsection


@section('customjs')
<script src="{{ asset("frontend/assets/js/lightbox.min.js") }}"></script>
    <script>
        // GALLERY PAGE LIGHT BOX
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    </script>
@endsection
