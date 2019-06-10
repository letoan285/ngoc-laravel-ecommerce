@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    <span>Create Product</span>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                        @if ($errors->first('name'))
                           <span class="text-danger"> {{$errors->first('name')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Sell Price</label>
                        <input type="number" class="form-control" name="sell_price">
                        @if ($errors->first('sell_price'))
                           <span class="text-danger"> {{$errors->first('sell_price')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $cate)
                            <option value="{{ $cate->id}}">{{ $cate->name}}</option>
                                
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