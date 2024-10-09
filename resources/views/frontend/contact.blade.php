@extends('frontend.layout.app')

@section('main')
    <div class="wrapper">

        @include('frontend.includes.header')



        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner " style="background-image: url('assets/imgs/contact-us-banner.jpg');">
            <div class="container">
                <div class="banner-text">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <div class="container">
            @include('frontend.common.alert')
        </div>

        <!-- CONTACT SECTION START -->
        <section class="contacts container-fluid">
            <h5 class="text-center col-md-8 col-lg-6 mx-auto my-5">Get in touch for us regarding any enquiries, we will
                endeavour to get back to you as soon as possible.</h5>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 order-0 order-lg-2">
                    <h3 class="contact-label">CONTACT US</h3>

                    <div class="contact-text border">


                        <div class="row">
                            <!-- <div class="col-6">
                                            <h6>Address</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Unit 4 Church Street, Middleton Manchester
                                                M24 2PY, UK</p>
                                        </div> -->

                            <div class="col-12">
                                <h6>ADDRESS</h6>
                                <p>
                                    Buckley Transport, The Old Gas Works, Higginshaw Lane, Oldham, OL2 6HQ
                                </p>
                            </div>
                            <div class="col-12">
                                <h6>Give us a call.</h6>
                                <p>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:07563896325">07563 896325</a><br />
                                </p>
                            </div>
                        </div>

                        <div class="border-top py-3">
                            <h5>Find Us on Facebook</h5>
                            <p>
                                <i class="fa-regular fab-facebook"></i>
                                <a href="https://www.facebook.com/TyreZoneOldhamLTD
                                "
                                    target="_blank"><i class="fa-brands fa-facebook-f"></i>
                                    facebook.com/TyreZoneOldhamLTD
                                </a>
                            </p>
                        </div>

                        <!-- <div class="border-top pt-3">
                                        <h5>Opening Times</h5>
                                        <p>24/7 Open</p>
                                    </div> -->


                    </div>



                </div>

                <div class="col-lg-5  order-3 order-lg-2 mb-4">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9480.285751932723!2d-2.106041!3d53.5564922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb9d23709f79f%3A0x7aabb72222a5e61c!2sTyre%20Zone%20Ltd!5e0!3m2!1sen!2s!4v1721287623269!5m2!1sen!2s"
                            width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 order-2 order-lg-3 mb-4">
                    <h3 class="contact-label">Contact Us</h3>
                    <form action="{{ route('contact.send') }}" method="post">
                        @csrf
                        <div class="contact-form border">
                            <div class="row">

                                <div class="col-6 mb-3 px-2">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name"
                                            class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <small class="invalid-feedback d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6 mb-3 px-2">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="E-Mail Address"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                            <small class="invalid-feedback d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-3 px-2">
                                    <div class="form-group">
                                        <input type="number" name="phone" placeholder="Phone Number"
                                            class="form-control @error('phone') is-invalid @enderror">
                                        @error('phone')
                                            <small class="invalid-feedback d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-12 mb-3 px-2">
                                    <div class="form-group">
                                        <textarea name="message" rows="5" placeholder="Message" class="form-control" id=""></textarea>
                                        @error('message')
                                            <small class="invalid-feedback d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="main-btn">Submit</button>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <!-- CONTACT SECTION END -->








        @include('frontend.includes.footer')

    </div>
@endsection
