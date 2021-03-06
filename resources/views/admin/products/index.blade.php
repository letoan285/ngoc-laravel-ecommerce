@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <span>Product List</span>
                <span class="pull-right"><a class="btn btn-sm btn-success" href=""><i class="fa fa-plus"></i> Add new</a></span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <form action="" class="form-inline form-group" method="GET">
                            <input type="text" class="form-control" placeholder="Search Product...">
                            <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Orders</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Activities</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> <a href=""><img width="100" src="{{ asset($product->image) }}" alt=""></a> </td>
                                <td><a href="">{{ $product->name }}</a> </td>
                                <td>{{ $product->short_description }}</td>
                                <td>{{ $product->getCateName($product->category_id) }}</td>
                                <td>{{ $product->sell_price }}</td>
                                <td>{{ $product->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href=""><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2">
                    {{ $products->links() }}
                </div>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
@endsection