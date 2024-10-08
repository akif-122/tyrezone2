@extends('admin.layout.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/dropzone/dropzone.min.css') }}" />
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

                        <div class="col-md-4 mb-4">
                            <div class="row g-2">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Width</label>
                                        <input class="form-control @error('width') is-invalid @enderror" type="text"
                                            placeholder="Width" name="width" id="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Profile</label>
                                        <input class="form-control @error('profile') is-invalid @enderror" type="text"
                                            placeholder="Profile" name="profile" id="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="row g-2">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Rim Size</label>
                                        <input class="form-control @error('rim_size') is-invalid @enderror" type="text"
                                            placeholder="Rim Size" name="rim_size" id="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="">Speed</label>
                                        <input class="form-control @error('speed') is-invalid @enderror" type="text"
                                            placeholder="Speed" name="speed" id="">
                                    </div>
                                </div>
                            </div>
                        </div>





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
                                        name="season_type" {{ old('season_type') == '2' ? 'checked' : '' }}
                                        value="2" id="winter">
                                </div>

                                <div class="form-check form-check-inline mt-2">
                                    <label for="summer" class="form-check-label">Summer</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '1' ? 'checked' : '' }}
                                        value="1" id="summer">
                                </div>

                                <div class="form-check form-check-inline mt-2">
                                    <label for="all" class="form-check-label ">All Season</label>
                                    <input type="radio"
                                        class="form-check-input @error('season_type') is-invalid @enderror"
                                        name="season_type" {{ old('season_type') == '0' ? 'checked' : '' }}
                                        value="0" id="all">
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

                        <div class="col-12">
                            <div id="image" class="dropzone dz-clickable">
                                <div class="dz-message needsclick">
                                    <br>Drop files here or click to upload.<br><br>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="img_wrapper">

                        </div>



                        <div class="col-md-12 mb-4 ">
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
    <script src="{{ asset('admin/assets/dropzone/dropzone.min.js') }}"></script>

    <script>
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            // uploadprogress: function(file, progress, bytesSent) {
            //     $("button[type=submit]").prop('disabled', true);
            // },
            url: "{{ route('temp.image.upload') }}",
            maxFiles: 10,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, res) {
                console.log(res)


                let html = `<div class="col-md-3 my-3 " id="img-container-${res.image_id}">
                                <div class="card">
                                    <button type="button" class="btn btn-sm btn-danger" onclick="handleDeleteTempImg(${res.image_id})">Delete</button>
                                    
                                    <img src="${res.image_path}" width="100%" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                                    <div class="card-body">
                                        <input type="text"  name="img_id[]" id="img_id" value="${res.image_id}" class="form-control">
                                    </div>
                                </div>
                            </div>`;

                console.log(html);

                $("#img_wrapper").append(html);

                // $("#image_id").val(response.image_id);
                this.removeFile(file);
            }
        });

        // DELETE TEMP IMAGE
        function handleDeleteTempImg(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route("temp.image.delete") }}",
                    type: "post", 
                    data: {id},
                    success: function (res){
                        console.log(res);
                        if(res.status){
                            $("#img-container-"+id).remove();
                        }
                    }
                })
            }
        }
    </script>
@endsection
