@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <form action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    <span>Create User</span>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role_id[]" class="form-control" multiple>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id}}">{{ $role->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection