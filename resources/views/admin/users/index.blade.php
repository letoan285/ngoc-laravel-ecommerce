@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <span>User List</span>
                <span class="pull-right"><a class="btn btn-sm btn-success" href="{{route('users.create')}}"><i class="fa fa-plus"></i> Add new</a></span>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Orders</th>
                            <th>Name</th>
                            <th>Parent ID</th>
                            <th>Status</th>
                            <th>Activities</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{route('users.show', $user->id)}}">{{ $user->name }}</a> </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href=""><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2">
                        {{-- {{$users->links()}} --}}
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
@endsection