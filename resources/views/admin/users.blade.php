@extends('admin.layout.main')

@section('style')
@endsection






@section('maincontent')
    <div class="content-area mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">All Users</h5>

            <a class="main-btn sm" href="{{ route("admin.addUser") }}">Add User</a>

        </div>

        <p class="text-danger"></p>
        <p class="text-success"></p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Postcode</th>
                        <th>Company Phone</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>F name</td>
                        <td>L name</td>
                        <td>User@gmail.com</td>
                        <td>04643984378</td>
                        <td>Company</td>
                        <td>Pakistan</td>
                        <td>Charsadda</td>
                        <td>34 45 </td>
                        <td>24420</td>
                        <td>0934784398</td>


                        <td>
                            <a href="{{ route("admin.editUser", ["id"=>3]) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen"></i></a>

                            <a href="php/delete-user.html?id=1" class="btn btn-sm btn-danger"><i
                                    class="fa-solid fa-trash-can"></i></a>

                        </td>

                </tbody>
            </table>
        </div>

    </div>
@endsection










@section('customjs')
@endsection
