@extends('frontend.layout.app')


@section('main')
    @include('frontend.includes.header')
    <!-- TOP BAR SECTION END -->


    <!-- HERO BANNER SECTION START -->
    <section class="hero-banner overlay" style="background-image: url('assets/imgs/dunlop-banner.jpg');">
        <div class="container">
            <div class="banner-text">
                <h1>About Us</h1>
            </div>
        </div>
    </section>
    <!-- HERO BANNER SECTION END -->



    <!-- ABOUT SECTION START START -->
    <section class="about my-5">
        <div class="container">
            <h2 class="text-center">About Us</h2>


            <div class="about-text">
                <h1>TYRE ZONE OLDHAM</h1>
                <h3>PROVIDING QUALITY PART WORN TYRES.</h3>
                <p>We pride ourselves in providing <strong>superior quality</strong> products at <strong>affordable
                        prices</strong>. All our tyres are
                    thoroughly checked visually by trained tyre technicians and mechanically with a tyre pressure
                    testing machine with a aqua system, which allows us to examine the tyres for any punctures or
                    damages, we do this to ensure you get a safe and quality product.</p>


                <p><strong>It is in the nature of part worn tyres to have puncture repairs, tiny cuts or nicks to the side
                        wall protectors however this does not affect the use and performance of the tyre.</strong></p>




            </div>

        </div>
    </section>
    <!-- ABOUT SECTION START END -->


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
