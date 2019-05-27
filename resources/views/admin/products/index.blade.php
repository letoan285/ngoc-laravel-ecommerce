@foreach ($products as $key=> $product)
    <ul>
        <li>{{$key}}</li>
        <li>{{$product['name']}}</li>
    </ul>
@endforeach
