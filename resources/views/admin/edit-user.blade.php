@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">
        <div class="d-flex justify-content-between align-items-center col-lg-11 mx-auto px-2">
            <h5 class="m-0">Edit User</h5>

            <a class="main-btn sm" href="{{ route("admin.users") }}">All User</a>

        </div>

        <!-- REGISTRATION FORM START-->
        <section class="registration form-wrap">
            <div class="container ">
                <div class="col-lg-11 mx-auto sign-up-wrap">
                    <div class="row">

                        <div class="col-md-6 mb-4 mb-lg-0">
                            <h5>Primary Contact Information</h5>

                            <div class="form-group mb-3">
                                <label for="">First Name <span>*</span></label>
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Last Name <span>*</span></label>
                                <input type="text" placeholder="Last Name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Email Address <span>*</span></label>
                                <input type="email" placeholder="Email Address" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Phone </label>
                                <input type="number" placeholder="Phone" class="form-control">
                            </div>


                            <div class="form-group mb-3">
                                <label for="">Password <span>*</span> </label>
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password <span>*</span> </label>
                                <input type="password" placeholder="Confirm Password" class="form-control">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <h5>Company Information</h5>

                            <div class="form-group mb-3">
                                <label for="">Company</label>
                                <input type="text" placeholder="Company" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Country</label>
                                <select name="" class="form-select" id="">
                                    <option value="">United Kingdom</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">City</label>
                                <input type="text" placeholder="City" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Address </label>
                                <input type="text" placeholder="Address" class="form-control">
                            </div>


                            <div class="form-group mb-3">
                                <label for="">Postcode</label>
                                <input type="text" placeholder="Postcode" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Company Phone</label>
                                <input type="number" placeholder="Phone" class="form-control">
                            </div>

                        </div>


                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="p-p">
                            <label for="p-p">I have read and agree to the <a href="#">Privacy
                                    Policy</a></label>

                        </div>

                        <div class="mt-2">
                            <button class="main-btn">Update User</button>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- REGISTRATION FORM END -->


    </div>
@endsection










@section('customjs')
@endsection
