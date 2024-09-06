@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-6 mx-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Add Tyre Size</h5>
                <a class="main-btn sm" href="{{ route('admin.tyreSize') }}">All Sizes</a>
            </div>


            <div class="form form-wrap sign-up-wrap mt-3">
                <form action="{{ route('admin.saveTyreSize') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="width">Width:</label>
                                <input type="text" name="width"
                                    class="form-control @error('width') is-invalid @enderror" placeholder="Width">
                                @error('width')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="profile">Profile:</label>
                                <input type="text" name="profile"
                                    class="form-control @error('profile') is-invalid @enderror" placeholder="Profile">
                                @error('profile')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="rim_size">Rim Size:</label>
                                <input type="text" name="rim_size"
                                    class="form-control @error('profile') is-invalid @enderror" placeholder="Rim Size">
                                @error('rim_size')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="speed">Speed:</label>
                                <input type="text" name="speed"
                                    class="form-control @error('speed') is-invalid @enderror" placeholder="Speed">
                                @error('speed')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button class="main-btn sm">Add Size</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




@section('customjs')
@endsection
