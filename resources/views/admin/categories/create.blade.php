@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <form action="{{route('categories.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    <span>Create Category</span>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="text" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="">Parent ID</label>
                        <select name="parent_id" class="form-control">
                            <option value="0">Choose Parent ID</option>
                            @foreach ($categories as $cate)
                            <option value="{{ $cate->id}}">{{ $cate->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                                <option value="">Choose Parent ID</option>
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
              
                                    
      
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