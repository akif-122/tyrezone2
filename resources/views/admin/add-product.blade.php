@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">
        <div class="col-md-9 mx-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Add Product</h5>
                <a class="main-btn sm" href="{{ route('admin.products') }}">All Products</a>
            </div>

            <div class="form form-wrap sign-up-wrap mt-3 ">
                <form action="{{ route('admin.saveProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                            </div>
                        </div>



                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Manufacture Name:</label>
                                <select name="manufacturer_id"
                                    class="form-select @error('manufacturer_id') is-invalid @enderror">
                                    <option selected disabled>Select Manufacture</option>
                                    @if ($manufacturers->isNotEmpty())
                                        @foreach ($manufacturers as $manufacturer)
                                            <option value={{ $manufacturer->id }}
                                                {{ old('manufacturer_id') == $manufacturer->id ? 'selected' : '' }}>
                                                {{ $manufacturer->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Pattern Type:</label>
                                <select class="form-select @error('patteren_id') is-invalid @enderror" id="patteren"
                                    name="patteren_id">
                                    <option disabled selected>Select Patteren</option>

                                    @if ($patterens->isNotEmpty())
                                        @foreach ($manufacturers as $manufacturer)
                                            <optgroup label={{ $manufacturer->name }}>
                                                @foreach ($patterens as $patteren)
                                                    @if ($manufacturer->id == $patteren->manufacturer_id)
                                                        <option value="{{ $patteren->id }}"
                                                            {{ old('patteren_id') == $patteren->id ? 'selected' : '' }}>
                                                            {{ $patteren->name }}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Fuel Efficiency:</label>
                                <input type="text" value="{{ old('fuel_efficiency') }}" name="fuel_efficiency"
                                    class="form-control @error('fuel_efficiency') is-invalid @enderror"
                                    placeholder="Fuel Efficiency">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Wet Grip:</label>
                                <input type="text" value="{{ old('wet_grip') }}" name="wet_grip"
                                    class="form-control @error('wet_grip') is-invalid @enderror" placeholder="Wet Grip">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Road Noise:</label>
                                <input type="text" value="{{ old('road_noise') }}" name="road_noise"
                                    class="form-control @error('road_noise') is-invalid @enderror" placeholder="Road Noise">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Tyre Size</label>
                                <select name="tyre_size" class="form-select @error('tyre_size') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Size</option>
                                    @foreach ($sizes as $size)
                                        <option
                                            value="{{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}"
                                            {{ old('tyre_size') == $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed ? 'selected' : '' }}>
                                            {{ $size->width . '/' . $size->profile . ' R' . $size->rim_size . ' ' . $size->speed }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Width</label>
                                <select name="width" class="form-select @error('width') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Width</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->width }}"
                                            {{ old('width') == $size->width ? 'selected' : '' }}>{{ $size->width }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Profile</label>
                                <select name="profile" class="form-select @error('profile') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Profile</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->profile }}"
                                            {{ old('profile') == $size->profile ? 'selected' : '' }}>
                                            {{ $size->profile }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Rim Size</label>
                                <select name="rim_size" class="form-select @error('rim_size') is-invalid @enderror"
                                    required="">
                                    <option disabled selected>Select Rim Size</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->rim_size }}"
                                            {{ old('rim_size') == $size->rim_size ? 'selected' : '' }}>
                                            {{ $size->rim_size }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Speed</label>
                                <select name="speed" class="form-select @error('speed') is-invalid @enderror">
                                    <option disabled selected>Select Speed</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->speed }}"
                                            {{ old('speed') == $size->speed ? 'selected' : '' }}>{{ $size->speed }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Tyre Type:</label>
                                <input type="text" value="{{ old('tyre_type') }}" name="tyre_type"
                                    class="form-control @error('tyre_type') is-invalid @enderror" placeholder="Tyre Type"
                                    value="Car">
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="">Price:</label>
                                <input type="text" name="price" value="{{ old('price') }}"
                                    class="form-control @error('price') is-invalid @enderror" placeholder="Price">
                            </div>
                        </div>

                        <div class="col-md-5 mb-4">
                            <label for="">Season Type:</label>
                            <div class="">
                                <div class="form-check form-check-inline mt-2">
                                    <label for="winter" class="form-check-label">Winter</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '2' ? 'checked' : '' }} value="2"
                                        id="winter">
                                </div>

                                <div class="form-check form-check-inline mt-2">
                                    <label for="summer" class="form-check-label">Summer</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '1' ? 'checked' : '' }} value="1"
                                        id="summer">
                                </div>

                                <div class="form-check form-check-inline mt-2">
                                    <label for="all" class="form-check-label ">All Season</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '0' ? 'checked' : '' }} value="0"
                                        id="all">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="budget">Budget Tyre</label>
                            <div class="form-check mt-2">
                                <label for="budget">Yes Budget Tyre</label>
                                <input id="budget" type="checkbox" name="budget_tyre"
                                    {{ old('budget_tyre') == '1' ? 'checked' : '' }} value="1"
                                    class="form-check-input @error('budget_tyre') is-invalid @enderror">
                            </div>
                        </div>

                        
                       

                        <div class="col-md-12 mb-4 ">
                            <div class="form-group">
                                
                                <div class="row product-imgs">
                                    <div class="col-4 mb-4">
                                        <label for="">Image 1*:</label>
                                        <input type="file" id="image1" name="image"
                                            class="files form-control @error('image') is-invalid @enderror"
                                            placeholder="Image URL">
                                    </div>
                                    <div class="col-4 mb-4">
                                        <label for="">Image 2:</label>

                                        <input type="file" id="image1" name="image2"
                                            class="files form-control @error('image2') is-invalid @enderror"
                                            placeholder="Image URL">
                                    </div>
                                    <div class="col-4 mb-4">
                                        <label for="">Image 3:</label>

                                        <input type="file" id="image1" name="image3"
                                            class="files form-control @error('image3') is-invalid @enderror"
                                            placeholder="Image URL">
                                    </div>
                                </div>

                                
                                
                            </div>




                            <div class="col-12 mb-4">
                                <textarea class="summernote" name="description" cols="5" placeholder="Benefits">{{ old('description') }}</textarea>
                            </div>


                            <div class="col-12 text-center">
                                <button class="main-btn sm">Add Product</button>
                            </div>
                        </div>
                </form>

            </div>

        </div>
    </div>
@endsection










@section('customjs')
@endsection
