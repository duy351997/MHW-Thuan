@extends('admin.layout.index')

@php dump($admin) @endphp

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Admin</h6>
            <a href="{{ asset('admin/admin/create/') }}" type="button" class="btn btn-primary float-right">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 50px">STT</th>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->aID }}</td>
                                <td>{{ $value->aFullname }}</td>
                                <td>{{ $value->aEmail }}</td>
                                <td>{{ $value->aPhoneNumber }}</td>
                                @if ($value->aGender == 0)
                                    <td>{{ "Male" }}</td>
                                @else
                                    <td>{{ "Female" }}</td>
                                @endif
                                <td style="width: 160px">
                                    <a href="{{ asset('admin/admin/edit/' . $value->aID) }}"
                                        class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span>
                                        Edit</a>
                                    <a href="{{ asset('admin/admin/delete/' . $value->aID) }}"
                                        onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span
                                            class="glyphicon glyphicon-trash"> </span>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
