@extends('layouts.admin')
@section('content')
<div class="row" id="supplier-content">
    <div class="col-7">
        <div id="msg"></div>
        <div>
            <div class="card">
                <div class="card-header">
                    <span>Add Category</span>
                </div>
                <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="text" class="form-control" id="logo">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                </div>
                <div class="card-footer">
                    <button id="btn-submit" class="btn btn-success btn-block"><i class="fa fa-plus"></i> Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <span>Category List</span>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="supplier-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Activities</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td><a href="">{{ $supplier->name }}</a> </td>
                                <td>{{ $supplier->address }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href=""><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2">
                </div>
            </div>
            <div class="card-footer"></div>
            
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $("#btn-submit").on('click', function(){
            let name = $("#name").val();
            let phone = $("#phone").val();
            let address = $("#address").val();
            let logo = $("#logo").val();
            let _token = $("#token").val();
            // console.log(token)
            const supplier = {
                name,
                phone,
                address,
                logo,
                _token
            }
            $.ajax({
                type: 'POST',
                data: supplier,
                url: "{{route('suppliers.store')}}",
                success: function(data){
                    console.log(data);
                    if(data){
                        $('#msg').html('Supplier has inserted !');
                        $('#msg').addClass('text-success');
                        window.location.reload();
                        $('#msg').fadeOut(2000);
                    }
                    // $("#table-body").append(`
                    //     <tr>
                    //         <td>${data.name}</td>
                    //         <td>${data.address}</td>
                    //         <td>${data.logo}</td>
                    //         <td>${data.phone}</td>
                    //         <td>
                    //             <a class="btn btn-sm btn-primary" href=""><i class="fa fa-pencil"></i></a>
                    //             <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                    //         </td>
                    //     </tr>
                    // `);
                }
            });
        //     let autoRefresh = setInterval(() => {
        //         $("#supplier-content").load("{{route('suppliers.index')}}").fadeIn('slow'), 100
        //     };
        // );
        });



        
    });
</script>
    
@endsection