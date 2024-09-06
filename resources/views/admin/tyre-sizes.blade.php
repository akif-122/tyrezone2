@extends('admin.layout.main')

@section('style')
@endsection


@section('maincontent')

<div class="content-area mt-5">
        @include('admin.common.alert')
        
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Tyre Sizes</h5>

            <a href="{{ route('admin.addTyreSize') }}" class="main-btn sm">Add Size</a>

        </div>



        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID #</th>
                        <th>Width</th>
                        <th>Profile</th>
                        <th>Rim Size</th>
                        <th>Speed</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    @if ($sizes->isNotEmpty())
                        @foreach ($sizes as $size)
                            <tr>
                                <td>{{ $size->id }}</td>
                                <td>{{ $size->width }}</td>
                                <td>{{ $size->profile }}</td>
                                <td>{{ $size->rim_size }}</td>
                                <td>{{ $size->speed }}</td>
                                <td>
                                    <div class="last-btns d-flex justify-content-center">
                                        <a href="{{ route('admin.editTyreSize', ['id' => $size->id]) }}"
                                            class="btn btn-success">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <button onclick="deleteSize({{ $size->id }})" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif


                </tbody>
            </table>
        </div>

    </div>
@endsection




@section('customjs')
    <script>
        function deleteSize(id) {
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "{{ route("admin.deleteTyreSize") }}",
                    type: "post",
                    data: {"id": id},
                    success: function (res){
                        if(res.status){
                            window.location.reload();
                        }
                    }
                })
            }
        }
    </script>
@endsection
